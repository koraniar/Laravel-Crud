<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'name',
        'route',
    ];

    public function roles() {
        return $this->belongsToMany('App\Rol')->withTimestamps();
    }
}
