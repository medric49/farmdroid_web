<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['user_id','temp_max','hum_max','aci_max','light_max','dist_max','arrosage_auto','flag_arrosage','eclairage_auto','flag_eclairage','security_auto','flag_security'];

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }

}
