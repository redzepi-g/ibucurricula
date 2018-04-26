<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'shortname'];

    public function courses(){

        return $this->hasMany('App\Course');
    }
}
