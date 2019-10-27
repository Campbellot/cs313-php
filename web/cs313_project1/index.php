<?php

require("dbConnect.php");

$db = get_db();

$game_id = array();
$win = array();
$loss = array();
$input = array();
$i = 0;

try
{

  $statement = $db->prepare('SELECT game_id, win, loss, input FROM results');
	$statement->execute();

  
	while ($row = $statement->fetch())
	{
        $game_id[$i] = $row['game_id'];
        $win[$i] = (($row['win']) ? TRUE : FALSE);
        $loss[$i] = (($row['loss']) ? TRUE : FALSE);
        $input[$i] = $row['input'];
        $i++;
	}
}
catch (PDOException $ex)
{
	echo "Error connecting to DB. Details: $ex";
	die();
}
var_dump ($game_id);
var_dump ($win);
var_dump ($loss);
var_dump ($input);
