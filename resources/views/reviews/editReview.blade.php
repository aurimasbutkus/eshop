@extends('layouts.app')
@section('content')

        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">
    <div class="row content">

        <div class="col-sm-9">

            <hr>
            <h4>Edit review:</h4>
            <form role="form">
                <div class="form-group">
                    <textarea class="form-control" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    Rating: 3
                </div>
                <button type="save" class="btn btn-success">Save</button>
            </form>

            <hr>


    </div>


<br><br>





<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>
</html>
@endsection
