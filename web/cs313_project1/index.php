<?php
/**********************************************************
* File: topicEntry.php
* Author: Br. Burton
* 
* Description: This is the PHP file that the user starts with.
*   It has a form to enter a new scripture and topic.
*   It posts to the insertTopic.php page.
***********************************************************/
// The DB connection logic is in another file so it can be included
// in each of our different PHP files.
require("dbConnect.php");
$db = get_db();
// var_dump($db);exit;

// try
// {
// 	// Notice that we do not use "SELECT *" here. It is best practice
// 	// to only bring back the fields that you need.
// 	// prepare the statement
// 	$statement = $db->prepare('SELECT game_id, win, loss, input FROM results');
// 	$statement->execute();
//     // Go through each result
    
// 	while ($row = $statement->fetch())
// 	{
//         echo $row['game_id']."\n";
//         echo (($row['win']) ? "TRUE" : "FALSE")."\n";
//         echo (($row['loss']) ? "TRUE" : "FALSE")."\n";
//         echo $row['input']."\n";
// 	}
// }
// catch (PDOException $ex)
// {
// 	// Please be aware that you don't want to output the Exception message in
// 	// a production environment
// 	echo "Error connecting to DB. Details: $ex";
// 	die();
// }
?>
<!DOCTYPE HTML>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Rock, Paper, Scissors</title>

  <link rel="stylesheet" href="style.css">

</head>

<body>
<script src="js/scripts.js"></script>
<form action="view.php" method="GET">
<div class="flex-container">
  <div><h1>Select Your Choice:</h1></div>
  <div><input type="submit" img src="images/rock.jpg" alt="rock"></div>
  <div><input type="submit" img src="images/paper.jpg" alt="paper"></div>
  <div><input type="submit" img src="images/scissors.jpg" alt="scissors"></div>
</div>
</form>
</body>
</html>