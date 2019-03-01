<?php

namespace App\Http\Controllers;

use App\Crequest;
use App\Crequest_view;
use App\Employee;
use App\Reqstatus;
use Illuminate\Http\Request;

class pendreqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allreq = Crequest_view::all();
//        dd($allreq);
        $emp = Employee::all();
        $sts = Reqstatus::all();
        $attachment = \DB::table('attachments')->get();
//        dd($attachment);
        return view('pmanager.pendreq', compact('allreq', 'emp', 'sts', 'attachment'));
    }

    public function download($reqid)
    {

        $attachment = \DB::table('attachments')->where('fkreq', $reqid)->get();
//        $headers = ["Content-Type"=>"application/zip"];
//        $fileName = $reqid.".zip"; // name of zip
        $file = public_path('uploads/attachments' . $attachment);
        return response()->download(public_path('uploads/attachments' . $file), null, [], null);

//        dd($attachment);
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
        $cr->ASSGN_TO = $request->assgn_to;
        $cr->ASSGN_DATE = \Carbon\Carbon::now()->toDateString();
        $cr->START_DATE = $request->start_date;
        $cr->END_DATE = $request->end_date;
        $cr->REQ_STATUS = $request->sts;
        $start = \Carbon\Carbon::parse($cr->START_DATE);
        $end = \Carbon\Carbon::parse($cr->END_DATE);
        $days = $start->diffInDays($end);

        $cr->DAYS = $days;
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
