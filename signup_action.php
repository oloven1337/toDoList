<?php
$dbname = 'todolist';
$name = $_POST['name'];
$pass = $_POST['password'];

$con = mysqli_connect("localhost","root","", $dbname);
		$sql = "INSERT INTO users (name, password) VALUES ('$name', '$pass')";

			if ((re_add($con, $name, $pass)==True)){
			$reg_mistake = "password or login error";
            include('signup.html');
            echo "$reg_mistake";
            exit();
		}else{
			 if (mysqli_query($con, $sql))
                         {
                            include('login.html');
                            header('login.html');

		
                         }
                }

		function re_add($con, $login, $psw)
{
	
    $dbname = 'todolist';
	$con = mysqli_connect("localhost","root","", $dbname);
	$sql_find = "SELECT name FROM users WHERE password = '$psw'  OR name = '$login'";
	$result_find = mysqli_query($con, $sql_find);
	if (mysqli_num_rows($result_find)>0) {
		return True;
}
	return False;
	}
?>