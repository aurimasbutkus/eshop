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
<hr>
                    <div>
                        Products:
                        <br>
                        {!! $text  !!}
                    </div>
                    <hr>

                    <div>
                        FULL PRICE {{$total}} $
                    </div>

                    <form method="post" action="{{route('addOrder')}}" role="form">
                        @csrf
                        <input type="hidden" name="text" value="{{$text}}">
                        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                        <input type="hidden" name="cost" value="{{$total}}">
                        <button type="submit" class="btn btn-success">Confirm Order</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@yield('content')


</body>
</html>
@endsection
