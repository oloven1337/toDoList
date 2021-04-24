<?php

function get_posts($person){
$dbname = 'todolist';
	$con = mysqli_connect("localhost","root","", $dbname);

	$sql = "SELECT * FROM tasks WHERE user_id ='$person'";
	$result = mysqli_query($con, $sql);
	$out = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $out;

}
function get_all_posts(){

$dbname = 'todolist';
	$con = mysqli_connect("localhost","root","", $dbname);

	$sql =  "SELECT * FROM tasks";
	$result = mysqli_query($con, $sql);
	$out = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $out;
}
?>