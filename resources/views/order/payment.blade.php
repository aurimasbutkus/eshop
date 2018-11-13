@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
@include('partials.header')
<body>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-8 text-left">
            <div class="panel panel-primary">
                <div class="panel-heading">Payment details</div>
                <div class="panel-body">
                    <div class="row">Bank: SEB LT</div>
                    <div class="row">Account: LT97 2345 7764 2343 2310</div>
                    <div class="row">Payment id: 122345</div>
                </div>
            </div>
            <hr>
            <h2>Regarding the payment</h2>
            <h5><span class="glyphicon glyphicon-time"></span> Post by USER, Nov 05, 2018.</h5>
            <h5><span class="label label-success">USER</span></h5><br>
            <p>I have paid the order already, please check, confirm and inform me, thank you.</p>
            <hr>
            <h2>Answer from the admin</h2>
            <h5><span class="glyphicon glyphicon-time"></span> Post by ADMIN, Nov 05, 2018.</h5>
            <h5><span class="label label-danger">ADMIN</span></h5><br>
            <p>The payment can take a couple of days to arrive, will inform once it has.</p>
            <hr>
            <h4>Leave a Comment:</h4>
            <form role="form">
                <div class="form-group">
                    <textarea class="form-control" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p><font size="4">STATUS</font></p>
                <p><font color="red">unpaid</font></p>
            </div>
            <div class="well">
                <p><font size="4">PAYMENT ID</font></p>
                <p><font face="verdana">122345</font></p>
            </div>
        </div>
    </div>
</div>

@yield('content')

@include('partials.footer')

</body>
</html>
@endsection
