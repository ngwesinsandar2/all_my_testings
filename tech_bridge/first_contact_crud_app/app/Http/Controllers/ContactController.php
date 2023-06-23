<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->description = $request->description;
        $contact->save();

        return redirect(route('contact.index'))->with('status', "Contact Created Successfully!");
    }

    // public function show($id)
    // {
    //     $contact = Contact::findOrFail($id);
    //     return view('contact.show', compact('contact'));
    // }
    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

    // public function edit($id)
    // {
    //     $contact = Contact::findOrFail($id);
    //     return view('contact.edit', compact('contact'));
    // }
    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }

    // public function update($id, Request $request)
    // {
    //     $contact = Contact::findOrFail($id);
    //     $contact->name = $request->name;
    //     $contact->phone = $request->phone;
    //     $contact->description = $request->description;
    //     $contact->update();

    //     return redirect(route('contact.index'))->with('status', "Contact $contact->name Updated Successfully!");
    // }
    public function update(Contact $contact, Request $request)
    {
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->description = $request->description;
        $contact->update();

        return redirect(route('contact.index'))->with('status', "Contact $contact->name Updated Successfully!");
    }

    // public function destroy($id)
    // {
    //     $contact = Contact::findOrFail($id);
    //     $contact->delete();

    //     return redirect(route('contact.index'))->with('status', "Contact $contact->name Deleted Successfully!");
    // }
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect(route('contact.index'))->with('status', "Contact $contact->name Deleted Successfully!");
    }
}
