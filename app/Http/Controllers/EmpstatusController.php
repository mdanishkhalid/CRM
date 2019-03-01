<?php

namespace App\Http\Controllers;

use App\Empstatus;
use Illuminate\Http\Request;

class EmpstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Empstatus::all();
        return view('admin.empstatus', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cat = new Empstatus();
        $cat->ESTATUS_NAME = $request->text;
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


    public function update($id, $name)
    {

        $cats = Empstatus::where('id', $id)->first();
        $cats->ESTATUS_NAME = $name;
        $cats->save();
        //dd($cats);
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
        $cat = Empstatus::where('id', $id);
        $cat->delete();
        return redirect()->back()->with('error', 'Record Deleted');
    }
}
