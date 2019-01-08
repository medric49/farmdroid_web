<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    protected $fillable = ['user_id','value'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
