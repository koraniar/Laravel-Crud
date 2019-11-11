<?php

namespace App;

use App\Module;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'name'
    ];

    public function users() {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function modules() {
        return $this->belongsToMany('App\Module')->withTimestamps();
    }
}
