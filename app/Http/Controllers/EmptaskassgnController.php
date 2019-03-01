<?php

namespace App\Http\Controllers;

use App\Crequest;
use App\Crequest_view;
use App\Reqstatus;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;


class EmptaskassgnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emprequest = Crequest_view::where('ASSGN_TO', Auth::user()->id)->get();
        //dd($emprequest);
        $sts = Reqstatus::all();
//dd($emprequest);
//        dd((Auth::guard('admin')->user()->id));
//        dd(Carbon::now()->format('d-m-Y'));
//        dd(Carbon::now()->toDateString());
        return view('employees.emprequest', compact('emprequest', 'sts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cr = Crequest::where('id', $id)->first();
        $cr->REQ_STATUS = $request->sts;
        $cr->COMP_BY = Auth::guard('admin')->user()->id;
        $cr->COMP_DATE = Carbon::now()->toDateString();
        $cr->update();
        return response()->json($cr);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
