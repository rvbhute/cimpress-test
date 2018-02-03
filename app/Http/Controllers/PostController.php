<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PostService;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
	private $postService;
	
	public function __construct(PostService $postService)
	{
		$this->postService = $postService;
		
		$this->middleware('auth');
	}

	function dashboard()
	{
		return view('admin.dashboard');
	}
	
    function viewNewPostForm()
	{
		return view('admin.createform');
	}
	
	function saveNewPost(Request $request)
	{
		$title = $request->input('title');
		$content = $request->input('content');
		$author_id = Auth::id();
		
		$newPostId = $this->postService->createNewPost($title, $content, $author_id);
		
		return redirect("/admin/posts/{$newPostId}");

	}
	
	function viewPost($id)
	{
		$post = $this->postService->getPost($id);
		
		return view('admin.viewpost', ['post' => $post]);
	}
	
	function index() 
	{
		$posts = $this->postService->getPosts();
		return view('admin.viewallposts', ['posts' => $posts]);
	}
}