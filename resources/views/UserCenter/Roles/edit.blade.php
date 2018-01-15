@extends('layouts.admin')

@section('main-content')
    <header class="header no-border" xmlns="http://www.w3.org/1999/html">
        <div class="header-info">
            <div class="left">
                <h2 class="header-title"><strong>Access Center</strong> Update Role</h2>
            </div>
        </div>
    </header>


    <div class="main-content">
        <div class="row">

            <div class="col-12">
                <div class="card card-shadowed form-type-material">
                    <header class="card-header">
                        <h4 class="card-title"><strong>Update</strong> Role</h4>
                    </header>

                    <div class="card-body">
                        <form action="{{ route('UserCenter.Roles.Update', $selected_role) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name', $selected_role->name) }}">
                                        <label>Role Name</label>
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group do-float">
                                        <input type="text" class="form-control{{ $errors->has('guard_name') ? ' is-invalid' : '' }}" id="guard_name" name="guard_name" value="{{ old('guard_name', $selected_role->guard_name) }}" readonly>
                                        <label>Guard</label>
                                        @if ($errors->has('guard_name'))
                                            <div class="invalid-feedback">{{ $errors->first('guard_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="6" name="description">{{ old('description', $selected_role->description) }}</textarea>
                                        <label>Description</label>
                                        @if ($errors->has('description'))
                                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="btn-group bootstrap-select form-control">
                                        <label>
                                            Assigned To Permissions
                                        </label>
                                        <select class="form-control" data-provide="selectpicker" tabindex="-98" multiple data-live-search="true" name="permissions[]">
                                            @foreach ($permissionsList as $permission)
                                                <option value="{{ $permission->name }}" {{ ($selected_role->permissions->pluck('id')->contains($permission->id) ? ' selected' : '') }}>{{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="col-6">
                                    <div class="btn-group bootstrap-select form-control">
                                        <label>
                                            Assigned To Users
                                        </label>
                                        <select class="form-control" data-provide="selectpicker" tabindex="-98" multiple data-live-search="true" name="users[]" disabled>
                                            @foreach ($usersList as $user)
                                                <option value="{{ $user->name }}" {{ ($selected_role->users->pluck('id')->contains($user->id) ? ' selected' : '') }}>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary right">
                                    </div>

                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>




        </div>
    </div>
@endsection