@extends('layouts.customer.master-dashboard')
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
                    <a href="#" class="white-text mx-3">Request Grid</a>
                    <div>
                        <a href="#" type="button" id="addNew" data-toggle="modal" data-target="#addnewcat"
                           class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                                    class="fa fa-plus mt-0"></i></a>
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
                                <th class="th-lg"><a>Module name</a></th>
                                <th class="th-lg"><a>Form/Report</a></th>
                                <th class="th-lg"><a>Remarks</a></th>
                                <th class="th-lg"><a>Request Status</a></th>
                                <th class="th-lg"><a>Action</a></th>
                            </tr>
                            </thead>
                            <!--Table head-->
                            <!--Table body-->
                            <tbody>
                            @foreach($cr as $item)
                                <tr>
                                    <td>
                                        {{\Carbon\Carbon::parse($item->REQ_DATE)->format('d-m-Y')}}</td>
                                    <td>{{$item->MNAME}}</td>
                                    <td>{{$item->FORM_REPORT}}</td>
                                    <td>{{$item->RMKS}}</td>
                                    <td>
                                        @if($item->REQ_STATUS=='1')
                                            <button type="button" class="btn btn-outline-info btn-sm m-0 waves-effect">
                                                Pending
                                            </button>
                                        @elseif($item->REQ_STATUS=='2' || $item->REQ_STATUS=='3' || $item->REQ_STATUS=='4' || $item->REQ_STATUS=='5'
                                        || $item->REQ_STATUS=='6' || $item->REQ_STATUS=='7')
                                            <button type="button"
                                                    class="btn btn-outline-primary btn-sm m-0 waves-effect">
                                                In Process
                                            </button>
                                        @elseif($item->REQ_STATUS=='8')
                                            <button type="button"
                                                    class="btn btn-outline-success btn-sm m-0 waves-effect">
                                                Completed
                                            </button>
                                        @elseif($item->REQ_STATUS=='9')
                                            <button type="button"
                                                    class="btn btn-outline-danger btn-sm m-0 waves-effect">
                                                Rejected
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->REQ_STATUS =='1')
                                            <a href="crequest/delete/{{$item->id}}"><i
                                                        class="fa fa-close mr-1 blue-text"></i></a>
                                            <a href="#"
                                               onclick="edit('{{$item->id}}','{{$item->MNAME}}','{{$item->FORM_REPORT}}','{{$item->RMKS}}')"><i
                                                        class="fa fa-edit blue-text"
                                                        aria-label="Basic example"> </i></a>
                                        @endif
                                    </td>
                                </tr>
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


    <!--Section: Add Category modal-->
    <div class="modal fade" id="addnewcat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg cascading-modal" role="document">
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
                <form class="md-form" method="post" action="{{url('/crequest')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body mb-0">
                        <h5>Request Information</h5>
                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newname" value="" name="mname" class="form-control form-control-sm"
                                   required>
                            <label for="newname">Module name</label>
                        </div>
                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newform" value="" name="form" class="form-control form-control-sm"
                                   required>
                            <label for="newform">Forms/Reports</label>
                        </div>
                        <!--Textarea with icon prefix-->
                        <div class="md-form amber-textarea active-amber-textarea">
                            <i class="fa fa-pencil prefix"></i>
                            <textarea type="text" id="newtext" name="textarea" class="md-textarea form-control"
                                      rows="3"></textarea>
                            <label for="newtext">Write something here..</label>
                        </div>
                        <div class="file-upload-wrapper">
                            <input type="file" name="file[]" id="input-file-now-custom-1" class="file-upload"
                                   data-default-file="https://mdbootstrap.com/img/Photos/Others/images/89.jpg" multiple>
                        </div>
                        <div class="text-center mt-1-half">
                            <button type="submit" class="btn btn-info mb-1 waves-effect waves-light">
                                Save
                                <i class="fa fa-check ml-1"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end section-->

    <!--Section: Edit Category modal-->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class=""><i class="fa fa-newspaper-o"></i> Edit Request</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    <div class="md-form form-sm mr-5">
                        <i class="fa fa-edit prefix"></i>
                        <input type="text" id="editid" class="form-control" disabled>
                    </div>
                    <div class="md-form form-sm mr-5">
                        <i class="fa fa-edit prefix"></i>
                        <input type="text" id="editname" value="" class="form-control form-control-sm" required>
                        <label for="editname">Module name</label>
                    </div>
                    <div class="md-form form-sm mr-5">
                        <i class="fa fa-edit prefix"></i>
                        <input type="text" id="editform" value="" class="form-control form-control-sm" required>
                        <label for="editform">Forms/Reports</label>
                    </div>
                    <!--Textarea with icon prefix-->
                    <div class="md-form amber-textarea active-amber-textarea">
                        <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="edittext" class="md-textarea form-control" rows="3"></textarea>
                        <label for="edittext">Write something here..</label>
                    </div>
                    <div class="text-center modal-footer mt-1-half">
                        <button class="btn btn-info mb-1 waves-effect waves-light" data-dismiss="modal" id="edit">Save
                            <i class="fa fa-check ml-1"></i></button>
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

        $('.file_upload').file_upload();
        $(document).ready(function () {
            $('#save').click(function (event) {
                var mname = $('#newname').val();
                var formreport = $('#newform').val();
                var textarea = $('#newtext').val();
//                var attachment = $('#attach').val();
                $.post('crequest', {
                        'mname': mname,
                        'formreport': formreport,
                        'textarea': textarea,
//                        'attachment': attachment,
                        '_token': $('input[name=_token]').val()
                    }
                    , function (data) {
                        console.log(data);
//                        $('#categories').load(location.href + ' #categories');
//                        $('#newname').val(null);
//                        $('#newform').val(null);
//                        $('#newtext').val(null);
//                        $('#attach').val(null);
//                        setInterval(data, 5000);
//                        toastr["success"]('Request sent successfully.');
                    });
            })

        });

        function refresh() {
            $('#categories').load(location.href + ' #categories');
        }

        function edit(id, mname, form_report, rmks) {

            $('#editid').val(id);
            $('#editname').val(mname);
            $('#editform').val(form_report);
            $('#edittext').val(rmks);
            $('#editmodal').modal('show');
        }

        $(document).ready(function () {
            $('#edit').click(function (event) {
                var id = $('#editid').val();
                var mname = $('#editname').val();
                var formreport = $('#editform').val();
                var textarea = $('#edittext').val();
                $.post('crequest/' + id, {
                        'mname': mname,
                        'formreport': formreport,
                        'textarea': textarea,
                        '_token': $('input[name=_token]').val()
                    }
                    , function (data) {
//                        console.log(data);
                        $('#categories').load(location.href + ' #categories');
                        toastr["success"]('Edit successfully.');
                    });
            })

        });
        //        $('#edit').click(function (event) {
        //            var id = $('#editid').val();
        //            var text = $('#editname').val();
        //            var email = $('#editemail').val();
        //            var password = $('#editpassword').val();
        //            var tel = $('#edittel').val();
        //            var adrs = $('#editadrs').val();
        //            var cperson = $('#editcperson').val();
        //            var url = $('#editurl').val();
        //            var rmks = $('#editrmks').val();
        //            var usid = $('#editusid').val();
        //            var fksts = $('#editsts').val();
        //            var fkcatg = $('#editcat').val();
        //            var fktype = $('#edittype').val();
        //            $.ajax({
        //                type: "GET",
        //                url: "updatecprofile/" + id + "/" + text + "/" + email + "/" + password + "/" + tel + "/" + adrs + "/" + cperson + "/" + url + "/" + rmks + "/" + usid + "/" + fksts + "/" + fkcatg + "/" + fktype,
        //                success: function (data) {
        ////                    console.log(data);
        //                    $('#categories').load(location.href + ' #categories');
        //                    toastr["success"]('edit successfully.');
        //                }
        //            });
        //        });
        $('#id').delay(10).fadeOut('fast');


    </script>
@endsection