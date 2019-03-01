<?php

namespace App\Http\Controllers;

use App\Crequest;
use App\Crequest_view;
use App\Reqstatus;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientsupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $csrequest = Crequest_view::all();
        $sts = Reqstatus::all();
        return view('Clientsupport.clientsupport', compact('csrequest', 'sts'));
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
        if (!$cr->REQ_STATUS == '8') {
            $cr->REQ_STATUS = $request->sts;
            $cr->update();
        } else {
            $cr->REQ_STATUS = $request->sts;
            $cr->UPDT_BY = Auth::guard('admin')->user()->id;
            $cr->UPDT_DATE = Carbon::now()->toDateString();
            $cr->CONF_DATE = Carbon::now()->toDateString();
            $cr->update();
            return response()->json($cr);
        }

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
