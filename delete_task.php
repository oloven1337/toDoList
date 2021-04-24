<?php
$a = $_POST['crd'];
$dbname = 'todolist';


$con = mysqli_connect("localhost","root","", $dbname);

		$sql = "DELETE FROM tasks WHERE task ='$a' ";
			if (mysqli_query($con, $sql)) {
				 include('index.php');
			}
			else{
				echo 'error';
			}
         
?>