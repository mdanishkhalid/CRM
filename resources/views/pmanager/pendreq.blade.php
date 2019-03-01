@extends('layouts.pmanager.master-dashboard')
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
                    <a href="#" class="white-text mx-3">Pending Requests</a>
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
                                <th class="th-lg"><a>Action</a></th>
                            </tr>
                            </thead>
                            <!--Table head-->
                            <!--Table body-->
                            <tbody>
                            @foreach($allreq as $item)
                                @if($item->REQ_STATUS=='1')
                                    <tr>
                                        <td>
                                            {{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}</td>
                                        <td>{{$item->CUST_NAME}}</td>
                                        <td>{{$item->MNAME}}</td>
                                        <td>{{$item->FORM_REPORT}}</td>
                                        <td>{{$item->RMKS}}</td>
                                        <td>{{$item->REQSTATUS_NAME}}</td>
                                        <td><a href="{{url('download/'.$item->id)}}"><i
                                                        class="fa fa-download blue-text flex-center"></i></a></td>
                                        <td>
                                            <a class="btn btn-sm btn-outline-danger" href="#"
                                               onclick="accept('{{$item->id}}','{{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}','{{$item->REQSTATUS_NAME}}','{{$item->CUST_NAME}}',
                                                       '{{$item->MNAME}}','{{$item->FORM_REPORT}}','{{$item->RMKS}}','{{$item->ASSGN_TO_EMP}}',
                                                       '{{$item->ASSGN_DATE}}','{{$item->START_DATE}}','{{$item->END_DATE}}')"
                                               title="Assign"><i
                                                        class="fa fa-eye danger-text"></i></a>
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

                $.post('allreq/' + id, {
                        'assgn_to': assgn_to,
                        'sts': sts,
                        'start_date': start_date,
                        'end_date': end_date,
                        '_token': $('input[name=_token]').val()
                    }
                    , function (data) {
//                        console.log(data);
                        $('#categories').load(location.href + ' #categories');
                        toastr["success"]('Assign successfully.');
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