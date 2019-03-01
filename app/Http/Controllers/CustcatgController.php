<?php

namespace App\Http\Controllers;

use App\Custcatg;
use Illuminate\Http\Request;

class CustcatgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Custcatg::all();
        return view('admin.custcatg', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cat = new Custcatg();
        $cat->CATG_NAME = $request->text;
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

        $cats = Custcatg::where('id', $id)->first();
        $cats->CATG_NAME = $name;
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
        $cat = Custcatg::find($id);
        if ($cat->customer()->count() > 0) {
            return redirect()->back()->with('error', 'Sorry, Unable to Delete Child record found');
        }
        $cat->delete();
        return redirect()->back()->with('error', 'Record Deleted');
    }
}
