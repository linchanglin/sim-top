<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseTime extends Model
{
    protected $fillable = [
        'name','description'
    ];

    public function modules()
    {
        return $this->belongsToMany('App\Module','courestimemodule');
    }
}
