@extends('layouts.app')
@inject('session', \Illuminate\Support\Facades\Session)

@section('content')
    <div class="container">
        @if($session::has('message'))
            <div class="alert alert-success alert-dismissable fade show mt-3" role="alert">
                {{ $session::get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Author</th>
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
                <th>Specification</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ isset($product->user) ? ucfirst($product->user->name) : 'None' }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->specification }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Product controls">
                            <a class="btn btn-primary"
                               href="{{ route('edit-product', ['id' => $product->id]) }}">Edit</a>
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                    data-target="#modal{{ $product->id }}">Delete
                            </button>
                            <a class="btn btn-primary" href="{{ route('product', ['id' => $product->id]) }}">View</a>
                        </div>
                    </td>
                </tr>

                <div class="modal fade" role="dialog" id="modal{{ $product->id }}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirmation dialog</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this product?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form action="{{ route('delete-product', ['id' => $product->id]) }}" method="post">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection