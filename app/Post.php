<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id', 'slug', 'title', 'content'
    ];
	
	public function author()
    {
        return $this->belongsTo('App\User', 'author_id');
    }

}
