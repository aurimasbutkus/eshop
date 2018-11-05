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
<div class="form-group" >
    <label for="search">Find Users:</label>
    <input type="search" class="form-control" id="search" name="search">
</div>
<table class="table table-hover">

    <thead>

    <th>Name</th>

    <th>Last Name</th>

    <th>Email</th>

    <th>Phone</th>

    <th>Address</th>

    <th>Country</th>

    </thead>

    <tbody>
    @foreach($users as $user)

        <tr>

            <td>{{$user->name}} </td>

            <td>{{$user->last_name}} </td>

            <td>{{$user->email}} </td>

            <td>{{$user->phone}} </td>

            <td>{{$user->address}} </td>

            <td>{{$user->country}} </td>

            <td><button type="edit" class="btn btn-default">Edit</button> <button type="delete" class="btn btn-default">Delete</button> </td>

            <td><a href="{{ route('seePurchaseHistory') }}"><button type="purchaseHistory" class="btn btn-default">Purchase History</button> </td>

        </tr>
    @endforeach

    </tbody>

</table>
</body>
</html>
@endsection
