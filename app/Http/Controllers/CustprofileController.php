<?php

namespace App\Http\Controllers;

use App\Client;
use App\Customer;
use App\Customer_view;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cust = Client::where('id', Auth::guard('client')->user()->id)->first();
        $custprofile = Customer_view::where('id', Auth::guard('client')->user()->id)->first();
        //dd($custprofile);
        return view('customer.custprofile', compact('cust', 'custprofile'));
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
    public function edit(Request $request, $id)
    {
        $cr = Customer::where('id', $id)->first();
        $clients = Client::where('id', $id)->first();
        $cr->email = $request->email;
        $cr->password = Hash::make($request->password);
        $cr->CPERSON = $request->cperson;
        $cr->ADRS = $request->adrs;
        $cr->TEL = $request->fone;
        $cr->URL = $request->url;
        $cr->update();


        $clients->email = $request->email;
        $clients->password = Hash::make($request->password);
        $clients->update();
        return response()->json($cr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $userclient = Auth::guard('client')->user();
        $usercustomer = Customer::where('id', Auth::user()->id)->first();
        if ($request->hasFile('avatar_url')) {
            //  $url = substr($user)
            if (file_exists($userclient->avatar_url)) {
                unlink($userclient->avatar_url);
            }
            if (file_exists($usercustomer->avatar_url)) {
                unlink($usercustomer->avatar_url);
            }

            $image = $request->file('avatar_url');
            $imageName = str_random(15) . '.' . $image->getClientOriginalExtension();
            $path = $image->move('img/user', $imageName);
            $userclient->avatar_url = $path;
            $usercustomer->avatar_url = $path;
        }
        $usercustomer->update();
        $userclient->update();
        return redirect()->back()->with(['status' => 'updated successfully']);
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
