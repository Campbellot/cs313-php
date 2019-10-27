<?php

require("dbConnect.php");

$db = get_db();

$game_id = "";
$win = "";
$loss = "";
$input = "";
$result = array();
$i = 0;

try
{

  $statement = $db->prepare('SELECT game_id, win, loss, input FROM results');
	$statement->execute();

  
	while ($row = $statement->fetch())
	{
    $result[$i] = (object)(
        "game_id" => $row['game_id'];
        "win" => (($row['win']) ? TRUE : FALSE);
        "loss" => (($row['loss']) ? TRUE : FALSE);
        "input" => $row['input']);
    $i++;
	}
}
catch (PDOException $ex)
{
	echo "Error connecting to DB. Details: $ex";
	die();
}
var_dump($result);
