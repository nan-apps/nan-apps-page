<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
	use SoftDeletes;

	public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function partner()
    {
        return $this->belongsTo('App\Partner');
    } 
}
