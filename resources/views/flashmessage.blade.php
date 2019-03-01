@if ($message = Session::get('success'))
    <div class="alert  center m-auto col-sm-4 text-center alert-block" role="alert" id="id">
        <a class="btn btn-success"><strong>{{ $message }}</strong> </a>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert  center m-auto col-sm-4 text-center alert-block" role="alert" id="id">
        <a class="btn btn-danger"><strong>{{ ucfirst($message) }}</strong> </a>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert  center m-auto col-sm-4 text-center alert-block" role="alert" id="id">
        <a class="btn btn-warning"><strong>{{ $message }}</strong> </a>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert  center m-auto col-sm-4 text-center alert-block" role="alert" id="id">
        <a class="btn btn-info"><strong>{{ $message }}</strong> </a>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" id="id" data-dismiss="alert">×</button>
        Please check the form below for errors
    </div>
@endif