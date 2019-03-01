<?php

namespace App\Http\Controllers;


use App\Crequest_view;
use App\Customer_view;
use Auth;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:client');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $info = Customer_view::where('ID', Auth::user()->id)->first();
        $pending = Crequest_view::where('FKCUST', Auth::user()->id)->where('REQ_STATUS', '=', '1')->get()->count();
        $completed = Crequest_view::where('FKCUST', Auth::user()->id)->where('REQ_STATUS', '=', '8')->get()->count();
        $inprocess = Crequest_view::where('FKCUST', Auth::user()->id)->where('REQ_STATUS', '=', '2')
            ->orWhere('REQ_STATUS', '=', '3')
            ->orWhere('REQ_STATUS', '=', '4')
            ->orWhere('REQ_STATUS', '=', '5')->get()->count();


        $pendingreq = \DB::table('crequest_views')->where('FKCUST', Auth::user()->id)->where('REQ_STATUS', '=', '1')->paginate(5);
        $completedreq = \DB::table('crequest_views')->where('FKCUST', Auth::user()->id)->where('REQ_STATUS', '=', '8')->paginate(5);
        $inprocessreq = \DB::table('crequest_views')->where('FKCUST', Auth::user()->id)->where('REQ_STATUS', '=', '2')
            ->orWhere('REQ_STATUS', '=', '3')
            ->orWhere('REQ_STATUS', '=', '4')
            ->orWhere('REQ_STATUS', '=', '5')->paginate(5);
        //dd($info);
        return view('customer.home', compact('pending', 'inprocess', 'completed', 'pendingreq', 'inprocessreq', 'completedreq', 'info'));
    }
}
