@extends('layout')

@section('title', 'Post')

@section('content')
<div class="container">
	<a href="/posts/create" class="pull-right btn btn-info"> 
		<i class="fa fa-plus-circle" aria-hidden="true"> Add New Post </i>
	</a>
	<h4 class="mt-3"> <i class="fa fa-list" aria-hidden="true"> All Posts </i> </h4>
	<span class="clearfix"></span>
	<hr>

	
	@foreach($posts as $post)
	<div class="post-details">
	<label>
		<a href="/posts/{{ $post -> id }}">
	     <strong> {{ $post -> title }} </strong>
	    </a>
	     <span class="fa fa-clock-o"></span>
	     <small class="text-muted"> {{ $post -> created_at->diffForHumans() }} </small>
	</label>
	<p> 
	{{ $post -> description }} <br>
	<small class="text-muted"> Last Update {{date('M-d ,Y  g:i a',strtotime($post -> updated_at))}} </small>
	</p>
	</div>
	<br>
	@endforeach
</div>

@endsection