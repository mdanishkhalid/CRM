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
                    <a href="#" class="white-text mx-3">Customer Profile</a>
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
                                <th class="th-lg"><a href="#">Email</a></th>
                                <th class="th-lg"><a href="#">Category</a></th>
                                <th class="th-lg"><a href="#">Status</a></th>
                                <th class="th-lg"><a href="#">Type</a></th>
                                <th class="th-lg"><a href="#">Address</a></th>
                                <th class="th-lg"><a href="#">Phone</a></th>
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
                                    <td>{{$cat->CUST_NAME}}</td>
                                    <td>{{$cat->EMAIL}}</td>
                                    <td>{{$cat->CATG_NAME}}</td>
                                    <td>{{$cat->STATUS_NAME}}</td>
                                    <td>{{$cat->TYPE_NAME}}</td>
                                    <td>{{$cat->ADRS}}</td>
                                    <td>{{$cat->TEL}}</td>
                                    <td>{{$cat->USID}}</td>
                                    <td>
                                        <a href="/custprofile/delete/{{$cat->ID}}"><i
                                                    class="fa fa-close mr-1 blue-text"></i></a>
                                        <a href="#" onclick="edit('{{$cat->ID}}','{{$cat->CUST_NAME}}'
                                                ,'{{$cat->EMAIL}}','{{$cat->PASSWORD}}','{{$cat->TEL}}','{{$cat->ADRS}}','{{$cat->CPERSON}}','{{$cat->URL}}','{{$cat->RMKS}}','{{$cat->USID}}','{{$cat->FKSTATUS}}','{{$cat->FKCATG}}','{{$cat->FKTYPE}}')"><i
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
                    <h4 class=""><i class="fa fa-newspaper-o"></i> Add New Customer</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    <h5>Customer Information</h5>
                    <div class="row">
                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newid" value="" class="form-control form-control-sm" required>
                            <label for="newid">Customer ID</label>
                        </div>

                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newname" value="" class="form-control form-control-sm" required>
                            <label for="newname">Customer name</label>
                        </div>
                        <div class="md-form form-sm">
                            <i class="fa fa-edit prefix"></i>
                            <input type="email" id="newemail" value="" class="form-control form-control-sm" required>
                            <label for="newemail">Customer Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="md-form form-sm  mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="password" id="newpassword" value="" class="form-control form-control-sm"
                                   required>
                            <label for="newpassword">Customer Password</label>
                        </div>

                        <div class="md-form form-sm  mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newcperson" value="" class="form-control form-control-sm">
                            <label for="newcperson">Customer Person</label>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newadrs" value="" class="form-control form-control-sm">
                            <label for="newadrs">Address</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="md-form form-sm  mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="number" id="newfone" value="" class="form-control form-control-sm">
                            <label for="newfone">Phone</label>
                        </div>

                        <div class="md-form form-sm  mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="url" id="newurl" value="" class="form-control form-control-sm">
                            <label for="newurl">Customer URL</label>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newusid" value="" class="form-control form-control-sm">
                            <label for="newusid">USID</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="md-form form-sm">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="newrmks" value="" class="form-control form-control-sm">
                            <label for="newrmks">Remarks</label>
                        </div>
                    </div>
                    <hr>
                    <h5>Select area</h5>
                    <div class="row">
                        <div class="md-form form-sm mr-5">
                            <!-- Small split button group -->
                            <select class="browser-default custom-select mb-3" id="newsts" required>
                                <option selected>Select Status</option>
                                @foreach($status as $sts)
                                    <option value="{{$sts->id}}">{{$sts->STATUS_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form form-sm mr-5">
                            <select class="browser-default custom-select mb-3 " id="newcat" required>
                                <option selected>Select Category</option>
                                @foreach($category as $categor)
                                    <option value="{{$categor->id}}">{{$categor->CATG_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form form-sm">
                            <select class="browser-default custom-select mb-3" id="newtype" required>
                                <option selected>Select Type</option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->TYPE_NAME}}</option>
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
                    <h4 class=""><i class="fa fa-newspaper-o"></i> Edit Customer</h4>
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
                            <label for="editname">Customer Name</label>
                        </div>
                        <div class="md-form form-sm mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="email" id="editemail" value="" class="form-control form-control-sm"
                                   placeholder="Customer email">
                            <label for="editemail">Email</label>
                        </div>
                    </div>
                    <div class="row">
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
                        <div class="md-form form-sm  mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="editcperson" value="" class="form-control form-control-sm"
                                   placeholder="CPERSON">
                            <label for="editcperson">CPerson</label>
                        </div>
                        <div class="md-form form-sm  mr-5">
                            <i class="fa fa-edit prefix"></i>
                            <input type="url" id="editurl" value="" class="form-control form-control-sm"
                                   placeholder="URL">
                            <label for="editurl">URL</label>
                        </div>
                        <div class="md-form form-sm">
                            <i class="fa fa-edit prefix"></i>
                            <input type="text" id="editrmks" value="" class="form-control form-control-sm"
                                   placeholder="Remarks">
                            <label for="editrmks">Remarks</label>
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
                                <option selected>Select Status</option>
                                @foreach($status as $sts)
                                    <option value="{{$sts->id}}">{{$sts->STATUS_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form form-sm mr-5">
                            <select class="browser-default custom-select mb-3 " id="editcat" required>
                                <option selected>Select Category</option>
                                @foreach($category as $categor)
                                    <option value="{{$categor->id}}">{{$categor->CATG_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form form-sm">
                            <select class="browser-default custom-select mb-3" id="edittype" required>
                                <option selected>Select Type</option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->TYPE_NAME}}</option>
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
                var email = $('#newemail').val();
                var password = $('#newpassword').val();
                var cperson = $('#newcperson').val();
                var adrs = $('#newadrs').val();
                var fone = $('#newfone').val();
                var url = $('#newurl').val();
                var usid = $('#newusid').val();
                var rmks = $('#newrmks').val();
                var sts = $('#newsts').val();
                var cat = $('#newcat').val();
                var type = $('#newtype').val();
                $.post('custprofile', {
                        'id': id,
                        'name': name,
                        'email': email,
                        'password': password,
                        'cperson': cperson,
                        'adrs': adrs,
                        'fone': fone,
                        'url': url,
                        'usid': usid,
                        'rmks': rmks,
                        'sts': sts,
                        'cat': cat,
                        'type': type,
                        '_token': $('input[name=_token]').val()
                    }
                    , function (data) {
//                        console.log(data);
                        $('#categories').load(location.href + ' #categories');
                        $('#newid').val(null);
                        $('#newname').val(null);
                        $('#newemail').val(null);
                        $('#newpassword').val(null);
                        $('#newcperson').val(null);
                        $('#newadrs').val(null);
                        $('#newfone').val(null);
                        $('#newurl').val(null);
                        $('#newusid').val(null);
                        $('#newrmks').val(null);
                        $('#newsts').val(null);
                        $('#newcat').val(null);
                        $('#newtype').val(null);
                        toastr["success"]('Add successfully.');
                    });
            })

        });

        function edit(id, name, email, password, tel, adrs, cperson, url, rmks, usid, fksts, fkcatg, fktype) {

            $('#editid').val(id);
            $('#editname').val(name);
            $('#editemail').val(email);
            $('#editpassword').val(password);
            $('#edittel').val(tel);
            $('#editadrs').val(adrs);
            $('#editcperson').val(cperson);
            $('#editurl').val(url);
            $('#editrmks').val(rmks);
            $('#editusid').val(usid);
            $('#editsts').val(fksts);
            $('#editcat').val(fkcatg);
            $('#edittype').val(fktype);
            $('#editmodal').modal('show');
        }

        $('#edit').click(function (event) {
            var id = $('#editid').val();
            var text = $('#editname').val();
            var email = $('#editemail').val();
            var password = $('#editpassword').val();
            var tel = $('#edittel').val();
            var adrs = $('#editadrs').val();
            var cperson = $('#editcperson').val();
            var url = $('#editurl').val();
            var rmks = $('#editrmks').val();
            var usid = $('#editusid').val();
            var fksts = $('#editsts').val();
            var fkcatg = $('#editcat').val();
            var fktype = $('#edittype').val();
            $.ajax({
                type: "GET",
                url: "updatecprofile/" + id + "/" + text + "/" + email + "/" + password + "/" + tel + "/" + adrs + "/" + cperson + "/" + url + "/" + rmks + "/" + usid + "/" + fksts + "/" + fkcatg + "/" + fktype,
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