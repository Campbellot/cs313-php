<?php

$input = $_GET['input'];
$opts = array('rock', 'paper', 'scissors');
$key = array_rand($opts, 1);
$cpu_input = $opts[$key];
$result = "";
$bod_class = "";


switch($input){
    case "rock":
    switch($cpu_input){
        case "rock":
            $result = "<div><h1>It's a Tie! </h1></div><div><a href='rps_index.html'><img border='0' alt='tie' src='images/tie.png' style='width:100px;height:250px;'></a></div>";
            $bod_class = "body4";
        break;
        case "paper":
            $result = "<div><h1>You Lose! </h1></div><div><a href='rps_index.html'><img border='0' alt='loss' src='images/loss.png' style='width:250px;height:250px;'></a></div>";
            $bod_class = "body3";
        break;
        case "scissors":
            $result = "<div><h1>You Win! </h1></div><div><a href='rps_index.html'><img border='0' alt='win' src='images/win.png' style='width:150px;height:250px;'></a></div>";
            $bod_class = "body2";
        break;    
    }
    break;
    case "paper":
    switch($cpu_input){
        case "rock":
            $result = "<div><h1>You Win! </h1></div><div><a href='rps_index.html'><img border='0' alt='win' src='images/win.png' style='width:150px;height:250px;'></a></div>";
            $bod_class = "body2";
        break;
        case "paper":
            $result = "<div><h1>It's a Tie! </h1></div><div><a href='rps_index.html'><img border='0' alt='tie' src='images/tie.png' style='width:100px;height:250px;'></a></div>";
            $bod_class = "body4";
        break;
        case "scissors":
            $result = "<div><h1>You Lose! </h1></div><div><a href='rps_index.html'><img border='0' alt='loss' src='images/loss.png' style='width:250px;height:250px;'></a></div>";
            $bod_class = "body3";
        break;
    
    }
    break;
    case "scissors":
    switch($cpu_input){
        case "rock":
            $result = "<div><h1>You Lose! </h1></div><div><a href='rps_index.html'><img class='center' border='0' alt='loss' src='images/loss.png' style='width:250px;height:250px;'></a></div>";
            $bod_class = "body3";
        break;
        case "paper":
            $result = "<div><h1>You Win! </h1></div><div><a href='rps_index.html'><img class='center' border='0' alt='win' src='images/win.png' style='width:150px;height:250px;'></a></div>";
            $bod_class = "body2";
        break;
        case "scissors":
            $result = "<div><h1>It's a Tie! </h1></div><div><a href='rps_index.html'><img class='center' border='0' alt='tie' src='images/tie.png' style='width:100px;height:250px;'></a></div>";
            $bod_class = "body4";
        break;
    
    }
    break;
}


echo "<!DOCTYPE HTML>

<html lang='en'>
<head>
  <meta charset='utf-8'>

  <title>Rock, Paper, Scissors</title>

  <link rel='stylesheet' href='style.css'>

</head>

<body class = ".$bod_class.">
<div class='flex-container2'>
  <div>
    <h1>Your Choice:</h1>
  </div>
  <div>
    <img class='center' border='0' alt='".$input."' src='images/".$input.".png' style='width:250px;height:250px;'>
  </div>
  <div>
    <h1>CPU's Choice:</h1>
  </div>
  <div>
    <img class='center' border='0' alt='".$cpu_input."' src='images/".$cpu_input.".png' style='width:250px;height:250px;'>
  </div>
    ".$result."
</div>
</body>";







?>