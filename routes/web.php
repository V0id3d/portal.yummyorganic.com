<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::prefix('taskcenter')->group(function () {
        Route::get('/', 'TaskCenter\Projects@index')->name('TaskCenter.Index');
        Route::prefix('project')->group(function () {
            Route::get('/create', 'TaskCenter\Projects@create')->name('TaskCenter.Project.Create');
            Route::post('/create','TaskCenter\Projects@store')->name('TaskCenter.Project.Store');
        });

    });

    Route::prefix('taskcenter')->group(function (){
        // <website>/admin/taskcenter/division
        Route::prefix('division')->group(function() {
            Route::get('/', 'TaskCenter\DivisionController@index')->name('TaskCenter.Division.Index');
            Route::get('/create', 'TaskCenter\DivisionController@create')->name('TaskCenter.Division.Create');
            Route::post('/create', 'TaskCenter\DivisionController@store')->name('TaskCenter.Division.Store');
            Route::get('/{selected_division}/edit', 'TaskCenter\DivisionController@edit')->name('TaskCenter.Division.Edit');
            Route::get('/{selected_division}/show', 'TaskCenter\DivisionController@show')->name('TaskCenter.Division.Show');
            Route::patch('/{selected_division}/edit', 'TaskCenter\DivisionController@update')->name('TaskCenter.Division.Update');
        });

        // <website>/admin/taskcenter/project
        Route::prefix('project')->group(function() {
            Route::get('/', 'TaskCenter\ProjectController@index')->name('TaskCenter.Project.Index');
            Route::get('/create', 'TaskCenter\ProjectController@create')->name('TaskCenter.Project.Create');
            Route::post('/create', 'TaskCenter\ProjectController@store')->name('TaskCenter.Project.Store');
            Route::get('/{selected_project}/edit', 'TaskCenter\ProjectController@edit')->name('TaskCenter.Project.Edit');
            Route::get('/{selected_project}/show', 'TaskCenter\ProjectController@show')->name('TaskCenter.Project.Show');
            Route::patch('/{selected_project}/edit', 'TaskCenter\ProjectController@update')->name('TaskCenter.Project.Update');
        });

        // <website>/admin/taskcenter/task
        Route::prefix('task')->group(function() {
            Route::get('/', 'TaskCenter\TaskController@index')->name('TaskCenter.Task.Index');
            Route::get('/create', 'TaskCenter\TaskController@create')->name('TaskCenter.Task.Create');
            Route::post('/create', 'TaskCenter\TaskController@store')->name('TaskCenter.Task.Store');
            Route::get('/{selected_division}/edit', 'TaskCenter\TaskController@edit')->name('TaskCenter.Task.Edit');
            Route::get('/{selected_division}/show', 'TaskCenter\TaskController@show')->name('TaskCenter.Task.Show');
            Route::patch('/{selected_division}/edit', 'TaskCenter\TaskController@update')->name('TaskCenter.Task.Update');
        });

        // <website>/admin/taskcenter/status
        Route::prefix('status')->group(function() {
            Route::get('/', 'TaskCenter\StatusController@index')->name('TaskCenter.Status.Index');
            Route::get('/create', 'TaskCenter\StatusController@create')->name('TaskCenter.Status.Create');
            Route::post('/create', 'TaskCenter\StatusController@store')->name('TaskCenter.Status.Store');
            Route::get('/{selected_status}/edit', 'TaskCenter\StatusController@edit')->name('TaskCenter.Status.Edit');
            Route::get('/{selected_status}/show', 'TaskCenter\StatusController@show')->name('TaskCenter.Status.Show');
            Route::patch('/{selected_status}/edit', 'TaskCenter\StatusController@update')->name('TaskCenter.Status.Update');
        });


    });
    Route::prefix('customercenter')->group(function () {
        // <website>/admin/customercenter/company
        route::prefix('company')->group(function () {
            Route::get('/', 'CustomerCenter\CompanyController@index')->name('CustomerCenter.Company.Index');
            Route::get('/create', 'CustomerCenter\CompanyController@create')->name('CustomerCenter.Company.Create');
            Route::post('/create', 'CustomerCenter\CompanyController@store')->name('CustomerCenter.Company.Store');
            Route::get('/{selected_company}/edit', 'CustomerCenter\CompanyController@edit')->name('CustomerCenter.Company.Edit');
            Route::get('/{selected_company}/show', "CustomerCenter\CompanyController@show")->name('CustomerCenter.Company.Show');
            Route::patch('/{selected_company}/edit', 'CustomerCenter\CompanyController@update')->name('CustomerCenter.Company.Update');
        });

        // <website>/admin/customercenter/contact
        route::prefix('contact')->group(function () {
            Route::get('/', 'CustomerCenter\ContactController@index')->name('CustomerCenter.Contact.Index');
            Route::get('/create', 'CustomerCenter\ContactController@create')->name('CustomerCenter.Contact.Create');
            Route::post('/create', 'CustomerCenter\ContactController@store')->name('CustomerCenter.Contact.Store');
            Route::get('/{selected_contact}/edit', 'CustomerCenter\ContactController@edit')->name('CustomerCenter.Contact.Edit');
            Route::get('/{selected_contact}/show', "CustomerCenter\ContactController@show")->name('CustomerCenter.Contact.Show');
            Route::patch('/{selected_contact}/edit', 'CustomerCenter\ContactController@update')->name('CustomerCenter.Contact.Update');
        });

        // <website>/admin/customercenter/leads
        route::prefix('lead')->group(function () {
            Route::get('/', 'CustomerCenter\LeadsController@index')->name('CustomerCenter.Lead.Index');
            Route::get('/create', 'CustomerCenter\LeadsController@create')->name('CustomerCenter.Lead.Create');
            Route::post('/create', 'CustomerCenter\LeadsController@store')->name('CustomerCenter.Lead.Store');
            Route::get('/{selected_lead}/show', "CustomerCenter\LeadsController@show")->name('CustomerCenter.Lead.Show');
            Route::get('/{selected_lead}/edit', 'CustomerCenter\LeadsController@edit')->name('CustomerCenter.Lead.Edit');
            Route::patch('/{selected_lead}/edit', 'CustomerCenter\LeadsController@update')->name('CustomerCenter.Lead.Update');
            Route::post('/{selected_lead}/convert/company', 'CustomerCenter\LeadsController@exportToCompany')->name('CustomerCenter.Lead.CompanyConvert');
            Route::post('/{selected_lead}/convert/contact', 'CustomerCenter\LeadsController@exportToContact')->name('CustomerCenter.Lead.ContactConvert');
        });

    });
    Route::prefix('usercenter')->group(function () {
        Route::prefix('users')->group(function () {
            Route::get('/', 'UserCenter\UsersController@index')->name('UserCenter.Users.Index');
            Route::get('/create', 'UserCenter\UsersController@create')->name('UserCenter.Users.Create');
            Route::post('/create', 'UserCenter\UsersController@store')->name('UserCenter.Users.Store');
            Route::get('/{selected_user}/edit', 'UserCenter\UsersController@edit')->name('UserCenter.Users.Edit');
            Route::patch('/{selected_user}/edit', 'UserCenter\UsersController@update')->name('UserCenter.Users.Update');
            Route::delete('/{selected_user}/delete', 'UserCenter\UsersController@destroy')->name('UserCenter.Users.Delete');
        });
        Route::prefix('roles')->group(function () {
            Route::get('/', 'UserCenter\RolesController@index')->name('UserCenter.Roles.Index');
            Route::get('/create', 'UserCenter\RolesController@create')->name('UserCenter.Roles.Create');
            Route::post('/create', 'UserCenter\RolesController@store')->name('UserCenter.Roles.Store');
            Route::get('/{selected_role}/edit', 'UserCenter\RolesController@edit')->name('UserCenter.Roles.Edit');
            Route::patch('/{selected_role}/edit', 'UserCenter\RolesController@update')->name('UserCenter.Roles.Update');
            Route::delete('/{selected_role}/delete', 'UserCenter\RolesController@destroy')->name('UserCenter.Roles.Delete');
        });
        Route::prefix('permissions')->group(function () {
            Route::get('/', 'UserCenter\PermissionsController@index')->name('UserCenter.Permissions.Index');
            Route::get('/create', 'UserCenter\PermissionsController@create')->name('UserCenter.Permissions.Create');
            Route::post('/create', 'UserCenter\PermissionsController@store')->name('UserCenter.Permissions.Store');
            Route::get('/{selected_permission}/edit', 'UserCenter\PermissionsController@edit')->name('UserCenter.Permissions.Edit');
            Route::patch('/{selected_permission}/edit', 'UserCenter\PermissionsController@update')->name('UserCenter.Permissions.Update');
            Route::delete('/{selected_permission}/delete', 'UserCenter\PermissionsController@destroy')->name('UserCenter.Permissions.Delete');
        });
    });
});
