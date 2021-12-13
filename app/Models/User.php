<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @method findOrFail($id)
 * @method create(array $array)
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * @var string
     */
    protected $table = 'user';
    /**
     * @var bool
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'email_confirm',
        'image',
        'point',
        'credit',
        'role',
        'currency',
        'trusted_customer',
        'phone',
        'publisher_name',
        'publisher_payment_currency',
        'publisher_payment_method',
        'last_online',
        'password',
        'timestamp',
    ];

    protected static function boot()
    {
        parent::boot();
        // auto-sets values on creation
        static::creating(function ($query) {
//            $query->timestamp = Carbon::now();
        });
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//  TODO: Relationship Start

    public function billingDetails(): HasOne
    {
        return $this->hasOne(BillingDetail::class, 'user_id');
    }

    public function points_activity(): HasMany
    {
        return $this->hasMany(PointsActivity::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(UserNote::class, 'user_id', 'id');
    }

    public function cart(): HasOne
    {
        return $this->hasOne(Cart::class, 'user_id', 'id');
    }
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }
//  TODO: Relationship End
//  TODO: Role Start

    public function isBanned()
    {

        return $this->role == 'banned';
    }

    public function isAdmin()
    {

        return $this->role == 'admin';
    }

//  TODO: Role End

    public function getIp()
    {
        // First get IP as identified and passed by CloudFlare
        if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            return $_SERVER['HTTP_CF_CONNECTING_IP'];
        }
        // Then try REMOTE_ADDR
        if (!empty($_SERVER['REMOTE_ADDR'])) {
            return $_SERVER['REMOTE_ADDR'];
        } // Fall back to HTTP_CLIENT_IP
        elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } // Finally fall back to HTTP_X_FORWARDED_FOR
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }

    public function checkGameAchievements($order)
    {
        // The following line is useless. It only serves to prevent mysql deadlocks between Buy Product and Offer transactions
        UserHasAchievement::find(1);

        $unique_products_bought = $this->uniqueProductsBought($order->id);
        $gameAchievements = Achievement::where(array('type' => 'get_games'))->get();

        foreach ($gameAchievements as $achievement) {
            if ($unique_products_bought >= $achievement->amount) {
                $this->giveAchievement($achievement->id);
            }
        }
    }

    public function giveAchievement($achievement_id, $multiple = false)
    {
        $userHasAchievement = UserHasAchievement::where(array('user_id' => $this->id, 'achievement_id' => $achievement_id))->first();
        if (empty($userHasAchievement)) {
            $userHasAchievement = new UserHasAchievement();
            $userHasAchievement->user_id = $this->id;
            $userHasAchievement->achievement_id = $achievement_id;
        } else {
            // If the achievement can't be completed multiple times, return without doing anything
            if (!$multiple)
                return;
        }
        $amount = $userHasAchievement->achievement->reward;
        $message = "Got " . $amount . " Points for unlocking the achievement: " . $userHasAchievement->achievement->title;
        $url = url('user/achievements');
        $points_before = $this->points;
        $this->updateCurrency($amount, $message, $url);
        PointsActivity::create([
            'user_id' => $this->id,
            'type' => 'achievements',
            'description' => $message,
            'change' => $amount,
            'points_before' => $points_before,
            'points_after' => $this->points
        ]);
        $userHasAchievement->save();
    }

    public function uniqueProductsBought($orderId)
    {
//        $criteria = new CDbCriteria();
//        $criteria->join = "INNER JOIN `order` ON t.order_id = `order`.id";
//        $criteria->compare('`order`.user_id', $this->id);
//        $criteria->addCondition('
//			`order`.status != "unpaid" AND
//			`order`.payment_method != "points" AND
//			`order`.payment_method != "credit"
//		');
//        $criteria->group = "t.product_id";
//        ;
        $order = $this->orders()->where([
            ['id','=',$orderId],
            ['status','!=','unpaid'],
            ['payment_method','!=','points'],
            ['payment_method','!=','credit'],
        ])->first();
        return $order ? $order->orderProducts()->count():0;
    }

    public function checkFriendAchievements()
    {
        // Check if user has recruiter
        $referral = Referral::where(['recruit_id'=>$this->id])->first();
        if ($referral)
        {
            $order_count = $this->orders()->where([
                ['payment_method','=','paypal'],
                ['status','!=','unpaid'],
                ['total_price','>','0'],
            ])->count();
            if ($order_count>0){
                $referral->active = 1;
                $referral->save();
            }

            if ($referral->active)
            {
                $gameAchievements = Achievement::where(array('type'=>'invite_friends'))->get();
                $referral_count = Referral::where(['recruiter_id'=>$referral->recruiter_id,'active'=>1])->count();
                foreach ($gameAchievements as $achievement)
                {
                    if ($referral_count >= $achievement->amount)
                    {
                        $referral->recruiter->giveAchievement($achievement->id);
                    }
                }
            }
        }
    }


}
