@extends('layouts.customer.master-dashboard')
@section('title')
    <title>Customer Profile | here </title>
@endsection
@section('customStyle')
    <style>
        .card.card-cascade .view.gradient-card-header {
            padding: 1.1rem 1rem;
        }

        .card.card-cascade .view {
            box-shadow: 0 5px 12px 0 rgba(0, 0, 0, 0.2), 0 2px 8px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Section: Edit Account -->
        <section class="section">
            <!-- First row -->
            <div class="row">
                <!-- First column -->
                <div class="col-lg-4 mb-4">

                    <!--Card-->
                    <div class="card card-cascade narrower">

                        <!--Card image-->
                        <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                            <h5 class="mb-0 font-weight-bold">Edit Photo</h5>
                        </div>
                        <!--/Card image-->

                        <!-- Card content -->
                        <form enctype="multipart/form-data" action="{{url('/customer/account/update')}}" method="post">
                            {{csrf_field()}}
                            <div class="card-body card-body-cascade text-center">
                                <img src="{{url($cust->avatar_url)}}" alt="no-img"
                                     class="m-auto z-depth-2 img-responsive"
                                     style="height: 100px !important;"/>

                                <div class="row flex-center">
                                    <div class="file-field">
                                        <div class="btn btn-primary btn-sm float-left">
                                            <span>Choose file</span>
                                            <input type="file" name="avatar_url" onchange="readURL(this);">
                                        </div>
                                    </div>
                                    <button type="submit"
                                            class="btn btn-outline blue-gradient btn-sm btn-rounded waves-effect"><i
                                                class="fa fa-bolt mr-1" aria-hidden="true"></i>Add
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- /.Card content -->
                    </div>
                    <!--/.Card-->
                </div>
                <!-- /.First column -->
                <!-- Second column -->
                <div class="col-lg-8 mb-4">

                    <!--Card-->
                    <div class="card card-cascade narrower">
                        <!--Card image-->
                        <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                            <h5 class="mb-0 font-weight-bold">Edit Account</h5>
                        </div>
                        <!--/Card image-->
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">
                            <!-- Edit Form -->
                            <!--First row-->
                            <div class="row">
                                <!--First column-->
                                <input type="hidden" id="id" class="form-control validate"
                                       value="{{$custprofile->ID}}" disabled>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" class="form-control validate"
                                               value="{{ucfirst($custprofile->CUST_NAME)}}" disabled>
                                        <label for="name" data-error="wrong" data-success="right">Name</label>
                                    </div>
                                </div>
                                <!--Second column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="type" value="{{$custprofile->TYPE_NAME}}"
                                               class="form-control validate" disabled>
                                        <label for="type" data-error="wrong" data-success="right">Type</label>
                                    </div>
                                </div>
                            </div>
                            <!--/.First row-->
                            <!--First row-->
                            <div class="row">
                                <!--First column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="cperson" value="{{ucfirst($custprofile->CPERSON)}}"
                                               class="form-control validate">
                                        <label for="cperson" data-error="wrong" data-success="right">Contact
                                            Person</label>
                                    </div>
                                </div>
                                <!--Second column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="adrs" value="{{$custprofile->ADRS}}"
                                               class="form-control validate">
                                        <label for="adrs" data-error="wrong" data-success="right">Address</label>
                                    </div>
                                </div>
                            </div>
                            <!--/.First row-->
                            <div class="row">
                                <!--First column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="fone" value="{{ucfirst($custprofile->TEL)}}"
                                               class="form-control validate">
                                        <label for="fone" data-error="wrong" data-success="right">Contact
                                            Number</label>
                                    </div>
                                </div>
                                <!--Second column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="url" value="{{$custprofile->URL}}"
                                               class="form-control validate">
                                        <label for="url" data-error="wrong" data-success="right">URL</label>
                                    </div>
                                </div>
                            </div>
                            <!--Second row-->
                            <div class="row">
                                <!--First column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="email" id="email" value="{{$custprofile->EMAIL}}"
                                               class="form-control validate">
                                        <label for="email">Email address</label>
                                    </div>
                                </div>
                                <!--Second column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="password" class="form-control validate">
                                        <label for="password" data-error="wrong" data-success="right">Change
                                            Password</label>
                                    </div>
                                </div>
                            </div>
                            <!--/.Second row-->
                            <div class="row">
                                <div class="col-md-12 text-center my-4">
                                    <input type="submit" id="edit" value="Update Account"
                                           class="btn btn-info btn-rounded">
                                </div>
                            </div>

                            <!-- /.Fourth row -->
                            <!-- Edit Form -->
                        </div>
                        <!-- /.Card content -->

                    </div>
                    <!--/.Card-->
                </div>
                <!-- /.Second column -->
            </div>
            <!-- /.First row -->
        </section>
        <!-- /.Section: Edit Account -->

    </div>






@endsection
@section('javaScript')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).ready(function () {
            $('#edit').click(function (event) {
                var id = $('#id').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var cperson = $('#cperson').val();
                var fone = $('#fone').val();
                var adrs = $('#adrs').val();
                var url = $('#url').val();

                $.post('customerprofileupdate/' + id, {
                        'email': email,
                        'password': password,
                        'cperson': cperson,
                        'fone': fone,
                        'adrs': adrs,
                        'url': url,
                        '_token': $('input[name=_token]').val()
                    }
                    , function (data) {
//                        console.log(data);
                        toastr["success"]('Update successfully.');
                    });
            })

        });

    </script>
@endsection