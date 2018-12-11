@extends('layouts.app')
@inject('storage', \Illuminate\Support\Facades\Storage)
@inject('auth', \Illuminate\Support\Facades\Auth)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($pictures as $key => $picture)
                            <li data-target="#carousel"
                                data-slide-to="{{ $key }}"{{ $key == 0 ? ' class="active"' : '' }}></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($pictures as $key => $picture)
                            <div class="carousel-item{{ $key == 0 ? ' active' : '' }}">
                                <img class="d-block img-fluid w-100" src="{{ asset($storage::url($picture)) }}"
                                     alt="product photo">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm">
                <div class="card mt-3">
                    <div class="card-header font-weight-bold">
                        <h4 class="mt-auto mb-auto">
                            {{ $product->title }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h6 class="font-weight-bold">Description</h6>
                                {{ $product->description }}
                            </li>
                            <li class="list-group-item">
                                <h6 class="font-weight-bold">Price</h6>
                                ${{ $product->price }}
                            </li>
                            <li class="list-group-item">
                                <form method="post" action="{{route('addToCart')}}">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$auth::user()->id}}">
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <button type="submit" class="btn btn-primary">Add to cart</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                   aria-controls="v-pills-specification" aria-selected="true">Specification</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                   aria-controls="v-pills-reviews" aria-selected="false">Reviews</a>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-specification" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    <div class="container">
                        {{ $product->specification }}
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-reviews" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="container">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.carousel').carousel({
                interval: false
            });
        })
    </script>
@endsection