<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [ 'code', 'name', 'weeklyhours', 'ects', 'students', 'comment','professor_id','assistant_id'];

    public function professor(){

        return $this->belongsTo('App\Professor');
    }

    public function assistant(){

        return $this->belongsTo('App\Assistant');
    }

}

