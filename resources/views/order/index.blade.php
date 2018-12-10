@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */
        .navbar {
            margin-bottom: 50px;
            border-radius: 0;
        }

        /* Remove the jumbotron's default bottom margin */
        .jumbotron {
            margin-bottom: 0;
        }
        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 1em 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-20">
            <div class="panel panel-primary">
                <div class="panel-heading">Products in your order:</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="panel panel-default">
                                {!! $order -> text !!}
                        </div>
                    </div>
                </div>
                </div>
            </div>

        <div class="col-sm-20">
                <div class="panel panel-primary">
                    <div class="panel-heading">Order Price</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel panel-default">
                                {{$order -> amount_paid}} $
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="col-sm-20">
            <div class="panel panel-primary">
                <div class="panel-heading">Order Status</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="panel panel-default">
                            {{$order -> status}}

                            @if(Auth::user()->role == "admin")
                            <form method="post" action="{{ route('changeOrderStatus') }}">
                                @csrf
                                <div class="control-group">
                                    <label for="status">Status</label>
                                    <input class="form-control" type="text" name="status" id="status"/>
                                    @if($errors->has('status'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('status') }}
                                        </div>
                                    @endif
                                </div>
                                <input type="hidden" value="{{$order->id}}" name="id"/>
                                <button class="btn btn-primary" type="submit">Change</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

<hr>

<hr>

<form method="post" action="">
    @csrf
    <input type="hidden" name="order_id" value={{$order -> id}}>
    <input type="hidden" name="username" value="{{\Illuminate\Support\Facades\Auth::id()}}"
    <input type="hidden" name="total" value="">
    <textarea style="resize:none" class="form-control" id="message" rows="3" value="message"></textarea>
    <input class="btn btn-primary" type="submit" value="Submit message"></input>
</form>



</div><br><br>

<footer class="container-fluid text-center">
    <p>Online Store Copyright</p>
    <form class="form-inline">Get deals:
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-danger">Sign Up</button>
    </form>
</footer>

</body>
</html>
@endsection
