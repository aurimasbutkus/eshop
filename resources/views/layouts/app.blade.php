<!DOCTYPE html>
<html lang="en">
@include('partials.header')
<body>

<div class="jumbotron">
    <div class="container text-center">
        <h1>Pietūs po šaukštų e-parduotuvė</h1>
        <p>Mes labai norim 10</p>
    </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('main') }}">E-shop</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                @auth
                    <li class="active"><a href="{{ route('main') }}">Home</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Contact</a></li>
                @endauth
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @auth
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li>
                        <a onclick="$('#logout-form').submit()">Logout</a>
                        <form id="logout-form" method="POST" action="{{ @route('logout') }}">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

@yield('content')

@include('partials.footer')

</body>
</html>
