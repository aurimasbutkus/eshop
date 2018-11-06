@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="products" class="row list-group">
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt=""/>
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="row" style="margin-top:20px;">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.00
                                </p>
                            </div>
                            <div class="col-xs-12 col-md-4 pull-right">
                                <a class="btn btn-primary" data-toggle="tooltip" title="View product" href="{{ route('product') }}"><span
                                            class="glyphicon glyphicon-eye-open"></span></a>
                                <a class="btn btn-success" data-toggle="tooltip" title="Add to cart" href="#"><span
                                            class="glyphicon glyphicon-shopping-cart"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt=""/>
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="row" style="margin-top:20px;">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.00
                                </p>
                            </div>
                            <div class="col-xs-12 col-md-4 pull-right">
                                <a class="btn btn-primary" data-toggle="tooltip" title="View product" href="#"><span
                                            class="glyphicon glyphicon-eye-open"></span></a>
                                <a class="btn btn-success" data-toggle="tooltip" title="Add to cart" href="#"><span
                                            class="glyphicon glyphicon-shopping-cart"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt=""/>
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="row" style="margin-top:20px;">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.00
                                </p>
                            </div>
                            <div class="col-xs-12 col-md-4 pull-right">
                                <a class="btn btn-primary" data-toggle="tooltip" title="View product" href="#"><span
                                            class="glyphicon glyphicon-eye-open"></span></a>
                                <a class="btn btn-success" data-toggle="tooltip" title="Add to cart" href="#"><span
                                            class="glyphicon glyphicon-shopping-cart"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt=""/>
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="row" style="margin-top:20px;">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.00
                                </p>
                            </div>
                            <div class="col-xs-12 col-md-4 pull-right">
                                <a class="btn btn-primary" data-toggle="tooltip" title="View product" href="#"><span
                                            class="glyphicon glyphicon-eye-open"></span></a>
                                <a class="btn btn-success" data-toggle="tooltip" title="Add to cart" href="#"><span
                                            class="glyphicon glyphicon-shopping-cart"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt=""/>
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="row" style="margin-top:20px;">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.00
                                </p>
                            </div>
                            <div class="col-xs-12 col-md-4 pull-right">
                                <a class="btn btn-primary" data-toggle="tooltip" title="View product" href="#"><span
                                            class="glyphicon glyphicon-eye-open"></span></a>
                                <a class="btn btn-success" data-toggle="tooltip" title="Add to cart" href="#"><span
                                            class="glyphicon glyphicon-shopping-cart"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        });
    </script>
@endsection