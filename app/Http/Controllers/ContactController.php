<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Http\Requests\StorecontactRequest;
use App\Http\Requests\UpdatecontactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts=contact::paginate(config('pagination.count'));
        return view('admin.contacts.index',get_defined_vars());
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        return view('admin.contacts.show',get_defined_vars());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        $contact->delete();
        return to_route('admin.contacts.index')->with('success',__('keywords.deleted_successfully'));
    }

    
}
