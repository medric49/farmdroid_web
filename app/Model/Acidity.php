<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Acidity extends Model
{
    protected $fillable = ['user_id','value'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
