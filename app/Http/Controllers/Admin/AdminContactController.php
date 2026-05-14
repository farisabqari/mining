<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class AdminContactController extends Controller
{
    public function index()
    {
        $messages = Contact::latest()->paginate(10);

        return view('admin.contacts.index', compact('messages'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Message deleted successfully.');
    }
}
