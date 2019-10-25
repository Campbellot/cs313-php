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
            $result = "It's a Tie! <a href='index.php'><img border='0' alt='tie' src='images/tie.jpg' style='width:100;height:100px;'></a>";
        break;
        case "paper":
            $result = "You Lose! <a href='index.php'><img border='0' alt='try_again' src='images/try_again.jpg' style='width:100;height:100px;'></a>";
        break;
        case "scissors":
            $result = "You Win! <a href='index.php'><img border='0' alt='winner' src='images/winner.jpg' style='width:100;height:100px;'></a>";
        break;    
    }
    break;
    case "paper":
    switch($cpu_input){
        case "rock":

        break;
        case "paper":

        break;
        case "scissors":

        break;
    
    }
    break;
    case "scissors":
    switch($cpu_input){
        case "rock":

        break;
        case "paper":

        break;
        case "scissors":

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
        <img border='0' alt='".$input."' src='images/".$input.".png' style='width:100;height:100px;'>
  </div>
  <div>
    <h1>CPU's Choice:</h1>
  </div>
  <div>
        <img border='0' alt='".$cpu_input."' src='images/".$opts[$cpu_input].".png' style='width:100;height:100px;'>
  </div>
</div>
</body>


"







?>