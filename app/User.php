<?php

namespace App;

use App\Model\Acidity;
use App\Model\Humidity;
use App\Model\Property;
use App\Model\Security;
use App\Model\Temperature;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','first_name','tel','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function temperatures() {
        return $this->hasMany(Temperature::class);
    }

    public function humidities() {
        return $this->hasMany(Humidity::class);
    }

    public function acidities() {
        return $this->hasMany(Acidity::class);
    }

    public function securities() {
        return $this->hasMany(Security::class);
    }

    public function property() {
        return $this->hasOne(Property::class);
    }
}
