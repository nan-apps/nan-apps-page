<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectTag extends Model
{	

	public function projects()
    {
        return $this->belongsToMany('App\Project');
    }

	public function tags()
    {
        return $this->belongsToMany('App\Tag');
    } 
    
}
