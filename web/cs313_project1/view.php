<?php
require("dbConnect.php");
$db = get_db();
$input = $_GET['input'];
$opts = array('rock', 'paper', 'scissors');
$cpu_input = array_rand($opts, 1);
var_dump($input, $cpu_input); 







?>