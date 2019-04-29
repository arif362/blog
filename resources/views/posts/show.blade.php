@extends('layout')

@section('title', 'Post')

@section('content')
<div class="container">
  <form action="/posts/{{ $post -> id }}" method="POST">
      @method('DELETE')
      @csrf
    <button type="submit" class="btn btn-danger btn-sm float-right">
     <i class="fa fa-trash-o" aria-hidden="true"> Delete </i>  
    </button>
  </form>
  <a href="/posts/{{ $post -> id }}/edit" class="pull-right btn btn-info btn-sm mr-2"> 
    <i class="fa fa-pencile-circle-o " aria-hidden="true"> Edit Post </i>
  </a>
  <h4 class="mt-3"> Post Details</h4>
  <span class="clearfix"></span>
  <hr>


  <div class="post-details">
    <label>
         <strong> {{ $post -> title }} </strong>
         <span class="fa fa-clock-o"></span>
         <small class="text-muted"> {{ $post -> created_at->diffForHumans() }} </small>
    </label>
    <p> 
    {{ $post -> description }} <br>
    <small class="text-muted"> Last Update {{date('M-d ,Y  g:i a',strtotime($post -> updated_at))}} </small>
  </p>
  </div>

<br><br>

@include('errors')
 
<form method="POST" action="/posts/{{$post-> id}}/comments">
  @csrf
  <div class="form-group">
    <label for="comment_body"> Leave a Comment</label>
    <textarea  type="text" name="body" required class="form-control" id="comment_body" aria-describedby="bodyHelp" placeholder=" Type comment here"></textarea>
    <small id="bodyHelp" class="form-text text-muted"> This is hepl section for guiding users to right way.</small>
  </div>

  <button type="submit" class="btn btn-info btn-sm">Submit</button>
</form>

<br><br>

 @if ($post->comments->count() > 0)
 <h4> All Comments  : <span class="fa fa-comment"></span> {{ $post->comments->count() }} </h4>
<hr>
 @foreach($post -> comments as $comment)
  <div>
    <form action="/comments/{{$comment->id}}" method="POST">
      @method('PATCH')
      @csrf
      <label class="checkbox {{ $comment -> is_approved ? 'cross_sign' : ''}}" for="is_approved">
          <input type="checkbox" name="is_approved" onchange="this.form.submit()" {{ $comment -> is_approved ? 'checked' : ''}} >
        {{$comment -> body}}
      </label>
    </form>
  </div>
 @endforeach
 @endif

</div>

@endsection