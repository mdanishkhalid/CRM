<?php

namespace App\Http\Controllers;

use App\Client;
use App\Custcatg;
use App\Customer;
use App\Customer_view;
use App\Custstatus;
use App\Custtypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $cats = Customer_view::all();
        $status = Custstatus::all();
        $category = Custcatg::all();
        $types = Custtypes::all();
        $avatar = 'img/Avatars/default-avatar.png';
        // dd($avatar);
        return view('admin.custprofile', compact('cats', 'status', 'category', 'types', 'avatar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cat = new Customer();
        $client = new Client();
        //profile-area
        $cat->id = $request->id;
        $cat->CUST_NAME = $request->name;
        $cat->CPERSON = $request->cperson;
        $cat->ADRS = $request->adrs;
        $cat->TEL = $request->fone;
        $cat->email = $request->email;
        $cat->avatar_url = 'https://a1cf74336522e87f135f-2f21ace9a6cf0052456644b80fa06d4f.ssl.cf2.rackcdn.com/images/site/user-avatar-default.png';

        $cat->password = Hash::make($request->password);
        $cat->URL = $request->url;
        $cat->RMKS = $request->rmks;
        $cat->USID = $request->usid;

        //select-area
        $cat->FKSTATUS = $request->sts;
        $cat->FKCATG = $request->cat;
        $cat->FKTYPE = $request->type;
        $cat->save();


        //save customer to client table for login
        $client->id = $request->id;
        $client->userid = $request->usid;
        $client->name = $request->name;
        $client->email = $request->email;
        $client->avatar_url = 'https://a1cf74336522e87f135f-2f21ace9a6cf0052456644b80fa06d4f.ssl.cf2.rackcdn.com/images/site/user-avatar-default.png';
        $client->password = Hash::make($request->password);
        $client->save();
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


    public function update($id, $text, $email, $password, $tel, $adrs, $cperson, $url, $rmks, $usid, $fksts, $fkcatg, $fktype)
    {
        $cats = Customer::where('id', $id)->first();
        $clients = Client::where('id', $id)->first();
        $cats->CUST_NAME = $text;
        $cats->email = $email;
        $cats->password = $password;
        $cats->TEL = $tel;
        $cats->ADRS = $adrs;
        $cats->CPERSON = $cperson;
        $cats->URL = $url;
        $cats->RMKS = $rmks;
        $cats->USID = $usid;
        $cats->FKSTATUS = $fksts;
        $cats->FKCATG = $fkcatg;
        $cats->FKTYPE = $fktype;
        $cats->save();

        //save customer to client table for login
        $clients->id = $id;
        $clients->userid = $usid;
        $clients->name = $text;
        $clients->email = $email;
        $clients->password = Hash::make($password);
        $clients->save();
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
        $cat = Customer::where('id', $id);
        $clients = Client::where('id', $id);
        $cat->delete();
        $clients->delete();
        return redirect()->back()->with('error', 'Record Deleted');
    }


}
