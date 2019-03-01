<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Employee;
use App\Reqstatus;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $pm = Admin::find(Auth::user()->id);
//        dd($pm->designation);
        if ($pm->designation == '6') {

            return view('admin.home');
        } elseif ($pm->designation == '2') {
            $pending = \DB::table('crequests')->where('REQ_STATUS', '=', '1')->get()->count();
            $inprocess = \DB::table('crequests')->where('REQ_STATUS', '=', '2')
                ->orWhere('REQ_STATUS', '=', '3')
                ->orWhere('REQ_STATUS', '=', '4')
                ->orWhere('REQ_STATUS', '=', '5')->get()->count();
            $deployed = \DB::table('crequests')->where('REQ_STATUS', '=', '6')
                ->orWhere('REQ_STATUS', '=', '7')->get()->count();
            $completed = \DB::table('crequests')->where('REQ_STATUS', '=', '8')->get()->count();

            $emp = Employee::all();
            $sts = Reqstatus::all();

            $pendingreq = \DB::table('crequest_views')->get();

            $recentinprocess = \DB::table('crequest_views')->where('REQ_STATUS', '=', '2')
                ->orWhere('REQ_STATUS', '=', '3')
                ->orWhere('REQ_STATUS', '=', '4')
                ->orWhere('REQ_STATUS', '=', '5')->get();

            $completereq = \DB::table('crequest_views')->get();

            $todaycompreq = \DB::table('crequest_views')->where('COMP_DATE', '=', \Carbon\Carbon::today()->toDateString())->get()->count();

            $todaytotalreq = \DB::table('crequest_views')->where('REQ_DATE', '=', \Carbon\Carbon::today()->toDateString())->get()->count();

            return view('pmanager.home', compact('pending', 'inprocess', 'deployed', 'completed', 'pendingreq', 'emp',
                'sts', 'recentinprocess', 'completereq', 'todaycompreq', 'todaytotalreq'));
        } elseif ($pm->designation == '3') {
            return view('QA.home');
        } elseif ($pm->designation == '5') {
            return view('Clientsupport.home');
        } else {
            return view('employees.home');
        }

    }
}
