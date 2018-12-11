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
    
    <th>Status</th>

    <th>Amount_Paid</th>

    <th>Specification</th>

    </thead>

    <tbody>
    @foreach($usersWithOrders as $userwithOrder)

        <tr>

            <td>{{$userwithOrder->status}} </td>

            <td>{{$userwithOrder->amount_paid}} </td>

            <td>{{$userwithOrder->text}} </td>


        </tr>
    @endforeach

    </tbody>

</table>
</body>
</html>
@endsection
