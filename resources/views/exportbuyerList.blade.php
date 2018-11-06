@extends('layouts.app')
@section('content')
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body>
<table class="table table-hover">

    <thead>

    <th>Name</th>

    <th>Last Name</th>

    <th>Address</th>

    <th>Country</th>

    <th>Status</th>

    <th>Amount_Paid</th>

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


        </tr>
    @endforeach

    </tbody>

</table>
</body>
</html>
@endsection
