@extends('layouts.app')
@section('content')
    <table class="table table-hover">

        <thead>

        <th>Status</th>

        <th>Amount Paid</th>

        <th>Created at</th>

        <th>Text</th>

        <th><a href="{{route('exportToPDF', ['id' => $user->id])}}">Export</th>


        </thead>

        <tbody>
        @foreach($orders as $userwithOrder)

            <tr>

                <td>{{$userwithOrder->status}} </td>

                <td>{{$userwithOrder->amount_paid}} </td>

                <td>{{$userwithOrder->created_at}} </td>

                <td>{{$userwithOrder->text}} </td>


            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
