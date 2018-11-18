@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-2 mt-3 ml-3">
            <div class="card">
                <div class="card-header">
                    Categories
                    <div class="float-right" data-toggle="tooltip" title="You can filter products by selecting specific categories">
                        <i class="material-icons">help</i>
                    </div>
                </div>
                <div class="d-flex flex-column pt-3 pb-3" id="categoryList">
                    @foreach($categories as $category)
                        <div class="m-auto w-50">
                            <div>
                                <input type="checkbox" class="category" id="{{ $category }}">
                                {{ $category }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="container d-flex flex-wrap justify-content-around" id="productList">
                @foreach($products as $product)
                    <div class="card w-30 mt-5" id="{{ $product->category }}">
                        <img src="http://placehold.it/400x250/000/fff" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">
                                {{ $product->description }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="container d-inline-flex justify-content-between">
                                <p class="card-tex mt-auto mb-auto">
                                    ${{ $product->price }}
                                </p>
                                <div class="mt-auto mb-auto">
                                    <a href="{{ route('product', ['id' => $product->id]) }}" class="card-link" data-toggle="tooltip" title="View details">
                                        <i class="material-icons">visibility</i>
                                    </a>
                                    <a href="#" class="card-link" data-toggle="tooltip" title="Add to cart">
                                        <i class="material-icons">add_shopping_cart</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function () {
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });

            $('.category').on('change', function() {
                let productList = $('#productList').children();
                let categories = [];
                $('#categoryList').find(':checked').each(function() { categories.push(this.id) });

                if(categories.length === 0) {
                    productList.show();
                    return;
                }

                productList.each(function() {
                    if(categories.indexOf(this.id) !== -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
@endsection