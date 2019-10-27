<?php

require("dbConnect.php");

$db = get_db();

$game_id = "";
$win = "";
$loss = "";
$input = "";

try
{

  $statement = $db->prepare('SELECT game_id, win, loss, input FROM results');
	$statement->execute();

  
	while ($row = $statement->fetch())
	{
        $game_id = $row['game_id'];
        $win = (($row['win']) ? TRUE : FALSE);
        $loss = (($row['loss']) ? TRUE : FALSE);
        $input = $row['input'];
	}
}
catch (PDOException $ex)
{
	echo "Error connecting to DB. Details: $ex";
	die();
}
echo $game_id."\n";
echo $win."\n";
echo $loss."\n";
echo $input."\n";
