<?php

namespace App\Http\Controllers\TaskCenter;

use App\TaskCenter\Division;
use App\TaskCenter\Project;
use App\TaskCenter\Task;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class TaskController extends Controller
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
            'title' => 'required',
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
     * @param Project $selected_project
     * @return \Illuminate\Http\Response
     */
    public function create(Division $selected_division, Project $selected_project)
    {
        $userList = User::all();

        return view('TaskCenter.Task.create' , compact('selected_project', 'selected_division', 'userList'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Division $selected_division
     * @param Project $selected_project
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Division $selected_division, Project $selected_project)
    {
        $this->validator($request->all())->validate();

        $newData =[
            'title' => $request->title,
            'description' => $request->description,
            'project_due' => $request->project_due,
            'user_id' => $request->user_id,
            'project_id' => $selected_project->id,
            'creator_id' => auth()->user()->id,
            'status_id' => ($request->status_id) ? $request->status_id : 0
        ];

        dd($newData);
        $newTask = Task::create($newData);

        return redirect(route('TaskCenter.Task.Show', [$selected_division, $selected_project, $newTask]));

    }

    /**
     * Display the specified resource.
     *
     * @param Division $selected_division
     * @param Project $selected_project
     * @param $selected_task
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Division $selected_division, Project $selected_project, Task $selected_task)
    {
        $userList = User::all();
        return view('TaskCenter.Task.show', compact('selected_division', 'selected_project', 'selected_task', 'userList'));
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
     * @param  \Illuminate\Http\Request $request
     * @param Division $selected_division
     * @param Project $selected_project
     * @param Task $selected_task
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Division $selected_division, Project $selected_project, Task $selected_task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Division $selected_division
     * @param Project $selected_project
     * @param Task $selected_task
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Division $selected_division, Project $selected_project, Task $selected_task)
    {
        //
    }
}
