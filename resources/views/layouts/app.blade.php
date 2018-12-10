<!DOCTYPE html>
<html lang="en">
@include('partials.header')
<body>

<div class="jumbotron mb-0">
    <div class="container text-center">
        <h1>Pietūs po šaukštų e-parduotuvė</h1>
        <p>Mes labai norim 10</p>
    </div>
</div>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a href="{{ route('main') }}" class="navbar-brand">E-shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            @auth
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('main') ? 'active' : ''  }}" href="{{ route('main') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('') ? 'active' : ''  }}" href="#">Deals</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('') ? 'active' : ''  }}" href="#">Stores</a></li>
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('admin'))
                    <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('allUsers') ? 'active' : ''  }}" href="{{route('allUsers')}}">Display users</a></li>
                    <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('exportbuyerList') ? 'active' : ''  }}" href="{{route('exportbuyerList')}}">Export order list</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('new-product') }}" class="dropdown-item">New Product</a>
                            <a href="{{ route('list-products') }}" class="dropdown-item">List Products</a>
                        </div>
                    </li>
                @endif
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('') ? 'active' : ''  }}" href="#">Contact</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('allReviews') ? 'active' : ''  }}" href="{{route('allReviews')}}">Reviews</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('showStatistics') ? 'active' : ''  }}" href="{{route('showStatistics')}}">Statistics</a></li>
            @endauth
        </ul>
        <ul class="navbar-nav float-right">

        @auth
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('orders') ? 'active' : ''  }}" href="{{ route('orders') }}">Orders</a></li>

                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('editUser') ? 'active' : ''  }}" href="{{route('editUser')}}"><span class="glyphicon glyphicon-user"></span> Edit account</a></li>
                <li class="nav-item"><a class="nav-link" href="/checkout"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li class="nav-item">
                    <a class="nav-link" onclick="$('#logout-form').submit()">Logout</a>
                    <form id="logout-form" method="POST" action="{{ @route('logout') }}">
                        {{ csrf_field() }}
                    </form>
                </li>
            @else
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('login') ? 'active' : ''  }}" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('register') ? 'active' : ''  }}" href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a href="{{ route('main') }}" class="navbar-brand">E-shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            @auth
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('main') ? 'active' : ''  }}" href="{{ route('main') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('') ? 'active' : ''  }}" href="#">Deals</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('') ? 'active' : ''  }}" href="#">Stores</a></li>
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('admin'))
                    <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('allUsers') ? 'active' : ''  }}" href="{{route('allUsers')}}">Display users</a></li>
                    <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('exportbuyerList') ? 'active' : ''  }}" href="{{route('exportbuyerList')}}">Export order list</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('new-product') }}" class="dropdown-item">New Product</a>
                        </div>
                    </li>
                @endif
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('') ? 'active' : ''  }}" href="#">Contact</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('allReviews') ? 'active' : ''  }}" href="{{route('allReviews')}}">Reviews</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('showStatistics') ? 'active' : ''  }}" href="{{route('showStatistics')}}">Statistics</a></li>
            @endauth
        </ul>
        <ul class="navbar-nav float-right">
            @auth
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('editUser') ? 'active' : ''  }}" href="{{route('editUser')}}"><span class="glyphicon glyphicon-user"></span> Edit account</a></li>
                <li class="nav-item"><a class="nav-link" href="/order"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li class="nav-item">
                    <a class="nav-link" onclick="$('#logout-form').submit()">Logout</a>
                    <form id="logout-form" method="POST" action="{{ @route('logout') }}">
                        {{ csrf_field() }}
                    </form>
                </li>
            @else
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('login') ? 'active' : ''  }}" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('register') ? 'active' : ''  }}" href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </div>
</nav>

@yield('content')

@include('partials.footer')

</body>
</html>
