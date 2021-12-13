<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'billing_details';
    protected $fillable = [
        'user_id',
        'full_name',
        'phone',
        'address',
        'city',
        'region',
        'country_code',
        'zip_code',
        'date_of_birth',
    ];

    //  TODO: Relationship Start

    public function user()
    {
        return $this->belongsTo(User::class);
    }
//  TODO: Relationship End

}
