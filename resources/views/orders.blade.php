@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Text</th>
                    <th>Amount Paid</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{!! $order->text !!}</td>
                        <td>${{ $order->amount_paid }}</td>
                        <td>{{ ucfirst($order->status) }}</td>
                        <td>
                            <a href="{{ route('order', ['id' => $order->id]) }}" class="card-link"
                               data-toggle="tooltip" title="View Order" value="View Order">
                                <i class="material-icons">visibility</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });
        });
    </script>
@endsection
