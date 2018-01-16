<?php

namespace App\Http\Controllers\CustomerCenter;

use App\CustomerCenter\Company;
use App\CustomerCenter\Contact;
use App\CustomerCenter\Leads;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leadsList = Leads::all();
        return view('CustomerCenter.Leads.index', compact('leadsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CustomerCenter.Leads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newLead = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'source' => $request->source
        ];

        $selected_lead = Leads::create($newLead);

        return redirect(route('CustomerCenter.Lead.Index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Leads $selected_lead)
    {
        return view('CustomerCenter.Leads.show', compact('selected_lead'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Leads $selected_lead
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Leads $selected_lead)
    {
        return view('CustomerCenter.Leads.edit', compact('selected_lead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leads $selected_lead)
    {
        $updatedLead = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'tier' => $request->tier
        ];

        $selected_lead->update($updatedLead);

        return redirect(route('CustomerCenter.Lead.Index'));
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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function exportToCompany(Request $request, Leads $selected_lead)
    {
        $newCompany = [
            'name' => $selected_lead->name,
            'email' => $selected_lead->email,
            'website' => $selected_lead->website,
            'phone' => $selected_lead->phone,
            'address' => $selected_lead->address,
            'address2' => $selected_lead->address2,
            'city' => $selected_lead->city,
            'state' => $selected_lead->state,
            'zip' => $selected_lead->zip,
        ];

        $newCompany = Company::create($newCompany);

        return redirect(route('CustomerCenter.Company.Show', $newCompany));
    }

    public function exportToContact(Request $request, Leads $selected_lead)
    {
        $newContact = [
            'name' => $selected_lead->name,
            'email' => $selected_lead->email,
            'website' => $selected_lead->website,
            'phone' => $selected_lead->phone,
            'address' => $selected_lead->address,
            'address2' => $selected_lead->address2,
            'city' => $selected_lead->city,
            'state' => $selected_lead->state,
            'zip' => $selected_lead->zip,
        ];

        $newContact = Contact::create($newContact);

        return redirect(route('CustomerCenter.Contact.Show', $newContact));

    }
}
