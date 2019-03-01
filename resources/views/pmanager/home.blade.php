@extends('layouts.pmanager.master-dashboard')
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
                    <i class="fa fa-money danger-color"></i>
                    <div class="data">
                        <p>Pending Request</p>
                        <h3 class="font-weight-bold dark-grey-text">{{$pending}}</h3>
                    </div>
                </div>
                <!--/.Card Data-->

                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{$pending}}%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!--Text-->
                    <p class="card-text">Better than last week (25%)</p>
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
                    <i class="fa fa-line-chart warning-color"></i>
                    <div class="data">
                        <p>In Process</p>
                        <h3 class="font-weight-bold dark-grey-text">{{$inprocess}}</h3>
                    </div>
                </div>
                <!--/.Card Data-->

                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <div class="progress mb-3">
                        <div class="progress-bar red accent-2" role="progressbar" style="width: {{$inprocess}}%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!--Text-->
                    <p class="card-text">Worse than last week (25%)</p>
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
                    <i class="fa fa-pie-chart success-color lighten-1"></i>
                    <div class="data">
                        <p>Deployed</p>
                        <h3 class="font-weight-bold dark-grey-text">{{$deployed}}</h3>
                    </div>
                </div>
                <!--/.Card Data-->

                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <div class="progress mb-3">
                        <div class="progress-bar red accent-2" role="progressbar" style="width: {{$deployed}}%"
                             aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!--Text-->
                    <p class="card-text">Worse than last week (75%)</p>
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
                    <i class="fa fa-bar-chart primary-color accent-2"></i>
                    <div class="data">
                        <p>Completed</p>
                        <h3 class="font-weight-bold dark-grey-text">{{$completed}}</h3>
                    </div>
                </div>
                <!--/.Card Data-->

                <!--Card content-->
                <div class="card-body card-body-cascade">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{$completed}}%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <!--Text-->
                    <p class="card-text">Better than last week (25%)</p>
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>
    </div>
    <!-- /.First row -->

    <!-- Second row -->

    <div class="row">
        <!-- First column -->
        <div class="col-lg-6 col-md-12">
            <!--Panel-->

            <div class="card mb-4">
                <div class="card-header white-text primary-color">
                    <a onclick="refreshpending()" title="Refresh"><i
                                class="fa fa-refresh white-text"
                                aria-label="Basic example"> </i> Recent Pending Requests</a>
                </div>
                <div class="card-body">

                    <table class="table table-sm" id="pending">
                        <thead>
                        <tr>
                            <th scope="row">Client Name</th>
                            <th scope="row">Module Name</th>
                            <th scope="row">Requested Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pendingreq as $item)
                            @if($item->REQ_STATUS=='1')
                                <tr>
                                    <td onclick="accept('{{$item->id}}','{{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}','{{$item->REQSTATUS_NAME}}','{{$item->CUST_NAME}}',
                                            '{{$item->MNAME}}','{{$item->FORM_REPORT}}','{{$item->RMKS}}','{{$item->ASSGN_TO_EMP}}',
                                            '{{$item->ASSGN_DATE}}','{{$item->START_DATE}}','{{$item->END_DATE}}')">{{$item->CUST_NAME}}</td>
                                    <td onclick="accept('{{$item->id}}','{{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}','{{$item->REQSTATUS_NAME}}','{{$item->CUST_NAME}}',
                                            '{{$item->MNAME}}','{{$item->FORM_REPORT}}','{{$item->RMKS}}','{{$item->ASSGN_TO_EMP}}',
                                            '{{$item->ASSGN_DATE}}','{{$item->START_DATE}}','{{$item->END_DATE}}')">{{$item->MNAME}}</td>
                                    <td onclick="accept('{{$item->id}}','{{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}','{{$item->REQSTATUS_NAME}}','{{$item->CUST_NAME}}',
                                            '{{$item->MNAME}}','{{$item->FORM_REPORT}}','{{$item->RMKS}}','{{$item->ASSGN_TO_EMP}}',
                                            '{{$item->ASSGN_DATE}}','{{$item->START_DATE}}','{{$item->END_DATE}}')">
                                        {{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}</td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                    {{--<div class="col-md-6">--}}
                    {{--{{$pendingreq->links()}}--}}
                    {{--</div>--}}
                </div>
            </div>
            <!--/.Panel-->

            <!-- Panel -->

            <div class="card mb-4">
                <div class="card-header white-text primary-color">
                    <a onclick="refreshinprocess()" title="Refresh"><i
                                class="fa fa-refresh white-text"
                                aria-label="Basic example"> </i> Recent In-Process Requests</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-sm" id="inprocess">
                            <thead>
                            <tr>
                                <th scope="row">Client Name</th>
                                <th scope="row">Module Name</th>
                                <th scope="row">Requested Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($recentinprocess as $item)
                                <tr>
                                    <td onclick="inprocess('{{$item->CUST_NAME}}','{{$item->MNAME}}','{{$item->ASSGN_TO_EMP}}','{{$item->START_DATE}}',
                                            '{{$item->END_DATE}}','{{$item->DAYS}}')">{{$item->CUST_NAME}}</td>
                                    <td onclick="inprocess('{{$item->CUST_NAME}}','{{$item->MNAME}}','{{$item->ASSGN_TO_EMP}}','{{$item->START_DATE}}',
                                            '{{$item->END_DATE}}','{{$item->DAYS}}')">{{$item->MNAME}}</td>
                                    <td onclick="inprocess('{{$item->CUST_NAME}}','{{$item->MNAME}}','{{$item->ASSGN_TO_EMP}}','{{$item->START_DATE}}',
                                            '{{$item->END_DATE}}','{{$item->DAYS}}')">
                                        {{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3"> No information.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{--<div class="col-md-6">--}}
                        {{--{{$recentinprocess->links()}}--}}
                        {{--</div>--}}

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
                    <a onclick="refreshcomplete()" title="Refresh"><i
                                class="fa fa-refresh white-text mr-1"
                                aria-label="Basic example"> </i>Recent Completed Request Details</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-sm" id="completed">
                            <thead>
                            <tr>
                                <th scope="row">Client Name</th>
                                <th scope="row">Completed By</th>
                                <th scope="row">Completed Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($completereq as $item)
                                @if($item->REQ_STATUS=='8')
                                    <tr>
                                        <td>{{$item->CUST_NAME}}</td>
                                        <td>{{$item->COMP_BY_EMP}}</td>
                                        <td>{{\Carbon\Carbon::parse($item->COMP_DATE)->format('d-m-Y')}}</td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="3"> No information.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{--<div class="col-md-6">--}}
                        {{--{{$completereq->links()}}--}}
                        {{--</div>--}}

                    </div>


                </div>
            </div>
            <!--/.Panel-->

            <!-- Panel -->
            <div class="card mb-4 text-center py-3 red accent-2 white-text">
                <i class="fa fa-bell fa-3x mb-3"></i>
                <h4 class="h4-responsive">28 important messages</h4>
            </div>
            <!-- /.Panel -->

            <!--Section: Intro-->
            <section class="mt-lg-5">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text grey darken-1">
                                Todays Completed task
                            </div>

                            <h6 class="ml-4 pt-4 mt-1 dark-grey-text font-weight-bold"><i
                                        class="fa fa-long-arrow-up blue-text mr-3" aria-hidden="true"></i>
                                {{$todaycompreq}}
                            </h6>
                            <!--/.Card Data-->

                            <!--Card content-->
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar"
                                         style="width: {{$todaycompreq}}%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--Text-->
                                <p class="font-small grey-text">Better than last week (25%)</p>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Panel-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=" col-md-6 mb-4">

                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text warning-color">
                                Today Total Requests
                            </div>

                            <h6 class="ml-4 pt-4 mt-1 dark-grey-text font-weight-bold"><i
                                        class="fa fa-long-arrow-up blue-text mr-3"
                                        aria-hidden="true"></i> {{$todaytotalreq}}
                            </h6>
                            <!--/.Card Data-->

                            <!--Card content-->
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar"
                                         style="width: {{$todaytotalreq}}%"
                                         aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--Text-->
                                <p class="font-small grey-text">Better than last week (25%)</p>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Panel-->

                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Second column -->
            <!-- /.Second column -->
        </div>
        <!-- /.Second row -->
    </div>

    <!--Section: Pending task Category modal-->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-fluid cascading-modal mt-4" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="mt-2" style="margin-left: 45%"><i class="fa fa-newspaper-o"></i> Assign Request</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 border border-left-0 border-dark mr-0">
                                <h3>Request Information</h3>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="editid" class="form-control" disabled>
                                </div>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="reqdate" value="" class="form-control form-control-sm"
                                           placeholder="Requested Date" required>
                                    <label for="reqdate">Requested Date</label>
                                </div>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="reqsts" value="" class="form-control form-control-sm"
                                           placeholder="Request Status" required>
                                    <label for="reqsts">Request Status</label>
                                </div>

                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="fkcust" value="" class="form-control form-control-sm"
                                           placeholder="Requested Customer" required>
                                    <label for="fkcust">Requested Customer</label>
                                </div>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="mname" value="" class="form-control form-control-sm"
                                           placeholder="Module Name" required>
                                    <label for="mname">Module Name</label>
                                </div>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="form-report" value="" class="form-control form-control-sm"
                                           placeholder="Forms/Reports" required>
                                    <label for="form-report">Forms/Reports</label>
                                </div>
                                <!--Textarea with icon prefix-->
                                <div class="md-form amber-textarea active-amber-textarea">
                                    <i class="fa fa-pencil prefix"></i>
                                    <textarea type="text" id="rmks" class="md-textarea form-control" rows="2" cols="35"
                                              placeholder="Write something here.."></textarea>
                                    <label for="rmks">Write something here..</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Work Performed</h3>
                                <div class="md-form form-sm mr-5">
                                    <!-- Small split button group -->
                                    <h5>
                                        <small>Assign Task To Employee</small>
                                    </h5>
                                    <select class="browser-default custom-select mb-3" id="emp">
                                        <option selected>Assign Task</option>
                                        @foreach($emp as $it)
                                            <option value="{{$it->id}}">{{$it->EMP_NAME}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="md-form form-sm mr-5">
                                    <!-- Small split button group -->
                                    <h5>
                                        <small>Request Status</small>
                                    </h5>
                                    <select class="browser-default custom-select mb-3" id="sts">
                                        <option selected>Request Status</option>
                                        @foreach($sts as $item)
                                            <option value="{{$item->id}}">{{$item->REQSTATUS_NAME}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix "></i>
                                    <input placeholder="Selected date" type="text"
                                           id="startdate"
                                           class="form-control datepicker" required>
                                    <label for="startdate">Start Date</label>
                                </div>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix "></i>
                                    <input placeholder="Selected date" type="text"
                                           id="enddate"
                                           class="form-control datepicker" required>
                                    <label for="enddate">End Date</label>
                                </div>
                                <div class="text-center modal-footer mt-1-half">
                                    <button type="submit" class="btn btn-info mb-1 waves-effect waves-light"
                                            data-dismiss="modal"
                                            id="edit">Save
                                        <i class="fa fa-check ml-1"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{csrf_field()}}
    <!--end section-->



    <!-- Section In process Requests Modal Small -->
    <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-lg" role="document">


            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title w-50" id="myModalLabel">In-Process Request Details</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 border m-auto border-left-1 rounded-top border-dark mr-0">
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="clientname" value="" class="form-control form-control-sm"
                                           placeholder="Client Name" required>
                                    <label for="clientname">Client Name</label>
                                </div>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="modname" value="" class="form-control form-control-sm"
                                           placeholder="Module Name" required>
                                    <label for="modname">Module Name</label>
                                </div>

                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="assgntoemp" value="" class="form-control form-control-sm"
                                           placeholder="Assign To" required>
                                    <label for="assgntoemp">Assign To</label>
                                </div>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="start-date" value="" class="form-control form-control-sm"
                                           placeholder="Start Date" required>
                                    <label for="start-date">Start Date</label>
                                </div>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="end-date" value="" class="form-control form-control-sm"
                                           placeholder="End Date" required>
                                    <label for="end-date">End Date</label>
                                </div>
                                <!--Textarea with icon prefix-->
                                <div class="md-form amber-textarea active-amber-textarea">
                                    <i class="fa fa-pencil prefix"></i>
                                    <input type="text" id="din" class="form-control" placeholder="Days">
                                    <label for="Din">Days</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Central Modal Small -->

@endsection


@section('javaScript')
    <script>
        function accept(id, req_date, req_status, Fkcust, mname, form_report, rmks, assgn_to, assgn_date, start_date, end_date) {

            $('#editid').val(id);
            $('#reqdate').val(req_date);
            $('#reqsts').val(req_status);
            $('#fkcust').val(Fkcust);
            $('#mname').val(mname);
            $('#form-report').val(form_report);
            $('#rmks').val(rmks);
            $('#emp').val(assgn_to);
            $('#asgndate').val(assgn_date);
            $('#startdate').val(start_date);
            $('#enddate').val(end_date);
            $('#editmodal').modal('show');
        }

        $(document).ready(function () {
            $('#edit').click(function (event) {
                var id = $('#editid').val();
                var assgn_to = $('#emp').val();
                var sts = $('#sts').val();
                var start_date = $('#startdate').val();
                var end_date = $('#enddate').val();

                $.post('/allreq/' + id, {
                    'assgn_to': assgn_to,
                    'sts': sts,
                    'start_date': start_date,
                    'end_date': end_date,
                    '_token': $('input[name=_token]').val()
                }, function (data) {
//                        console.log(data);
                    $('#pending').load(location.href + ' #pending');
                    toastr["success"]('Assign successfully.');
                });
            })

        });

        function refreshpending() {
            $('#pending').load(location.href + ' #pending');
        }

        function refreshinprocess() {
            $('#inprocess').load(location.href + ' #inprocess');
        }

        function refreshcomplete() {
            $('#completed').load(location.href + ' #completed');
        }

        function inprocess(custname, mname, assgnto, startdate, enddate, days) {
            $('#clientname').val(custname);
            $('#modname').val(mname);
            $('#assgntoemp').val(assgnto);
            $('#start-date').val(startdate);
            $('#end-date').val(enddate);
            $('#din').val(days);
            $('#centralModalSm').modal('show');
        }

        // Data Picker Initialization
        $('.datepicker').pickadate({

            min: [
                true
            ],
            // disable: [],
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection