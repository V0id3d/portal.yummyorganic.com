<?php

namespace App\Http\Controllers\TaskCenter;

use App\TaskCenter\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class DivisionController extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @param  mixed $record
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data, $record = null)
    {
        return Validator::make($data, [
            'title' => (is_null($record)) ? 'required|string|max:255|unique:divisions' : 'required|string|max:255|unique:divisions,title,' . $record->id,
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
        return view('TaskCenter.Division.create');
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

        $newData = [
            'title' =>  $request->title,
            'discription' => $request->description,
            'owner_id'   => auth()->user()->id
        ];

        $newDivision = Division::create($newData);

        return redirect(route('TaskCenter.Division.Show', $newDivision));
    }

    /**
     * Display the specified resource.
     *
     * @param Division $selected_division
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Division $selected_division)
    {
        $selected_division->load('projects.tasks');
        return view('TaskCenter.Division.show', compact('selected_division'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Division $selected_division
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Division $selected_division)
    {
        return view('TaskCenter.Division.edit', compact('selected_division'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Division $selected_division
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Division $selected_division)
    {
        $this->validator($request->all())->validate();

        $updatedData = [
            'title' =>  $request->title,
            'description' => $request->description,
            'owner_id'   => auth()->user()->id
        ];

        $selected_division->update($updatedData);

        return redirect(route('TaskCenter.Division.Show', $selected_division));
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
