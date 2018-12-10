@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-5 ml-auto mr-auto">
            <div class="card-header"><h3>Create new product</h3></div>

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('create-product') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{--<input type="hidden" name="MAX_FILE_SIZE" value="30000"/>--}}

                    <div class="form-group">
                        <label for="title">Name</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                        @if($errors->has('title'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input class="form-control" type="text" name="price" id="price" value="{{ old('price') }}">
                        @if($errors->has('price'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('price') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description"
                                  id="description">{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="specification">Specification</label>
                        <textarea class="form-control" type="text" name="specification"
                                  id="specification">{{ old('specification') }}</textarea>
                        @if($errors->has('specification'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('specification') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" name="category" id="category"
                               value="{{ old('category') }}">
                        @if($errors->has('category'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('category') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="pictures">Photos</label>
                        <input type="file" class="form-control-file" id="pictures" name="pictures[]" multiple>
                        @if($errors->has('pictures'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('pictures') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="quantity"
                               value="{{ old('quantity') }}">
                        @if($errors->has('quantity'))
                            <div class="alert alert-danger mt-1">
                                {{ $errors->first('quantity') }}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection