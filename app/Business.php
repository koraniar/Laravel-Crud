<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'name',
        'nit',
        'city',
    ];

    public function users() {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
