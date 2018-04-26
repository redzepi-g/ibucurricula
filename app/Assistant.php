<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    protected $fillable = ['name','course_id'];

    public function courses(){

        return $this->hasMany('App\Course');
    }
}
