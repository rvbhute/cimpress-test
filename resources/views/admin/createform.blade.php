@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create A New Post</div>

                <div class="panel-body">
				<!-- -->

<form method="POST" action="/admin/posts">

	<input type="hidden" name="_token" value={{ csrf_token() }}>
	
	<div class="form-group">
		<label for="postTitle">Post Title</label>
		<input type="text" class="form-control" id="postTitle" name="title" placeholder="Post Title" required>
	</div>
	
	<div class="form-group">
		<label for="postContent">Post Title</label>
		<textarea class="form-control" id="postContent" name="content" placeholder="Post Content" required></textarea>
	</div>

	<button type="submit" class="btn btn-default">Submit</button>
</form>

				<!-- -->	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection