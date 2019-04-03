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
	    	$contact = new Contact();
	    	$contact -> title = request('title');
	    	$contact -> description = request('description');
	    	$contact -> save();
	        return redirect('/contacts');
	    }

    
    public function show($id)
	    {
	     	$contact = Contact::findOrFail($id);
	     	return view('contacts.show', compact('contact'));
	    }

    public function edit($id)
	    {
	    	$contact = Contact::findOrFail($id);
	     	return view('contacts.edit', compact('contact'));
	    }

    public function update($id)
	    {
	    	$contact = Contact::findOrFail($id);
	    	$contact -> title = request('title');
	    	$contact -> description = request('description');
	    	$contact -> save();
	     	return redirect('/contacts');
	    }

    public function destroy($id)
	    {
	     	$contact = Contact::findOrFail($id);
	     	$contact -> delete();
	     	return redirect('/contacts');
	    }


}
