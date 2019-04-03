@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="container">
	<a href="/contacts/create" class="pull-right btn btn-info"> 
		<i class="fa fa-plus-circle" aria-hidden="true"> Add New Contact </i>
	</a>
	<h4 class="mt-3"> <i class="fa fa-list" aria-hidden="true"> Contact List </i> </h4>
	<span class="clearfix"></span>
	<hr>
	<table class="table table-hover table-bordered">
		<thead class="table-info">
			<tr>
				<td> Serial </td>
				<td> Title </td>
				<td> Description </td>
				<td colspan="3" class="text-center"> Action </td>
			</tr>
		</thead>
		<body>
			@foreach($contacts as $contact)
			<tr>
				<td> {{  $contact -> id  }} </td>
				<td> {{  $contact -> title  }}</td>
				<td> {{  $contact -> description  }} </td>
				<td> 
					<a href="/contacts/{{ $contact -> id }}">
						<i class="fa fa-eye" aria-hidden="true"> View </i>
					</a>
				</td>
				<td>
					<a href="/contacts/{{ $contact -> id }}/edit">
					 	<i class="fa fa-pencil-square-o" aria-hidden="true"> Edit </i> 
					</a>
				</td>
				<td> 
					<form action="/contacts/{{ $contact -> id }}" method="POST">
					    @method('DELETE')
    					@csrf
						<button type="submit" class="btn btn-link btn-sm">
						 <i class="fa fa-trash-o" aria-hidden="true"> Delete </i>  
						</button>
					</form>
				</td>
			</tr>
			@endforeach

		</body>
	</table>

</div>

@endsection