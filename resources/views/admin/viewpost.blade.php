@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Post</div>

                <div class="panel-body">
				
				<h3>Title</h3>
				{{ $post->title }}
				<br>
				
				<h3>Slug</h3>
				{{ $post->slug }}
				<br>
				
				<h3>Content</h3>
				{{ $post->content }}
				<br>
				
				<h3>Author</h3>
				{{ $post->author->name }}
				<br>
				
				<h3>Posted At</h3>
				{{ $post->created_at }}
				<br>
				
                </div>
            </div>
        </div>
    </div>
</div>
@endsection