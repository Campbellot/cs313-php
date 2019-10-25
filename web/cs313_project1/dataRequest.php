<?php


require("dbConnect.php");
$db = get_db();
// var_dump($db);exit;
$result = array();
$i = 0;
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
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error connecting to DB. Details: $ex";
	die();
}
var_dump($result);
$stat = $_GET['stat'];
switch($stat){
    case "paper":
        echo "<h3>paper statistics blah blah blah\n</h3>";
    break;
    case "scissors":
        echo "<h3>scissors statistics blah blah blah\n</h3>";
    break;
    case "rock":
        echo "<h3>rock statistics blah blah blah\n</h3>";
    break;
}

?>