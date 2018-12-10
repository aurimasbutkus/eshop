@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($orders as $order)
            <div class="row p-4 border">
                <div class="col-1 border">{{$order->id}}</div>
                <div class="col-6 border">{!!  $order->text !!}</div>
                <div class="col-2 border">{{$order->amount_paid}}</div>
                <div class="col-2 border">{{$order->status}}</div>
                <a href="{{ route('order', ['id' => $order->id]) }}" class="card-link"
                   data-toggle="tooltip" title="View Order" value="View Order">
                    <i class="material-icons">visibility</i>
                </a>


            </div>

            @endforeach
    </div>
</div>
@endsection
