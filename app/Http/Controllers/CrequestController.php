<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Crequest;
use Auth;
use Illuminate\Http\Request;

class CrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cr = Crequest::where('FKCUST', Auth::guard('client')->user()->id)->get();
//        dd($cr);
        return view('customer.crequest', compact('cr'));
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
//        dd($request->all());
        $cr = new Crequest();
        $cr->MNAME = $request->mname;
        $cr->FORM_REPORT = $request->form;
        $cr->RMKS = $request->textarea;
        $cr->FKCUST = Auth::user()->id;
        $cr->save();
        if ($request->has('file'))
            foreach ($request->file as $file) {

                $extension = $file->getClientOriginalExtension();
                $filename = str_random(10) . $extension;
                $file->move('uploads/attachments/', $filename);
                $att = new Attachment();
                $att->fkreq = $cr->id;
                $att->attachment = $filename;
                $att->save();
            }

        return redirect()->back();
//        return response()->json($cr);
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
        if ($cr->REQ_STATUS == '1') {
            $cr->MNAME = $request->mname;
            $cr->FORM_REPORT = $request->formreport;
            $cr->RMKS = $request->textarea;
            $cr->update();
            return response()->json($cr);
        } else {
            return redirect()->back()->with('error', 'cannot edit');
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
        $cr = Crequest::where('id', $id);
        $cr->delete();
        return redirect()->back()->with('error', 'Record Deleted');
    }
}
