<?php

namespace App\Http\Controllers\ProductCenter;

use App\ProductCenter\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class BrandController extends Controller
{
    protected function validator(array $data, $record = null)
    {
        return Validator::make($data, [
            'name' => (is_null($record)) ? 'required|string|max:255|unique:brands' : 'required|string|max:255|unique:brands,name,' . $record->id,
            'description' => 'required',
            'slug' => 'required'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ProductCenter.Brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        $newBrand = Brand::create([
            'slug' => $request->slug,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if($request->hasFile('logo')){
            $newBrand->addMediaFromRequest('logo')
                ->sanitizingFileName(function($fileName) {
                    return strtolower(str_replace(['#', '/', '\\', ' '], '-', $fileName));
                })
                ->toMediaCollection('logos');
        }

        return redirect(route('ProductCenter.Index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Brand $selected_brand
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Brand $selected_brand)
    {
        $selected_brand->load('products');
        return view('ProductCenter.Brand.show', compact('selected_brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Brand $selected_brand
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Brand $selected_brand)
    {
        return view('ProductCenter.Brand.edit', compact('selected_brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Brand $selected_brand
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Brand $selected_brand)
    {
        $this->validator($request->all(), $selected_brand)->validate();

        $updatedBrand = $selected_brand->update([
            'slug' => $request->slug,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        $updatedBrand = $selected_brand;


        if($request->hasFile('logo')){
            $updatedBrand->clearMediaCollection('logos')
                ->addMediaFromRequest('logo')
                ->sanitizingFileName(function($fileName) {
                    return strtolower(str_replace(['#', '/', '\\', ' '], '-', $fileName));
                })
                ->toMediaCollection('logos');
        }

        return redirect(route('ProductCenter.Brand.Show', $selected_brand));


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
