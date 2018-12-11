@extends('layouts.app')
@section('content')
<table class="table table-hover">

    <thead>

    <th>Name</th>

    <th>Last Name</th>

    <th>Address</th>

    <th>Country</th>

    <th>Status</th>

    <th>Amount_Paid</th>

    <th><a href="{{route('exportToPDF')}}">Export</th>


    </thead>

    <tbody>
    @foreach($usersWithOrders as $userwithOrder)

        <tr>

            <td>{{$userwithOrder->name}} </td>

            <td>{{$userwithOrder->last_name}} </td>

            <td>{{$userwithOrder->address}} </td>

            <td>{{$userwithOrder->country}} </td>

            <td>{{$userwithOrder->status}} </td>

            <td>{{$userwithOrder->amount_paid}} </td>

            <td>{{$userwithOrder->text}} </td>


        </tr>
    @endforeach

    </tbody>



</table>
@endsection
