<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'name','description'
    ];

    public function courseTimes()
    {
        return $this->belongsToMany('App\CourseTime');
    }
}
