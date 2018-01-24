<?php

namespace App\Http\Controllers\TaskCenter;

use App\TaskCenter\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class StatusController extends Controller
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
            'title' => (is_null($record)) ? 'required|string|max:255|unique:statuses' : 'required|string|max:255|unique:statuses,title,' . $record->id,
//            'title' => 'required',
            'color' => 'required'
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
        return view ('TaskCenter.Status.create');
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

        $newData =[
            'title' => $request->title,
            'color' => $request->color,
        ];

        $newStatus = Status::create($newData);

        return redirect(route('TaskCenter.Index'));
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
     * @param Status $selected_status
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Status $selected_status)
    {
        return view('TaskCenter.Status.edit', compact('selected_status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Status $selected_status
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Status $selected_status)
    {
        $this->validator($request->all(), $selected_status)->validate();

        $newData =[
            'title' => $request->title,
            'color' => $request->color,
        ];

        $selected_status->update($newData);

        return redirect(route('TaskCenter.Index'));
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
