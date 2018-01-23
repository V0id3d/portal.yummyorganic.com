<?php

namespace App\Http\Controllers\TaskCenter;

use App\TaskCenter\Division;
use App\TaskCenter\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class ProjectController extends Controller
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
//            'title' => (is_null($record)) ? 'required|string|max:255|unique:divisions' : 'required|string|max:255|unique:divisions,title,' . $record->id,
            'description' => 'required'
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
     * @param Division $selected_division
     * @return \Illuminate\Http\Response
     */
    public function create(Division $selected_division)
    {
        return view('TaskCenter.Project.create', compact('selected_division'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Division $selected_division
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Division $selected_division)
    {
        $this->validator($request->all())->validate();



        //'title', 'description', 'owner_id', 'project_due', 'project_started', 'project_complete'
        $newData = [
            'title' => $request->title,
            'description' => $request->description,
            'creator_id' => auth()->user()->id,
            'project_due' => $request->project_due,
            'division_id' => $selected_division->id
        ];


        $newProject = Project::create($newData);


        return redirect(route('TaskCenter.Division.Show', $selected_division));
    }

    /**
     * Display the specified resource.
     *
     * @param Project $selected_project
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Division $selected_division, Project $selected_project)
    {
        $selected_project->load('division', 'tasks.user');
        return view('TaskCenter.Project.show', compact('selected_project', 'selected_division'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
