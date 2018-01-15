<?php

namespace App\Http\Controllers\CustomerCenter;

use App\CustomerCenter\Company;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Mixed_;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyList = Company::all()->load('contacts');

        return view('CustomerCenter.Company.index', compact('companyList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CustomerCenter.Company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCompany = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'notes' => $request->notes
        ];

        $selected_company = Company::create($newCompany);

        return redirect(route('CustomerCenter.Company.Index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Mixed  $selected_company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $selected_company)
    {
//        dd($selected_company);
        return view('CustomerCenter.Company.edit', compact('selected_company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $selected_company)
    {
        $updatedCompany = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'notes' => $request->notes
        ];

        $selected_company->update($updatedCompany);

        return redirect(route('CustomerCenter.Company.Index'));

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
