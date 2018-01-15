<?php

namespace App\Http\Controllers\UserCenter;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Validator;

class PermissionsController extends Controller
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
            'name' => (is_null($record)) ? 'required|string|max:255|unique' : 'required|string|max:255|unique:permissions,name,' . $record->id,
            'description' => 'required|string',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissionsList = Permission::all();
        return view('UserCenter.Permissions.index', compact('permissionsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserCenter.Permissions.create');
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

        $newPermissions = [
            'name' => $request->name,
            'description' => $request->description
        ];

        Permission::create($newPermissions);

        return redirect(route('UserCenter.Permissions.Index'));
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
     * @param  Permission  $selected_permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $selected_permission)
    {
        $selected_permission->load('users', 'roles');
        $usersList = User::all();
        $rolesList = Role::all();

        return view('UserCenter.Permissions.edit', compact('selected_permission' , 'usersList', 'rolesList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Permission  $selected_permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $selected_permission)
    {
        $this->validator($request->all())->validate();


        $updatedPermission = [
            'name' => $request->name,
            'guard_name' => $request->guard_name,
            'description' => $request->description
        ];

        $selected_permission->update($updatedPermission);

        return redirect(route('UserCenter.Permissions.Index'));
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
