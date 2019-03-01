@extends('layouts.pmanager.master-dashboard')
@section('title')
    <title>Scarlet | here </title>
@endsection
@section('customStyle')
    <style>
    </style>
@endsection
@section('content')
    <section>
        <!--Heading & Date-->
        <div class="row mb-5 mt-lg-8">
            <!--First column-->
            <div class="col-md-4 panel-title mb-5 mt-3">
                <h5><span class="px-4 py-3 white-text z-depth-1-half blue lighten-1" style="
                        border-radius: 5px;">Search analitycs</span></h5>
            </div>
            <!--/First column-->
            <!--Second column-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body pb-1">
                        <form class="md-form" method="post" action="{{url('/Reqhistory')}}"
                              enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-lg-4 col-sm-12">
                                    <!--Date select-->
                                    <select class="browser-default custom-select mb-3" id="sts">
                                        <option selected>Select Status</option>
                                        <option value="">Pending</option>
                                        <option value="">In-Process</option>
                                        <option value="">Completed</option>
                                    </select>
                                    <!--/Date select-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 px-4">
                                    <div class="md-form mr-2 mt-2">
                                        <input placeholder="From" type="text" name="from" id="from"
                                               class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 px-4">
                                    <div class="md-form mt-2">
                                        <input placeholder="To" type="text" id="to" name="to"
                                               class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="mt-0-half">
                                    <button type="submit" class="btn btn-info mb-1 btn-sm waves-effect waves-light"
                                            id="edit">Refresh
                                        <i class="fa fa-check ml-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/Second column-->
        </div>
        <!--Heading & Date-->
    </section>

    <div class="container-fluid">
        <!--Section: Basic examples-->
        <section>
            @include('flashmessage')
            <div class="card card-cascade narrower z-depth-1">
                <!--Card image-->
                <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <a onclick="refresh()" title="Refresh"><i
                                    class="fa fa-refresh white-text"
                                    aria-label="Basic example"> </i></a>
                    </div>
                    <a href="#" class="white-text mx-3">All Requests</a>
                    <div>
                        {{--<a href="#" type="button" id="addNew" data-toggle="modal" data-target="#addnewcat"--}}
                        {{--class="btn btn-outline-white btn-rounded btn-sm px-2"><i--}}
                        {{--class="fa fa-plus mt-0"></i></a>--}}
                    </div>
                </div>
                <!--/Card image-->

                <div class="px-4">
                    <div class="table-responsive">
                        <!--Table-->
                        <table class="table table-hover mb-0" id="categories">
                            <!--Table head-->
                            <thead>
                            <tr>
                                <th class="th-lg"><a>Request Date</a></th>
                                <th class="th-lg"><a>Client name</a></th>
                                <th class="th-lg"><a>Module name</a></th>
                                <th class="th-lg"><a>Form/Report</a></th>
                                <th class="th-lg"><a>Remarks</a></th>
                                <th class="th-lg"><a>Request Status</a></th>
                                <th class="th-lg"><a>Attachments</a></th>
                            </tr>
                            </thead>
                            <!--Table head-->
                            <!--Table body-->
                            <tbody>
                            {{--@foreach($allreq as $item)--}}
                            {{--@if($item->REQ_STATUS=='1')--}}
                            <tr>
                                {{--<td>{{$item->CUST_NAME}}</td>--}}
                                {{--<td>{{$item->MNAME}}</td>--}}
                                {{--<td>{{$item->FORM_REPORT}}</td>--}}
                                {{--<td>{{$item->REQSTATUS_NAME}}</td>--}}
                                {{--<td>--}}
                                {{--{{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}</td>--}}
                                {{--<td>{{$item->RMKS}}</td>--}}
                                {{--<td><a href="{{url('download/'.$item->id)}}"><i class="fa fa-download blue-text flex-center"></i></a></td>--}}
                                {{--<td>--}}
                                {{--<a class="btn btn-sm btn-outline-info" href="#"--}}
                                {{--onclick="accept('{{$item->id}}','{{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}','{{$item->REQSTATUS_NAME}}','{{$item->CUST_NAME}}',--}}
                                {{--'{{$item->MNAME}}','{{$item->FORM_REPORT}}','{{$item->RMKS}}','{{$item->ASSGN_TO_EMP}}',--}}
                                {{--'{{$item->ASSGN_DATE}}','{{$item->START_DATE}}','{{$item->END_DATE}}')"--}}
                                {{--title="Assign"><i--}}
                                {{--class="fa fa-eye blue-text"></i></a>--}}
                                {{--</td>--}}
                            </tr>
                            {{--@endif--}}
                            {{--@endforeach--}}
                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                    <hr class="my-0">
                </div>
            </div>
        </section>
        <!--Section: Basic examples-->
    </div>



    <!--end section-->
@endsection
@section('javaScript')
    <script>
        $('#id').delay(10).fadeOut('fast');

        // Data Picker Initialization
        $('.datepicker').pickadate({

            // disable: [],
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection