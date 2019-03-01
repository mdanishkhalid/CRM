<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Department;
use App\Designation;
use App\Employee;
use App\Employee_view;
use App\Empstatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Employee_view::all();
        $status = Empstatus::all();
        $department = Department::all();
        $designation = Designation::all();

        return view('admin.empprofile', compact('cats', 'status', 'department', 'designation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cat = new Employee();
        $emp = new Admin();
        //profile-area
        $cat->id = $request->id;
        $cat->EMP_NAME = $request->name;
        $cat->EMP_FNAME = $request->fname;
        $cat->password = Hash::make($request->password);
        $cat->ADRS = $request->adrs;
        $cat->MOB = $request->mob;
        $cat->USID = $request->usid;
        $cat->email = $request->email;

        //select-area
        $cat->FKEMPSTATUS = $request->sts;
        $cat->FKDEPT = $request->dep;
        $cat->FKDSG = $request->des;

        //save employee to employee table for login
        $emp->id = $request->id;
        $emp->usid = $request->usid;
        $emp->designation = $request->des;
        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->password = Hash::make($request->password);
        $emp->save();

        $cat->save();
        return response()->json($cat);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function update($id, $name, $fname, $email, $password, $tel, $adrs, $usid, $fksts, $fkdep, $fkdes)
    {
        $cats = Employee::where('id', $id)->first();
        $cats->EMP_NAME = $name;
        $cats->EMP_FNAME = $fname;
        $cats->email = $email;
        $cats->password = $password;
        $cats->MOB = $tel;
        $cats->ADRS = $adrs;
        $cats->USID = $usid;
        $cats->FKEMPSTATUS = $fksts;
        $cats->FKDEPT = $fkdep;
        $cats->FKDSG = $fkdes;


        $emp = Admin::where('id', $id)->first();
        $emp->id = $id;
        $emp->designation = $fkdes;
        $emp->usid = $usid;
        $emp->name = $name;
        $emp->email = $email;
        $emp->password = Hash::make($password);
        $emp->save();

        $cats->save();

        return response()->json($cats);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Employee::where('id', $id);
        $emp = Admin::where('id', $id);
        $emp->delete();
        $cat->delete();
        return redirect()->back()->with('error', 'Record Deleted');
    }


}
