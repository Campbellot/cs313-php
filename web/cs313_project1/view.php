<?php
require("dbConnect.php");
$db = get_db();
// $input = $_GET['input'];
$opts = array('rock', 'paper', 'scissors');
$key = array_rand($opts, 1);
$cpu_input = $opts[$key];
$result = "";
$db = get_db();
try
{
	// Notice that we do not use "SELECT *" here. It is best practice
	// to only bring back the fields that you need.
	// prepare the statement
	$statement = $db->prepare('SELECT game_id, win, loss, input FROM results');
	$statement->execute();
    // Go through each result
    
	while ($row = $statement->fetch())
	{
        
            echo $row['game_id']."\n";
            echo (($row['win']) ? TRUE : FALSE)."\n";
            echo (($row['loss']) ? TRUE : FALSE)."\n";
            echo $row['input'])."\n";
	}
}
catch (PDOException $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error connecting to DB. Details: $ex";
	die();
}exit;


switch($input){
    case "rock":
    switch($cpu_input){
        case "rock":
            $result = "<h1>It's a Tie! </h1><a href='index.php'><img border='0' alt='tie' src='images/tie.png' style='width:250px;height:250px;'></a>";
        break;
        case "paper":
            $result = "<h1>You Lose! </h1><a href='index.php'><img border='0' alt='loss' src='images/loss.png' style='width:250px;height:250px;'></a>";
        break;
        case "scissors":
            $result = "<h1>You Win! </h1><a href='index.php'><img border='0' alt='win' src='images/win.png' style='width:250px;height:250px;'></a>";
        break;    
    }
    break;
    case "paper":
    switch($cpu_input){
        case "rock":
            $result = "<h1>You Win! </h1><a href='index.php'><img border='0' alt='win' src='images/win.png' style='width:250px;height:250px;'></a>";
        break;
        case "paper":
            $result = "<h1>It's a Tie! </h1><a href='index.php'><img border='0' alt='tie' src='images/tie.png' style='width:250px;height:250px;'></a>";
        break;
        case "scissors":
            $result = "<h1>You Lose! </h1><a href='index.php'><img border='0' alt='loss' src='images/loss.png' style='width:250px;height:250px;'></a>";
        break;
    
    }
    break;
    case "scissors":
    switch($cpu_input){
        case "rock":
            $result = "<h1>You Lose! </h1><a href='index.php'><img class='center' border='0' alt='loss' src='images/loss.png' style='width:250px;height:250px;'></a>";
        break;
        case "paper":
            $result = "<h1>You Win! </h1><a href='index.php'><img class='center' border='0' alt='win' src='images/win.png' style='width:250px;height:250px;'></a>";
        break;
        case "scissors":
            $result = "<h1>It's a Tie! </h1><a href='index.php'><img class='center' border='0' alt='tie' src='images/tie.png' style='width:250px;height:250px;'></a>";
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
<div class='flex-container'>
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
  <div>
    ".$result."
  </div>
</div>
</body>";







?>