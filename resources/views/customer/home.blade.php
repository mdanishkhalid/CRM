@extends('layouts.customer.master-dashboard')
@section('title')
    <title>Scarlet | here </title>
@endsection
@section('customStyle')
    <style>


    </style>
@endsection
@section('content')
    <!-- First row -->
    <div class="row mt-lg-5">
        <!-- First column -->
        <div class="col-xl-3 col-md-6 mb-4">
            <!--Card-->
            <div class="card card-cascade cascading-admin-card">

                <!--Card Data-->
                <div class="admin-up">
                    <a data-placement="bottom" title="Create New Request" id="addNew" data-toggle="modal"
                       data-target="#addnewcat"><i class="fa fa-plus secondary-color"></i></a>
                    <div class="data">
                        <p><strong><b>Click on Plus Sign</b></strong></p>
                    </div>
                </div>
                <!--/.Card Data-->

                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <h4 class="font-weight-bold dark-grey-text">Create New Request</h4>
                    <!--Text-->
                    {{--<p class="card-text">Better than last week (25%)</p>--}}
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>

        <!-- Second column -->
        <div class="col-xl-3 col-md-6 mb-4">
            <!--Card-->
            <div class="card card-cascade cascading-admin-card">

                <!--Card Data-->
                <div class="admin-up">
                    <i class="fa fa-line-chart danger-color"></i>
                    <div class="data">
                        <h6><strong><b>{{ucfirst('pending')}}</b></strong></h6>
                        <h3 class="font-weight-bold dark-grey-text"><b>{{$pending}}</b></h3>
                    </div>
                </div>
                <!--/.Card Data-->

                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{$pending}}%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!--Text-->
                    {{--<p class="card-text">Worse than last week (25%)</p>--}}
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>

        <!-- Third column -->
        <div class="col-xl-3 col-md-6 mb-4">
            <!--Card-->
            <div class="card card-cascade cascading-admin-card">

                <!--Card Data-->
                <div class="admin-up">
                    <i class="fa fa-pie-chart light-blue lighten-1"></i>
                    <div class="data">
                        <h6><strong><b>In Process</b></strong></h6>
                        <h3 class="font-weight-bold dark-grey-text"><b>{{$inprocess}}</b></h3>
                    </div>
                </div>
                <!--/.Card Data-->

                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <div class="progress mb-3">
                        <div class="progress-bar light-blue accent-2" role="progressbar" style="width: {{$inprocess}}%"
                             aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!--Text-->
                    {{--<p class="card-text">Worse than last week (75%)</p>--}}
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>

        <!-- Fourth column -->
        <div class="col-xl-3 col-md-6 mb-4">
            <!--Card-->
            <div class="card card-cascade cascading-admin-card">

                <!--Card Data-->
                <div class="admin-up">
                    <i class="fa fa-bar-chart success-color accent-2"></i>
                    <div class="data">
                        <h6><strong><b>Completed</b></strong></h6>
                        <h3 class="font-weight-bold dark-grey-text">{{$completed}}</h3>
                    </div>
                </div>
                <!--/.Card Data-->

                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <div class="progress mb-3">
                        <div class="progress-bar success-color" role="progressbar" style="width: {{$completed}}%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!--Text-->
                    {{--<p class="card-text">Better than last week (25%)</p>--}}
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>
    </div>
    <!-- /.First row -->

    <!-- Second row -->

    <div class="row">
        <meta http-equiv="refresh" content="120">
        <!-- First column -->
        <div class="col-lg-6 col-md-12">
            <!--Panel-->
            <div class="card mb-4">
                <div class="card-header white-text danger-color">
                    Recent Pending Requests
                </div>
                <div class="card-body">

                    <table class="table no-header mt-1">
                        <thead>
                        <tr>
                            <th scope="row">Module Name</th>
                            <th scope="row">Form/Report</th>
                            <th scope="row">Requested Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($pendingreq as $item)
                            <tr id="refresh">
                                <td>{{$item->MNAME}}</td>
                                <td>{{$item->FORM_REPORT}}</td>
                                <td class="hour">
                                    <small class="grey-text"><i class="fa fa-clock-o"
                                                                aria-hidden="true"></i>{{\Carbon\Carbon::parse($item->REQ_DATE)->diffForHumans()}}
                                    </small>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3"> No Pending Requests.</td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                    <div class="col-md-6">
                        {{$pendingreq->links()}}
                    </div>

                </div>
            </div>
            <!--/.Panel-->

            <!-- Panel -->

            <div class="card mb-4">
                <div class="card-header white-text success-color">
                    Recent Completed Requests
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table">

                            <thead>
                            <tr>
                                <th class="font-weight-bold dark-grey-text">Module Name</th>
                                <th class="font-weight-bold dark-grey-text">Form/Report</th>
                                <th class="font-weight-bold dark-grey-text">Completed Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @forelse($completedreq as $item)
                                <tr>
                                    <td>{{$item->MNAME}}</td>
                                    <td>{{$item->FORM_REPORT}}</td>
                                    <td class="hour">
                                        <small class="grey-text"><i class="fa fa-clock-o"
                                                                    aria-hidden="true"></i> {{\Carbon\Carbon::parse($item->COMP_DATE)->diffForHumans()}}
                                        </small>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3"> No Request Complete yet.</td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table>
                        <div class="col-md-6">
                            {{$completedreq->links()}}
                        </div>

                    </div>

                </div>
            </div>

            <!-- /.Panel -->
        </div>

        <!-- /.First column -->

        <div class="col-lg-6 col-md-12">
            <!--Panel-->
            <div class="card mb-4">
                <div class="card-header white-text primary-color">
                    In-process Requests
                </div>
                <div class="card-body">
                    <table class="table no-header mt-1">
                        <thead>
                        <tr>
                            <th scope="row">Module Name</th>
                            <th scope="row">Form/Report</th>
                            <th scope="row">Requested Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($inprocessreq as $item)
                            <tr>
                                <td>{{$item->MNAME}}</td>
                                <td>{{$item->FORM_REPORT}}</td>
                                <td class="hour">
                                    <small class="grey-text"><i class="fa fa-clock-o"
                                                                aria-hidden="true"></i> {{\Carbon\Carbon::parse($item->REQ_DATE)->diffForHumans()}}
                                    </small>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3"> No In-Process Requests.</td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                    <div class="col-md-6">
                        {{$inprocessreq->links()}}
                    </div>
                </div>
            </div>
            <!--/.Panel-->


            <!--INvoices Panel-->
            <div class="card mb-4">
                <div class="card-header white-text warning-color">
                    Unpaid Invoices
                </div>
                <div class="card-body">
                    <table class="table no-header mt-1">
                        <thead>
                        <tr>
                            <th scope="row">Invoice Number</th>
                            <th scope="row">Invoice Name</th>
                            <th scope="row">Invoice Date</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1</td>
                            <td>Finance Invoice</td>
                            <td class="hour">15-11-2018</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sales Invoice</td>
                            <td class="hour">15-11-2018</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Purchase Invoice</td>
                            <td class="hour">15-11-2018</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/.Panel-->
        {{--<!-- Panel -->--}}
        {{--<div class="card mb-4 text-center py-3 red accent-2 white-text">--}}
        {{--<i class="fa fa-bell fa-3x mb-3"></i>--}}
        {{--<h4 class="h4-responsive">28 important messages</h4>--}}
        {{--</div>--}}
        {{--<!-- /.Panel -->--}}

        <!--Section: Intro-->
            <section class="mt-lg-5">

                <!--Grid row-->
                <div class="row">

                    {{--<!--Grid column-->--}}
                    {{--<div class="col-md-6 mb-4">--}}

                    {{--<!--Panel-->--}}
                    {{--<div class="card">--}}
                    {{--<div class="card-header white-text grey darken-1">--}}
                    {{--Unpaid Invoices--}}
                    {{--</div>--}}
                    {{--<br>--}}
                    {{--<br>--}}
                    {{--<h5><b>User Id:</b>{{$info->USID}}</h5>--}}
                    {{--</div>--}}
                    {{--<!--/.Panel-->--}}

                    {{--</div>--}}
                    {{--<!--Grid column-->--}}

                    {{--<!--Grid column-->--}}
                    {{--<div class=" col-md-6 mb-4">--}}

                    {{--<!--Panel-->--}}
                    {{--<div class="card">--}}
                    {{--<div class="card-header white-text warning-color">--}}
                    {{--Monthly sales--}}
                    {{--</div>--}}

                    {{--<h6 class="ml-4 pt-4 mt-1 dark-grey-text font-weight-bold"><i--}}
                    {{--class="fa fa-long-arrow-up blue-text mr-3" aria-hidden="true"></i> $ 2000--}}
                    {{--</h6>--}}
                    {{--<!--/.Card Data-->--}}

                    {{--<!--Card content-->--}}
                    {{--<div class="card-body">--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar bg-primary" role="progressbar" style="width: 65%"--}}
                    {{--aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>--}}
                    {{--</div>--}}
                    {{--<!--Text-->--}}
                    {{--<p class="font-small grey-text">Better than last week (25%)</p>--}}
                    {{--</div>--}}
                    {{--<!--/.Card content-->--}}

                    {{--</div>--}}
                    {{--<!--/.Panel-->--}}

                    {{--</div>--}}
                    {{--<!--Grid column-->--}}
                </div>
                <!--Grid row-->
            </section>
            <!-- Second column -->
            <!-- /.Second column -->
        </div>
        <!-- /.Second row -->
    </div>

    <!--Section: Add Category modal-->
    <div class="modal fade" id="addnewcat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg cascading-modal mt-5" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class=""><i class="fa fa-newspaper-o"></i> Add New Request</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    <h5>Request Information</h5>
                    <div class="md-form form-sm mr-5">
                        <i class="fa fa-edit prefix"></i>
                        <input type="text" id="newname" value="" class="form-control form-control-sm" required>
                        <label for="newname">Module name</label>
                    </div>
                    <div class="md-form form-sm mr-5">
                        <i class="fa fa-edit prefix"></i>
                        <input type="text" id="newform" value="" class="form-control form-control-sm" required>
                        <label for="newform">Forms/Reports</label>
                    </div>
                    <!--Textarea with icon prefix-->
                    <div class="md-form amber-textarea active-amber-textarea">
                        <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="newtext" class="md-textarea form-control" rows="3"></textarea>
                        <label for="newtext">Write something here..</label>
                    </div>
                    <div class="text-center mt-1-half">
                        <button class="btn btn-info mb-1 waves-effect waves-light" id="save" data-dismiss="modal">
                            Save
                            <i class="fa fa-check ml-1"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end section-->
    {{csrf_field()}}
@endsection


@section('javaScript')
    <script>
        $(document).ready(function () {
            $('#save').click(function (event) {
                var mname = $('#newname').val();
                var formreport = $('#newform').val();
                var textarea = $('#newtext').val();

                $.post('/crequest', {
                        'mname': mname,
                        'formreport': formreport,
                        'textarea': textarea,
                        '_token': $('input[name=_token]').val()
                    }
                    , function (data) {
//                        console.log(data);
                        $('#newname').val(null);
                        $('#newform').val(null);
                        $('#newtext').val(null);
                        toastr["success"]('Request sent successfully.');

                    });
            })
        });


        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
@endsection