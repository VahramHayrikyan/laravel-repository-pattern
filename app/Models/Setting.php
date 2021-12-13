<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'setting';

    static function getSetting($setting_name)
    {
        $setting = Setting::where(array('name'=>$setting_name))->first();

        return $setting?$setting->value:'';
    }
}
