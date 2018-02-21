<?php

namespace App\Http\Controllers\ProductCenter;

use App\ProductCenter\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class TypeController extends Controller
{
    protected function validator(array $data, $record = null)
    {
        return Validator::make($data, [
            'name' => (is_null($record)) ? 'required|string|max:255|unique:types' : 'required|string|max:255|unique:types,name,' . $record->id,
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
        return view('ProductCenter.Type.create');
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

        $newType = Type::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect(route('ProductCenter.Index'));
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
     * @param Type $selected_type
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Type $selected_type)
    {
        return view('ProductCenter.Type.edit', compact('selected_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Type $selected_type
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Type $selected_type)
    {
        $this->validator($request->all(), $selected_type)->validate();

        $updatedType = $selected_type->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect(route('ProductCenter.Index'));
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
