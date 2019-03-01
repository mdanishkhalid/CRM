@extends('layouts.employees.master-dashboard')
@section('title')
    <title>Scarlet | here </title>
@endsection
@section('customStyle')
    <style>


    </style>
@endsection
@section('content')

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
                    <a href="#" class="white-text mx-3">Customer Requests</a>
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
                                {{--<th class="th-lg"><a>Request ID</a></th>--}}
                                {{--<th class="th-lg"><a>Request Date</a></th>--}}
                                <th class="th-lg"><a>Client Name</a></th>
                                <th class="th-lg"><a>Module name</a></th>
                                <th class="th-lg"><a>Form/Report</a></th>
                                <th class="th-lg"><a>Remarks</a></th>
                                <th class="th-lg"><a>Start Date</a></th>
                                <th class="th-lg"><a>End Date</a></th>
                                <th class="th-lg"><a>Days</a></th>
                                <th class="th-lg"><a>Action</a></th>
                            </tr>
                            </thead>
                            <!--Table head-->
                            <!--Table body-->
                            <tbody>
                            @foreach($emprequest as $item)
                                @if($item->REQ_STATUS == '2')
                                    <tr>
                                        {{--                                    <td>{{$item->id}}</td>--}}
                                        {{--<td>{{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}</td>--}}
                                        <td>{{$item->CUST_NAME}}</td>
                                        <td>{{$item->MNAME}}</td>
                                        <td>{{$item->FORM_REPORT}}</td>
                                        <td>{{$item->RMKS}}</td>
                                        <td>{{$item->START_DATE}}</td>
                                        <td>{{$item->END_DATE}}</td>
                                        <td>{{$item->DAYS}}</td>
                                        <td>
                                            <a class="btn btn-sm btn-outline-info" href="#"
                                               onclick="accept('{{$item->id}}','{{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}','{{$item->REQ_STATUS}}','{{$item->CUST_NAME}}',
                                                       '{{$item->MNAME}}','{{$item->FORM_REPORT}}','{{$item->RMKS}}','{{$item->ASSGN_TO_EMP}}',
                                                       '{{$item->ASSGN_DATE}}','{{$item->START_DATE}}','{{$item->END_DATE}}','{{$item->DAYS}}')"
                                               title="Assign"><i
                                                        class="fa fa-eye blue-text"></i></a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
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

    <!--Section: Edit Category modal-->
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
                                {{--<div class="md-form form-sm mr-5">--}}
                                {{--<i class="fa fa-edit prefix"></i>--}}
                                {{--<input type="text" id="reqdate" value="" class="form-control form-control-sm"--}}
                                {{--placeholder="Requested Date" disabled>--}}
                                {{--<label for="reqdate">Requested Date</label>--}}
                                {{--</div>--}}
                                {{--<div class="md-form form-sm mr-5">--}}
                                {{--<i class="fa fa-edit prefix"></i>--}}
                                {{--<input type="text" id="reqsts" value="" class="form-control form-control-sm"--}}
                                {{--placeholder="Request Status" disabled>--}}
                                {{--<label for="reqsts">Request Status</label>--}}
                                {{--</div>--}}

                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="fkcust" value="" class="form-control form-control-sm"
                                           placeholder="Requested Customer" disabled>
                                    <label for="fkcust">Requested Customer</label>
                                </div>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="mname" value="" class="form-control form-control-sm"
                                           placeholder="Module Name" disabled>
                                    <label for="mname">Module Name</label>
                                </div>
                                <div class="md-form form-sm mr-5">
                                    <i class="fa fa-edit prefix"></i>
                                    <input type="text" id="form-report" value="" class="form-control form-control-sm"
                                           placeholder="Forms/Reports" disabled>
                                    <label for="form-report">Forms/Reports</label>
                                </div>
                                <!--Textarea with icon prefix-->
                                <div class="md-form amber-textarea active-amber-textarea">
                                    <i class="fa fa-pencil prefix"></i>
                                    <textarea type="text" id="rmks" class="md-textarea form-control" rows="2" cols="35"
                                              placeholder="Write something here.." disabled></textarea>
                                    <label for="rmks">Write something here..</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Work Performed</h3>
                                <div class="row ml-1">
                                    <div class="md-form form-sm mr-5">
                                        <i class="fa fa-edit prefix "></i>
                                        <input placeholder="Selected date" type="text"
                                               id="asgndate"
                                               class="form-control datepicker" disabled>
                                        <label for="asgndate">Assign Date</label>
                                    </div>
                                    <div class="md-form form-sm mr-5">
                                        <i class="fa fa-edit prefix "></i>
                                        <input placeholder="Selected date" type="text"
                                               id="startdate"
                                               class="form-control datepicker" disabled>
                                        <label for="startdate">Start Date</label>
                                    </div>
                                </div>
                                <div class="row ml-1">
                                    <div class="md-form form-sm mr-5">
                                        <i class="fa fa-edit prefix "></i>
                                        <input placeholder="Selected date" type="text"
                                               id="enddate"
                                               class="form-control datepicker" disabled>
                                        <label for="enddate">End Date</label>
                                    </div>
                                    <div class="md-form form-sm mr-5">
                                        <i class="fa fa-edit prefix "></i>
                                        <input placeholder="Total Days" type="number"
                                               id="days"
                                               class="form-control datepicker" disabled>
                                        <label for="enddate">Total Days</label>
                                    </div>
                                </div>
                                <h3>Complete Task</h3>
                                <div class="md-form form-sm mr-5">
                                    <!-- Small split button group -->
                                    <select class="browser-default custom-select mb-3" id="sts">
                                        <option selected>Request Status</option>
                                        @foreach($sts as $item)
                                            <option value="{{$item->id}}">{{$item->REQSTATUS_NAME}}</option>
                                        @endforeach
                                    </select>

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
    {{csrf_field()}}

    <!--end section-->
        @endsection
        @section('javaScript')
            <script>
                $(document).ready(function () {
                    $('#save').click(function (event) {
                        var mname = $('#newname').val();
                        var formreport = $('#newform').val();
                        var textarea = $('#newtext').val();
                        $.post('crequest', {
                                'mname': mname,
                                'formreport': formreport,
                                'textarea': textarea,
                                '_token': $('input[name=_token]').val()
                            }
                            , function (data) {
//                        console.log(data);
                                $('#categories').load(location.href + ' #categories');
                                $('#newname').val(null);
                                $('#newform').val(null);
                                $('#newtext').val(null);
                                toastr["success"]('Request sent successfully.');
                            });
                    })

                });

                function refresh() {
                    $('#categories').load(location.href + ' #categories');
                }

                function accept(id, req_date, req_status, Fkcust, mname, form_report, rmks, assgn_to, assgn_date, start_date, end_date, days) {

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
                    $('#days').val(days);
                    $('#editmodal').modal('show');
                }

                $(document).ready(function () {
                    $('#edit').click(function (event) {
                        var id = $('#editid').val();
                        var sts = $('#sts').val();

                        $.post('emptasksts/' + id, {
                                'sts': sts,
                                '_token': $('input[name=_token]').val()
                            }
                            , function (data) {
//                        console.log(data);
                                $('#categories').load(location.href + ' #categories');
                                toastr["success"]('Transferd To QA Department successfully.');
                            });
                    })

                });

                $('#id').delay(10).fadeOut('fast');

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