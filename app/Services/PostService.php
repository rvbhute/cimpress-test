<?php

namespace App\Services;

use App\Post;

class PostService
{
	private $post;
	
	public function __construct(Post $post)
	{
		$this->post = $post;
	}
		
	function createNewPost($title, $content, $author_id)
	{
		$newPost = $this->post->create([
			'title' => substr($title, 0, 190),
			'content' => $content,
			'slug' => substr($title, 0, 180) . '-' . time(),
			'author_id' => $author_id
		]);
		
		return $newPost->id;
	}
	
	function getPost($id)
	{
		// get the new post with full relations
		$post = $this->post->where('id', $id)->with('author')->get();
		$postObject = json_decode(json_encode($post->toArray()));
		
		// plain old PHP object
		return $postObject[0];
	}
	
	function getPosts()
	{
		$posts = $this->post->with('author')->paginate();
		
		// plain old PHP object
		return json_decode(json_encode($posts->toArray()));
	}
}
