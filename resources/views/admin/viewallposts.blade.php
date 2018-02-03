@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View All Posts</div>

                <div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Title</th>
								<th>Slug</th>
								<th>Author</th>
								<th>Content</th>
								<th>Posted At</th>
							</tr>
						</thead>
						
						<tbody>
						@foreach ($posts->data as $p)
							<tr>
								<td>
									<a href="/admin/posts/{{ $p->id }}">
										{{ $p->title }}
									</a>
								</td>
								<td>{{ $p->slug }}</td>
								<td>{{ $p->author->name }}</td>
								<td>{{ $p->content }}</td>
								<td>{{ $p->created_at }}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					
					{{-- handle pagination since we are using POPOs --}}
					<p>
						@if ($posts->prev_page_url !== null)
							<a href="{{ $posts->prev_page_url }}">Prev</a>
						@endif
							
							Page {{ $posts->current_page }} of {{ $posts->last_page }}
							
						@if ($posts->next_page_url !== null)
							<a href="{{ $posts->next_page_url }}">Next</a>
						@endif
					</p>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection