@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .heading {
            font-size: 25px;
            margin-right: 25px;
        }

        .fa {
            font-size: 25px;
        }

        .checked {
            color: orange;
        }

        /* Three column layout */
        .side {
            float: left;
            width: 15%;
            margin-top:10px;
        }

        .middle {
            margin-top:10px;
            float: left;
            width: 70%;
        }

        /* Place text to the right */
        .right {
            text-align: right;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The bar container */
        .bar-container {
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
        }

        /* Individual bars */
        .bar-5 {  height: 18px; background-color: #4CAF50;}
        .bar-4 { height: 18px; background-color: #2196F3;}
        .bar-3 { height: 18px; background-color: #00bcd4;}
        .bar-2 { height: 18px; background-color: #ff9800;}
        .bar-1 { height: 18px; background-color: #f44336;}

        /* Responsive layout - make the columns stack on top of each other instead of next to each other */
        @media (max-width: 400px) {
            .side, .middle {
                width: 100%;
            }
            .right {
                display: none;
            }
        }
    </style>
</head>
<body>
<?php
$average = 0;
$count = 0;
$one =0;
$two = 0;
$three = 0;
$four = 0;
$five = 0;
$pirmas = 0;
$antras = 0;
$trecias = 0;
$ketvirtas = 0;
$penktas = 0;
?>
@foreach($reviews as $review)
<?php $count += 1; ?>
<?php
        $temp = 0;


?>
@if($temp = $review->rating)
@endif
<?php
$average += $temp; ?>
    @if($review->rating == '1')
       <?php $one += 1; ?>
        @endif
    @if($review->rating == '2')
        <?php $two += 1; ?>
    @endif
    @if($review->rating == '3')
      <?php  $three += 1; ?>
    @endif
    @if($review->rating == '4')
     <?php   $four += 1; ?>
    @endif
    @if($review->rating == '5')
      <?php  $five += 1; ?>
    @endif



@endforeach
<?php $average = $average / $count; ?>

<div class="container">
<span class="heading">Vartotojų ivertinimas</span>
@if($average <= 1)
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>

@endif
@if($average <= 2 && $average > 1)
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star "></span>
    <span class="fa fa-star "></span>
    <span class="fa fa-star"></span>

@endif
@if($average <= 3 && $average > 2)
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star "></span>
    <span class="fa fa-star"></span>

@endif

@if($average <= 4 && $average > 3)
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>

@endif

@if($average > 4)
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>

@endif
<?php
    $one1 = $one /  $count * 100 ;
    $two1 = $two  /  $count * 100;
    $three1 = $three /  $count * 100;
    $four1 = $four  /  $count * 100;
    $five1 = $five  /  $count * 100;
    $array = array($one1,$two1,$three1,$four1,$five1);
    ?>


<p>Atsiliepimu skaicius: <?php echo $count ?></p>
</div>
<hr style="border:3px solid #f1f1f1">
<div class="container">
<div class="row">
    <div class="side">
        <div>5 star</div>
    </div>
    <div class="middle">
        <div class="bar-container">
            <div class="bar-5" width="<?php $array[4]?>%"></div>
        </div>
    </div>
    <div class="side right">
        <div><?php echo $five?></div>
    </div>
    <div class="side">
        <div>4 star</div>
    </div>
    <div class="middle">
        <div class="bar-container">
            <div class="bar-4"  width="<?php $array[3]?>%"></div>
        </div>
    </div>
    <div class="side right">
        <div><?php echo $four?></div>
    </div>
    <div class="side">
        <div>3 star</div>
    </div>
    <div class="middle">
        <div class="bar-container">
            <div class="bar-3"  width="<?php $array[2]?>%"></div>
        </div>
    </div>
    <div class="side right">
        <div><?php echo $three?></div>
    </div>
    <div class="side">
        <div>2 star</div>
    </div>
    <div class="middle">
        <div class="bar-container">
            <div class="bar-2"  width="<?php $array[1]?>%"></div>
        </div>
    </div>
    <div class="side right">
        <div><?php echo $two?></div>
    </div>
    <div class="side">
        <div>1 star </div>
    </div>
    <div class="middle">
        <div class="bar-container">
            <div class="bar-1"  width="<?php $array[0]?>%"></div>
        </div>
    </div>
    <div class="side right">
        <div><?php echo $one?></div>
    </div>
</div>
</div>

</body>
</html>
@endsection
