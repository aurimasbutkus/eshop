@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-5 ml-auto mr-auto">
            <div class="card-header"><h3>Editting product #{{ $product->id }}</h3></div>

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('update-product', ['id' => $product->id]) }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="title">Name</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ $product->title }}">
                        @if($errors->has('title'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input class="form-control" type="text" name="price" id="price" value="{{ $product->price }}">
                        @if($errors->has('price'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('price') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description"
                                  id="description">{{ $product->description }}</textarea>
                        @if($errors->has('description'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="specification">Specification</label>
                        <textarea class="form-control" type="text" name="specification"
                                  id="specification">{{ $product->specification }}</textarea>
                        @if($errors->has('specification'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('specification') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" name="category" id="category"
                               value="{{ $product->category }}">
                        @if($errors->has('category'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('category') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="quantity"
                               value="{{ $product->quantity }}">
                        @if($errors->has('quantity'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('quantity') }}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection