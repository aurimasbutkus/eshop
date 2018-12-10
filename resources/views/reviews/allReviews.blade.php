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

            <h4>Leave a review:</h4>
            <form role="form" method="post" action="newReview">
                <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                <div class="form-group">
                    <textarea  name="text" class="form-control" rows="3" required autofocus></textarea>
                    @csrf
                </div>
                <input name="productName" type="hidden" value="">
                <div class="form-group">
                    <h4>Reitingas:</h4>
                    <select name="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

            <hr>
            <h4><small>RECENT POSTS</small></h4>
            <hr>
            @foreach($reviews as $review)
                <p>{{$review->name}} {{$review->last_name}} {{$review->created_at}} </p>
                <h4>{{$review->body}}</h4>
                <p>Įvertinimas: {{$review->rating}}</p>

                <td><a href="{!! route('editRedirectReview', ['id'=>$review->id]) !!}"><button type="edit" class="btn btn-default" href="">Edit</button></a></td>

                <td><a href="{!! route('deleteReview', ['id'=>$review->id]) !!}"><button type="delete"  class="btn btn-default">Delete</button></a></td>
                <?php
                    $reviewid = $review->id;
                    $sql =  DB::select("SELECT * from comments where review_id = '$reviewid'");

                    ?>
                    @foreach($sql as $comment)
                        <h4>{{$comment->body}}</h4>
                        <p>Įvertinimas: {{$comment->vote}}</p>
                    @endforeach

                <h4>Leave a Comment:</h4>
                <form role="form" method="post" action="newComment" >
                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                    <div class="form-group">
                        <textarea  name="text" class="form-control" rows="3" required autofocus></textarea>
                        @csrf
                    </div>
                    <input name="rating_id" type="hidden" value="{{$reviewid}}">
                    <div class="form-group">
                        <h4>Komentaro įvertinimas:</h4>
                        <select name="vote">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
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
