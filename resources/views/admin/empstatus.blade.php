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
                    <a href="#" class="white-text mx-3">Employee Status</a>
                    <div>
                        <a href="#" type="button" id="addNew" data-toggle="modal" data-target="#addnewsts"
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
                                <th class="th-lg"><a>Status ID</a></th>
                                <th class="th-lg"><a href="#">Employee Status</a></th>
                                <th class="th-lg"><a href="#">Action</a></th>
                            </tr>
                            </thead>
                            <!--Table head-->
                            <!--Table body-->
                            <tbody>
                            @foreach($cats as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->ESTATUS_NAME}}</td>
                                    <td>
                                        <a href="/empsts/delete/{{$cat->id}}"><i
                                                    class="fa fa-close mr-1 blue-text"></i></a>
                                        <a href="#" onclick="edit('{{$cat->id}}','{{$cat->ESTATUS_NAME}}')"><i
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
    <div class="modal fade" id="addnewsts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class=""><i class="fa fa-newspaper-o"></i> Add New Employee Status</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    <div class="md-form form-sm">
                        <i class="fa fa-edit prefix"></i>
                        <input type="text" id="newname" value="" class="form-control form-control-sm">
                        <label for="newname">Designation name</label>
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
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class=""><i class="fa fa-newspaper-o"></i> Edit Employee Status</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">

                    <div class="md-form form-sm">
                        <i class="fa fa-lock prefix"></i>
                        <input type="text" id="editid" class="form-control " disabled>
                        <label for="editid" class="disabled"></label>
                    </div>
                    <div class="md-form form-sm">
                        <i class="fa fa-edit prefix"></i>
                        <input type="text" id="editname" class="form-control active" placeholder="Employee Status">
                        {{--<label for="editname" class="active">Designation name</label>--}}
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
                var text = $('#newname').val();
                $.post('empsts', {'text': text, '_token': $('input[name=_token]').val()}, function (data) {
                    console.log(data);
                    $('#categories').load(location.href + ' #categories');
                    $('#newname').val(null);
                    toastr["success"]('Add Status successfully.');
                });
            })

        });

        function edit(id, name) {

            $('#editid').val(id);
            $('#editname').val(name);
            $('#editmodal').modal('show');
        }

        $('#edit').click(function (event) {
            var id = $('#editid').val();
            var text = $('#editname').val();
//            $.post('updatecatg/' + id, {'text': text, '_token': $('input[name=_token]').val()}, function (data) {
//                console.log(data);
//                $('#categories').load(location.href + ' #categories');
//            });

            $.ajax({
                type: "GET",
                url: "updateempsts/" + id + "/" + text,
                success: function (data) {
                    console.log(data);
                    $('#categories').load(location.href + ' #categories');
                    toastr["success"]('edit successfully.');
                }
            });
        });

        $('#id').delay(10).fadeOut('fast');
    </script>
@endsection