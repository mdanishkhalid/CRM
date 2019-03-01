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
    return view('welcome');
});

//Route::get('adash', function () {
//    return view('admin.Dashboard');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::GET('admin/home', 'AdminController@home');
Route::GET('admin-logout', 'Admin\LoginController@logout');
Route::GET('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin', 'Admin\LoginController@login');
Route::POST('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');


Route::GET('customer/home', 'ClientController@home');
Route::GET('customer-logout', 'Customer\LoginController@logout');
Route::GET('customer', 'Customer\LoginController@showLoginForm')->name('customer.login');
Route::POST('customer', 'Customer\LoginController@login');
Route::POST('customer-password/email', 'Customer\ForgotPasswordController@sendResetLinkEmail')->name('customer.password.email');
Route::GET('customer-password/reset', 'Customer\ForgotPasswordController@showLinkRequestForm')->name('customer.password.request');
Route::POST('customer-password/reset', 'Customer\ResetPasswordController@reset');
Route::GET('customer-password/reset/{token}', 'Customer\ResetPasswordController@showResetForm')->name('customer.password.reset');


Route::middleware(['auth:admin'])->group(function () {
    /*************All Client Category like textile, engineering, health etc***********************/
    Route::resource('custcatg', 'CustcatgController');
    Route::get('custcatg', 'CustcatgController@index');
    Route::post('custcatg', 'CustcatgController@create');
    Route::get('updatecatg/{id}/{name}', 'CustcatgController@update');
    Route::get('/custcatg/delete/{id}', 'CustcatgController@destroy');
    /*************All Clients type like private limited , public limited , govt sectors etc***********************/
    Route::resource('custtype', 'CusttypeController');
    Route::get('custtype', 'CusttypeController@index');
    Route::post('custtype', 'CusttypeController@create');
    Route::get('updatecattyp/{id}/{name}', 'CusttypeController@update');
    Route::get('/custcattyp/delete/{id}', 'CusttypeController@destroy');
    /*************All Clients Status like active or inactive***********************/
    Route::resource('custstatus', 'CuststsController');
    Route::get('custstatus', 'CuststsController@index');
    Route::post('custstatus', 'CuststsController@create');
    Route::get('updatests/{id}/{name}', 'CuststsController@update');
    Route::get('/custsts/delete/{id}', 'CuststsController@destroy');
    /*************All request-statuses for clients like pending, in process , accepted , rejected etc***********************/
    Route::resource('reqstatus', 'ReqstsController');
    Route::get('reqstatus', 'ReqstsController@index');
    Route::post('reqstatus', 'ReqstsController@create');
    Route::get('updatereq/{id}/{name}', 'ReqstsController@update');
    Route::get('/reqsts/delete/{id}', 'ReqstsController@destroy');
    /*************All Departments for employees like web development, oracle development etc ***********************/
    Route::resource('department', 'DepartmentController');
    Route::get('department', 'DepartmentController@index');
    Route::post('department', 'DepartmentController@create');
    Route::get('updatedep/{id}/{name}', 'DepartmentController@update');
    Route::get('/department/delete/{id}', 'DepartmentController@destroy');
    /*************ALL Employee designations like project manager, ceo , admin , developer**********************/
    Route::resource('designation', 'DesignationController');
    Route::get('designation', 'DesignationController@index');
    Route::post('designation', 'DesignationController@create');
    Route::get('updatedes/{id}/{name}', 'DesignationController@update');
    Route::get('/designation/delete/{id}', 'DesignationController@destroy');

    /*************All employee status like internee, regular , probation etc***********************/
    Route::resource('empsts', 'EmpstatusController');
    Route::get('empsts', 'EmpstatusController@index');
    Route::post('empsts', 'EmpstatusController@create');
    Route::get('updateempsts/{id}/{name}', 'EmpstatusController@update');
    Route::get('/empsts/delete/{id}', 'EmpstatusController@destroy');


    /*************Customer Profile made by admin***********************/
    Route::resource('custprofile', 'CustomerController');
    Route::get('custprofile', 'CustomerController@index');
    Route::post('custprofile', 'CustomerController@create');
    Route::get('updatecprofile/{id}/{text}/{email}/{password}/{tel}/{adrs}/{cperson}/{url}/{rmks}/{avatar}/{usid}/{fksts}/{fkcatg}/{fktype}', 'CustomerController@update');
    Route::get('/custprofile/delete/{id}', 'CustomerController@destroy');

    /***********Employee Profiles made by admin**************/
    Route::resource('empprofile', 'EmployeeController');
    Route::get('empprofile', 'EmployeeController@index');
    Route::post('empprofile', 'EmployeeController@create');
    Route::get('updateempprofile/{id}/{name}/{fname}/{email}/{password}/{tel}/{adrs}/{usid}/{fksts}/{fkdep}/{fkdes}', 'EmployeeController@update');
    Route::get('/empprofile/delete/{id}', 'EmployeeController@destroy');

    /**************************Project manager show all requests regarding all clients***********/
    Route::resource('pendreq', 'PendreqController');
    Route::post('allreq/{id}', 'PendreqController@update');
    Route::get('download/{id}', 'PendreqController@download');

    Route::resource('Reqhistory', 'ReqhistoryController');


    /****************Tasks assigns to employees*******************************/
    Route::resource('emprequest', 'EmptaskassgnController');
    Route::post('emptasksts/{id}', 'EmptaskassgnController@update');

    /****************Tasks assigns to QA*******************************/
    Route::resource('qarequest', 'QaController');
    Route::post('qarequest/{id}', 'QaController@update');

    /****************Tasks assigns to Client support*******************************/
    Route::resource('clientsupport', 'ClientsupportController');
    Route::post('clientsupport/{id}', 'ClientsupportController@update');

//    Route::post('admin/pmhomereq/{id}', 'PmhomeController@updatependreq'); //pending requests assign to employee from pm-home
});

Route::middleware(['auth:client'])->group(function () {

    Route::resource('crequest', 'CrequestController');
    Route::get('/crequest/delete/{id}', 'CrequestController@destroy');
    Route::post('crequest/{id}', 'CrequestController@update');

    Route::resource('customerprofile', 'CustprofileController');
    Route::post('customer/account/update', 'CustprofileController@update');
    Route::post('customerprofileupdate/{id}', 'CustprofileController@edit');

});
