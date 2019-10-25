<?php
require("dbConnect.php");
$db = get_db();
$input = $_GET['input'];
$opts = array('rock', 'paper', 'scissors');
$key = array_rand($opts, 1);
$cpu_input = $opts[$key];
$result = "";

switch($input){
    case "rock":
    switch($cpu_input){
        case "rock":
            $result = "<h1>It's a Tie! </h1><a href='index.php'><img border='0' alt='tie' src='images/tie.png' style='width:100;height:100px;'></a>";
        break;
        case "paper":
            $result = "<h1>You Lose! </h1><a href='index.php'><img border='0' alt='loss' src='images/loss.png' style='width:100;height:100px;'></a>";
        break;
        case "scissors":
            $result = "<h1>You Win! </h1><a href='index.php'><img border='0' alt='win' src='images/win.png' style='width:100;height:100px;'></a>";
        break;    
    }
    break;
    case "paper":
    switch($cpu_input){
        case "rock":
            $result = "<h1>You Win! </h1><a href='index.php'><img border='0' alt='win' src='images/win.png' style='width:100;height:100px;'></a>";
        break;
        case "paper":
            $result = "<h1>It's a Tie! </h1><a href='index.php'><img border='0' alt='tie' src='images/tie.png' style='width:100;height:100px;'></a>";
        break;
        case "scissors":
            $result = "<h1>You Lose! </h1><a href='index.php'><img border='0' alt='loss' src='images/loss.png' style='width:100;height:100px;'></a>";
        break;
    
    }
    break;
    case "scissors":
    switch($cpu_input){
        case "rock":
            $result = "<h1>You Lose! </h1><a href='index.php'><img class='center' border='0' alt='loss' src='images/loss.png' style='width:100;height:100px;'></a>";
        break;
        case "paper":
            $result = "<h1>You Win! </h1><a href='index.php'><img class='center' border='0' alt='win' src='images/win.png' style='width:100;height:100px;'></a>";
        break;
        case "scissors":
            $result = "<h1>It's a Tie! </h1><a href='index.php'><img class='center' border='0' alt='tie' src='images/tie.png' style='width:100;height:100px;'></a>";
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

<body>
<div class='flex-container2'>
  <div>
    <h1>Your Choice:</h1>
  </div>
  <div>
    <img class='center' border='0' alt='".$input."' src='images/".$input.".png' style='width:100;height:100px;'>
  </div>
  <div>
    <h1>CPU's Choice:</h1>
  </div>
  <div>
    <img class='center' border='0' alt='".$cpu_input."' src='images/".$cpu_input.".png' style='width:100;height:100px;'>
  </div>
  <div>
    ".$result."
  </div>
</div>
</body>";







?>