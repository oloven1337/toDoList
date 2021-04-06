<?php
$dbname = 'ToDoList';
$login = $_POST['email'];
$pass = $_POST['password'];
$passhash = md5($pass);

$con = mysqli_connect("localhost","root","", $dbname);

if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($passhash);
	$query =mysqli_query($con, "SELECT * FROM users WHERE name='$username' AND password='$password'");
	$numrows=mysqli_num_rows($query);

if($numrows!=0)
 {
while($row=mysqli_fetch_assoc($query))
 {
	$dbusername=$row['name'];
    $dbpassword=$row['password'];
     $dbid=$row['id'];
     $dbid=$row['task'];
 }
  if($username == $dbusername && $password == $dbpassword)
 {
 	session_start();
 	$_SESSION['session_user']=$username;
 	$_SESSION['session_pass']=$password;
 	$_SESSION['task']=$dbid;
 	header("Location: index.html");
	}
	}else {
	  echo("Неправильный логин или пароль");
 }
	} else {
		echo ("Заполните все поля");
	}
?>