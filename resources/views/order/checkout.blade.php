@extends('layouts.app')

@section('content')
<!DOCTYPE html>
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
                <div class="panel-body">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">Logitech Mouse</div>
                            <div class="panel-body">
                                <img src="https://assets.logitech.com/assets/65019/3/mouton-boat-m90-refresh-gallery-image.png" alt="mouse" width="200">
                                1 x $19.00
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">RGB Keyboard</div>
                            <div class="panel-body">
                                <img src="https://media.wired.com/photos/5b21913a985bbd041c32d13d/master/pass/keyboard-TA.jpg" alt="keyboard" width="200">
                                1 x $40.00
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">Headset</div>
                            <div class="panel-body">
                                <img src="https://www.astrogaming.com/on/demandware.static/-/Sites-masterCatalog_AstroGaming_RP/default/dw8f1c3979/product-images/3AS20-XOW9Y-612_primary_2.jpg" alt="headset" width="200">
                                1 x $32.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">CHECKOUT</div>
                <div class="panel-body">
                    <div class="row">
                    <p><font size="5" face="verdana">Total price:</font></p>
                        <p><font size="5" color="blue">$91.00</font></p>
                    </div>
                </div>
                <div class="panel-footer">
                    <ul class="pager">
                    <li class="previous"><a href="/payment">Proceed to payment</a></li>
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