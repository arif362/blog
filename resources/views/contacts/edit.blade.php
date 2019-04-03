@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="container">
  <h4 class="mt-3"> Edit Contact </h4>
  <span class="clearfix"></span>
  <hr>

<form action="/contacts/{{$contact->id}}" method="post">
    @method('PATCH')
    @csrf
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $contact->title}}">
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea type="text" name="description" class="form-control" id="description"  placeholder="Type here"> {{ $contact->description}} </textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-info"> Update Contact </button>
  </div>
</form>

</div>

@endsection