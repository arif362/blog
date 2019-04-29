<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    public function index()
	    {
	    	$contacts = Contact::all();
	     	return view('contacts.index', compact('contacts'));
	    }


    public function create()
	    {
	     	return view('contacts.create');
	    }


    public function store()
	    {
	    	request() -> validate([
	    		'title' => ['required', 'max: 255'],
	    		'description' => ['required', 'min:3']
	    	]);
	    	Contact::create(request(['title', 'description']));
	        return redirect('/contacts');
	    }

    
    public function show(Contact $contact)
	    {
	     	return view('contacts.show', compact('contact'));
	    }

    public function edit(Contact $contact)
	    {
	     	return view('contacts.edit', compact('contact'));
	    }

    public function update(Contact $contact)
	    {
	    	request() -> validate([
	    		'title' => ['required', 'max: 255'],
	    		'description' => ['required', 'min:3']
	    	]);
	   		$contact -> update(request(['title', 'description']));
	     	return view('contacts.show', compact('contact'));
	    }

    public function destroy(Contact $contact)
	    {
	     	$contact -> delete();
	     	return redirect('/contacts');
	    }


}
