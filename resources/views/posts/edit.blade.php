@extends('layout')

@section('title', 'Post')

@section('content')
<div class="container">
  <h4 class="mt-3"> Edit Post </h4>
  <span class="clearfix"></span>
  <hr>

  @if ($errors -> any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors -> all() as $error)
      <li> {{ $error }} </li>
      @endforeach
    </ul>
  </div>
  @endif
  
<form action="/posts/{{$post->id}}" method="post">
    @method('PATCH')
    @csrf
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title}}" required>
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea type="text" name="description" class="form-control" id="description"  placeholder="Type here" required> {{ $post->description}} </textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-info"> Update Post </button>
  </div>
</form>

</div>

@endsection