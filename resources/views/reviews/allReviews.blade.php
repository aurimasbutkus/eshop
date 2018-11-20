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
            <h4><small>RECENT POSTS</small></h4>
            <hr>
            <h4>Leave a review:</h4>
            <form role="form">
                <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                <div class="form-group">
                    <textarea class="form-control" rows="3" required name = 'body' autofocus></textarea>
                </div>
                <div class="form-group">
                Rating: 3
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

            <hr>

            @foreach($reviews as $review)
                <p>{{$review->name}} {{$review->last_name}} {{$review->created_at}} </p>
                <h4>{{$review->body}}</h4>
                <p>{{$review->rating}}</p>

                <p> Liked: {$votes->vote}</p>

                <a href="{{route('editReview')}}" a/> <button type="edit" class="btn btn-success">Edit</button>
                <button type="remove" class="btn btn-success">Remove</button>
                <button type="like" class="btn btn-success">Like</button>
                <h4>Leave a Comment:</h4>
                <form role="form">
                    <div class="form-group">
                        <textarea class="form-control" rows="2" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            @endforeach


            <p><span class="badge"></span> Comments:</p><br>
                </div>
            </div>
</div>

            <br><br>





<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>
</html>
@endsection
