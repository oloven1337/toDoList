<?php
require 'config.php';
$dbname = 'todolist';
$ses_user=$_SESSION['session_user'];
$task_name = $_POST['task1'];
$db_table = "tasks";

$mysqli = new mysqli("localhost","root","", $dbname);
$result = $mysqli->query("INSERT INTO ".$db_table." (user_id,task) VALUES ('$ses_user', '$task_name')");
if ($result == true){
        include('index.php');
            	
}else{
	echo "Информация введена неверно;";
        exit();
}
exit();
?>

