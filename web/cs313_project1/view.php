<?php
require("dbConnect.php");
$db = get_db();
$input = $_GET['input'];
$opts = array('rock', 'paper', 'scissors');
$cpu_input = array_rand($opts, 1);
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
        <img border='0' alt='".$input."' src='images/".$input.".png' style='width:100;height:100px;'>
  </div>
  <div>
    <h1>Your Choice:</h1>
        <img border='0' alt='".$cpu_input."' src='images/".$cpu_input.".png' style='width:100;height:100px;'>
  </div>
</div>
</body>


"







?>