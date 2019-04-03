@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="container">
  <form action="/contacts/{{ $contact -> id }}" method="POST">
      @method('DELETE')
      @csrf
    <button type="submit" class="btn btn-danger btn-sm float-right">
     <i class="fa fa-trash-o" aria-hidden="true"> Delete </i>  
    </button>
  </form>
  <a href="/contacts/{{ $contact -> id }}/edit" class="pull-right btn btn-info btn-sm mr-2"> 
    <i class="fa fa-pencile-circle-o " aria-hidden="true"> Edit Contact </i>
  </a>
  <h4 class="mt-3"> Contact Details</h4>
  <span class="clearfix"></span>
  <hr>

  Title : {{ $contact -> title }} <br>
  Description : {{ $contact -> description }} <br>
  Created_at : {{ $contact -> created_at }} <br>
  Updated_at : {{ $contact -> updated_at }}


</div>

@endsection