<?php

namespace App\Http\Controllers\UserCenter;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Validator;

class UsersController extends Controller
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
            'name' => 'required|string|max:255',
            'email' => (is_null($record)) ? 'required|string|email|max:255|unique:users' : 'required|string|email|max:255|unique:users,email,' . $record->id,
            'password' => (is_null($record)) ?'required|string|min:6|confirmed' : 'confirmed'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userList = User::all();
        return view('UserCenter.Users.index', compact('userList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserCenter.Users.create');
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

        $newUser = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        User::create($newUser);

        return redirect(route('UserCenter.Users.Index'));

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
     * @param  User  $selected_user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $selected_user)
    {
        $selected_user->load('roles', 'permissions');
        $rolesList = Role::all();
        $permissionsList = Permission::all();

        return view('UserCenter.Users.edit', compact('selected_user', 'rolesList', 'permissionsList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $selected_user
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, User $selected_user)
    {
        $this->validator($request->all(), $selected_user)->validate();

        $updatedUser = [
            'name'  => $request->name,
            'email' => $request->email,
        ];

        if (!is_null($request->password)){
            $updatedUser['password'] = bcrypt($request->password);
        }

        $selected_user->update($updatedUser);

        $selected_user->syncPermissions((is_null($request->permissions)) ? [] : $request->permissions);
        $selected_user->syncRoles((is_null($request->roles)) ? [] : $request->roles);

        return redirect(route('UserCenter.Users.Index'));
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
