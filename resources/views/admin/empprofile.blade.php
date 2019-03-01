@extends('layouts.admin.master-dashboard')
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

                    </div>
                    <a href="#" class="white-text mx-3">Employee Profile</a>
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
                                <th class="th-lg"><a>ID</a></th>
                                <th class="th-lg"><a href="#">Name</a></th>
                                <th class="th-lg"><a href="#">Designation</a></th>
                                <th class="th-lg"><a href="#">Department</a></th>
                                <th class="th-lg"><a href="#">Status</a></th>
                                <th class="th-lg"><a href="#">User ID</a></th>
                                <th class="th-lg"><a href="#">Action</a></th>
                            </tr>
                            </thead>
                            <!--Table head-->
                            <!--Table body-->
                            <tbody>
                            @foreach($cats as $cat)
                                <tr>
                                    <td>{{$cat->ID}}</td>
                                    <td>{{$cat->EMP_NAME}}</td>
                                    <td>{{$cat->DESG_NAME}}</td>
                                    <td>{{$cat->DEPT_NAME}}</td>
                                    <td>{{$cat->ESTATUS_NAME}}</td>
                                    <td>{{$cat->USID}}</td>
                                    <td>
                                        <a href="/empprofile/delete/{{$cat->ID}}"><i
                                                    class="fa fa-close mr-1 blue-text"></i></a>
                                        <a href="#"
                                           onclick="edit('{{$cat->ID}}','{{$cat->EMP_NAME}}','{{$cat->EMP_FNAME}}'
                                                   ,'{{$cat->EMAIL}}','{{$cat->PASSWORD}}','{{$cat->MOB}}','{{$cat->ADRS}}','{{$cat->USID}}','{{$cat->FKEMPSTATUS}}',
                                                   '{{$cat->FKDEPT}}','{{$cat->FKDSG}}')"><i
                                                    class="fa fa-edit blue-text"
                                                    aria-label="Basic example"> </i></a>
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
                    <h4 class=""><i class="fa fa-newspaper-o"></i> Add New Employee</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    <h5>Employee Information</h5>
                    <div class="row">
                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newid" value="" class="form-control form-control-sm" required>
                            <label for="newid">Employee ID</label>
                        </div>

                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newname" value="" class="form-control form-control-sm" required>
                            <label for="newname">Employee name</label>
                        </div>
                        <div class="md-form form-sm">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newfname" value="" class="form-control form-control-sm" required>
                            <label for="newfname">Father Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="md-form form-sm  mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="email" id="newemail" value="" class="form-control form-control-sm"
                                   required>
                            <label for="newemail">Employee Email</label>
                        </div>
                        <div class="md-form form-sm  mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="number" id="newfone" value="" class="form-control form-control-sm">
                            <label for="newfone">Phone</label>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newadrs" value="" class="form-control form-control-sm">
                            <label for="newadrs">Address</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="md-form form-sm">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newusid" value="" class="form-control form-control-sm">
                            <label for="newusid">USID</label>
                        </div>
                        <div class="md-form form-sm  mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="password" id="newpassword" value="" class="form-control form-control-sm"
                                   required>
                            <label for="newpassword">Employee Password</label>
                        </div>
                    </div>
                    <hr>
                    <h5>Select area</h5>
                    <div class="row">

                        <div class="md-form form-sm mr-5">
                            <!-- Small split button group -->
                            <select class="browser-default custom-select mb-3" id="newsts" required>
                                <option selected>Select Employee Status</option>
                                @foreach($status as $sts)
                                    <option value="{{$sts->id}}">{{$sts->ESTATUS_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form form-sm mr-5">
                            <select class="browser-default custom-select mb-3 " id="newdep" required>
                                <option selected>Select Department</option>
                                @foreach($department as $dep)
                                    <option value="{{$dep->id}}">{{$dep->DEPT_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form form-sm">
                            <select class="browser-default custom-select mb-3" id="newdes" required>
                                <option selected>Select Designation</option>
                                @foreach($designation as $des)
                                    <option value="{{$des->id}}">{{$des->DESG_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
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

    <!--Section: Edit Category modal-->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class=""><i class="fa fa-newspaper-o"></i> Edit Employee</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    <div class="row">
                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="editid" class="form-control " disabled>
                        </div>
                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="editname" class="form-control active" placeholder="Customer name">
                            <label for="editname">Employee Name</label>
                        </div>
                        <div class="md-form form-sm">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="editfname" class="form-control active" placeholder="Customer name">
                            <label for="editfname">Employee Father Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="email" id="editemail" value="" class="form-control form-control-sm"
                                   placeholder="Customer email">
                            <label for="editemail">Email</label>
                        </div>
                        <div class="md-form form-sm mr-5 pull-left">
                            <i class="fa fa-edit prefix"></i>
                            <input type="number" id="edittel" value="" class="form-control w-100 form-control-md"
                                   placeholder="Change Phone">
                            <label for="edittel">Phone</label>
                        </div>
                        <div class="md-form form-sm pull-right">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="editadrs" value="" class="form-control w-100 form-control-md"
                                   placeholder="Address">
                            <label for="editadrs">Address</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="editusid" value="" class="form-control form-control-sm"
                                   placeholder="USID">
                            <label for="editusid">User ID</label>
                        </div>
                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="password" id="editpassword" value="" class="form-control form-control-sm"
                                   placeholder="Change Password">
                            <label for="editpassword">Password</label>
                        </div>
                    </div>
                    <h5>Select area</h5>
                    <div class="row">
                        <div class="md-form form-sm mr-5">
                            <!-- Small split button group -->
                            <select class="browser-default custom-select mb-3" id="editsts" required>
                                <option selected>Select Employee Status</option>
                                @foreach($status as $sts)
                                    <option value="{{$sts->id}}">{{$sts->ESTATUS_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form form-sm mr-5">
                            <select class="browser-default custom-select mb-3 " id="editdep" required>
                                <option selected>Select Department</option>
                                @foreach($department as $dep)
                                    <option value="{{$dep->id}}">{{$dep->DEPT_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form form-sm">
                            <select class="browser-default custom-select mb-3" id="editdes" required>
                                <option selected>Select Designation</option>
                                @foreach($designation as $des)
                                    <option value="{{$des->id}}">{{$des->DESG_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
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
        $(document).ready(function () {
            $('#save').click(function (event) {
                var id = $('#newid').val();
                var name = $('#newname').val();
                var fname = $('#newfname').val();
                var email = $('#newemail').val();
                var password = $('#newpassword').val();
                var adrs = $('#newadrs').val();
                var mob = $('#newfone').val();
                var usid = $('#newusid').val();
                var sts = $('#newsts').val();
                var dep = $('#newdep').val();
                var des = $('#newdes').val();
                $.post('empprofile', {
                        'id': id,
                        'name': name,
                        'fname': fname,
                        'email': email,
                        'password': password,
                        'adrs': adrs,
                        'mob': mob,
                        'usid': usid,
                        'sts': sts,
                        'dep': dep,
                        'des': des,
                        '_token': $('input[name=_token]').val()
                    }
                    , function (data) {
//                        console.log(data);
                        $('#categories').load(location.href + ' #categories');
                        $('#newid').val(null);
                        $('#newname').val(null);
                        $('#newfname').val(null);
                        $('#newemail').val(null);
                        $('#newpassword').val(null);
                        $('#newadrs').val(null);
                        $('#newfone').val(null);
                        $('#newusid').val(null);
                        $('#newsts').val(null);
                        $('#newdep').val(null);
                        $('#newdes').val(null);
                        toastr["success"]('Add successfully.');
                    });
            })

        });

        function edit(id, name, fname, email, password, tel, adrs, usid, fksts, fkdep, fkdes) {

            $('#editid').val(id);
            $('#editname').val(name);
            $('#editfname').val(fname);
            $('#editemail').val(email);
            $('#editpassword').val(password);
            $('#edittel').val(tel);
            $('#editadrs').val(adrs);
            $('#editusid').val(usid);
            $('#editsts').val(fksts);
            $('#editdep').val(fkdep);
            $('#editdes').val(fkdes);
            $('#editmodal').modal('show');
        }

        $('#edit').click(function (event) {
            var id = $('#editid').val();
            var name = $('#editname').val();
            var fname = $('#editfname').val();
            var email = $('#editemail').val();
            var password = $('#editpassword').val();
            var tel = $('#edittel').val();
            var adrs = $('#editadrs').val();
            var usid = $('#editusid').val();
            var fksts = $('#editsts').val();
            var fkdep = $('#editdep').val();
            var fkdes = $('#editdes').val();
            $.ajax({
                type: "GET",
                url: "updateempprofile/" + id + "/" + name + "/" + fname + "/" + email + "/" + password + "/" + tel + "/" + adrs + "/" + usid + "/" + fksts + "/" + fkdep + "/" + fkdes,
                success: function (data) {
//                    console.log(data);
                    $('#categories').load(location.href + ' #categories');
                    toastr["success"]('edit successfully.');
                }
            });
        });
        $('#id').delay(10).fadeOut('fast');
    </script>
@endsection