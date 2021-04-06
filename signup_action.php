<?php
$dbname = 'ToDoList';
$email = $_POST['email'];
$pass = $_POST['password'];;
$passhash = md5($pass);
$newtekst = 'Введите вашу задачу';
$con = mysqli_connect("localhost","root","", $dbname);
		$sql = "INSERT INTO users (name, password, task) VALUES ('$email', '$passhash', '$newtekst' )";

			if ((re_add($con, $email, $passhash)==True)){
			$reg_mistake = "password or login error";
            include('signup.html');
            echo "$reg_mistake";
            exit();
		}else{
			if (mysqli_query($con, $sql)) {
				include('index.html');
            	header('index.html');

		}
}

		function re_add($con, $email, $psw)
{
	
    $dbname = 'ToDoList';
	$con = mysqli_connect("localhost","root","", $dbname);
	$sql_find = "SELECT name FROM media_users WHERE password = '$psw'  OR name = '$email'";
	$result_find = mysqli_query($con, $sql_find);
	if (mysqli_num_rows($result_find)>0) {
		return True;
}
	return False;
	}
	?>