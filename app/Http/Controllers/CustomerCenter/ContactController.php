<?php

namespace App\Http\Controllers\CustomerCenter;

use App\CustomerCenter\Company;
use App\CustomerCenter\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactList = Contact::all()->load('company');

        return view('CustomerCenter.Contact.index', compact('contactList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companyList = Company::all();

        return view('CustomerCenter.Contact.create', compact('companyList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newContact = [
            'name' => $request->name,
            'email' => $request->email,
            'company_id' => $request->company_id,
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'notes' => $request->notes
        ];

        Contact::create($newContact);

//        return redirect(route('CustomerCenter.Company.Index'));
        return redirect(route('CustomerCenter.Contact.Index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $selected_contact)
    {
        $companyList = Company::all();

        return view('CustomerCenter.Contact.show', compact('selected_contact', 'companyList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contact $selected_contact
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Contact $selected_contact)
    {
        $companyList = Company::all();

        return view('CustomerCenter.Contact.edit', compact('selected_contact', 'companyList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Contact $selected_contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $selected_contact)
    {

        $updatedContact = [
            'name' => $request->name,
            'email' => $request->email,
            'company_id' => $request->company_id,
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'notes' => $request->notes
        ];

        $selected_contact->update($updatedContact);

        return redirect(route('CustomerCenter.Contact.Index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
