@extends('layouts.app')

@section('content')<!DOCTYPE html>
<html lang="en">
<head>
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
        <div class="col-sm-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Products in your cart:</div>
                <div class="panel-body d-flex flex-column flex-wrap">
                    @if (isset($items))
                        @foreach($items as $item)
                            <div class="row border p-4 my-auto">
                                <strong class="col-6">{{$item['name']}}</strong>
                                <lead class="col-4"> {{$item['cost']}} $</lead>
                                <a href="{{route('removeFromCart', ['id' => $item['id']])}}"
                                   class="btn btn-danger col-2">Remove</a>
                            </div>
                        @endforeach
                    @else
                        Nothing in the cart
                    @endif
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div align="center" class="panel-heading">CHECKOUT</div>
                <div class="panel-body">
                    <div align="center" class="row">
                        <p><font size="5" face="verdana">Total price:</font></p>
                        <p><font size="5" color="blue">{{$total}} $
                            </font></p>
                    </div>
                </div>
                <div class="panel-footer">
                    <ul class="pager">
                        <li class="previous">
                            <form method="post" action="{{route('payment')}}">
                                @csrf
                                @php

                                    $text = '';
                                    foreach($items as $item) {
                                        $text .= "<strong>" . $item['name'] . "</strong>  " . $item['cost'] . "<br>";
                                }
                                @endphp
                                <input type="hidden" name="text" value="{{$text}}">
                                <input type="hidden" name="total" value="{{$total}}">
                                <input class="btn btn-primary" type="submit" value="Proceed to payment"></input>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
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