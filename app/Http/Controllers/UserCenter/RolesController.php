<?php

namespace App\Http\Controllers\UserCenter;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Validator;

class RolesController extends Controller
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @param mixed $record
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data, $record = null)
    {
        return Validator::make($data, [
//            'name' => 'required|string|max:255',
            'name' => (is_null($record)) ? 'required|string|max:255|unique' : 'required|string|max:255|unique:roles,name,' . $record->id,
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
        $rolesList = Role::all();
        return view('UserCenter.Roles.index', compact('rolesList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserCenter.Roles.create');
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

        $newRole = [
            'name' => $request->name,
            'description' => $request->description
        ];

        Role::create($newRole);

        return redirect(route('UserCenter.Roles.Index'));

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
     * @param  Role  $selected_role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $selected_role)
    {
        $selected_role->load('users', 'permissions');
        $usersList = User::all();
        $permissionsList = Permission::all();

        return view('UserCenter.Roles.edit', compact('selected_role', 'usersList', 'permissionsList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Role  $selected_role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $selected_role)
    {

        $this->validator($request->all())->validate();


        $updatedRole = [
            'name' => $request->name,
            'guard_name' => $request->guard_name,
            'description' => $request->description
        ];

        $selected_role->update($updatedRole);
        $selected_role->syncPermissions((is_null($request->permissions)) ? [] : $request->permissions);

        return redirect(route('UserCenter.Roles.Index'));


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
