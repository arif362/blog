<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $guarded = [];

       public function post()
    {
    	return $this -> belongsTo(Post::class);
    }

    public function createApproval($is_approved = true)
    {
      $this->update(compact('is_approved'));
    }
}
