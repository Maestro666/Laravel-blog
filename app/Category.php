<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
	use sluggable;

    protected $fillable = ['title'];

    public function posts()
    {
    	return $this->hasMany(Post::Class);
    }

     public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
