@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="container">
  <h4 class="mt-3"> Create New Contact </h4>
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

<form action="/contacts" method="post">
    @csrf
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" class="form-control" id="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Description:</label>
    <textarea type="text" name="description" class="form-control" id="description" required></textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-info">Submit</button>
  </div>
</form>

</div>

@endsection