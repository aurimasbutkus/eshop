@extends('layouts.app')
@section('content')
<table class="table table-hover">

    <thead>

    <th>Name</th>

    <th>Last Name</th>

    <th><a href="{{route('exportToPDF')}}">Export</th>


    </thead>

    <tbody>
    @foreach($usersWithOrders as $userwithOrder)

        <tr>

            <td>{{$userwithOrder->name}} </td>

            <td>{{$userwithOrder->last_name}} </td>

            <td><a href="{!! route('userOrder', ['id'=>$userwithOrder->id]) !!}"><button class="btn btn-default">SeeOrders</button></td>



        </tr>
    @endforeach
    </tbody>
</table>
@endsection
