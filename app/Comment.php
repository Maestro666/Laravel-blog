<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function posts()
    {
        return $this->hasOne(Post::class);
    }

    public function author()
    {
        return $this->hasOne(User::class);
    }

    public function allow()
    {
    	$this->status = 1;
    	$this->save();
    }

    public function deny()
    {
    	$this->status = 0;
    	$this->save();
    }

    public function toggleStatus()
    {
    	if($this->status = 0)
    	{
    		return $this->allow();
    	}

    	return $this->deny();
    }

    public function remove()
    {
    	$this->delete();
    }
}