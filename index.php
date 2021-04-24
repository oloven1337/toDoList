<?php

$dbname = 'todolist';



$con = mysqli_connect("localhost","root","", $dbname);
require_once 'config.php';
$query = "SELECT * FROM users";
$query2="SELECT* FROM tasks";
require 'task_func.php';
$result1 = mysqli_query($con, $query);
$result2 = mysqli_query($con,$query2);
$ses_user=$_SESSION['session_user'];

$cat=get_posts($ses_user);

?>


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./scss/style.css" />
    <title>Document</title>
  </head>

  <body>
   <form action="new_task.php" id="tbtb" method="post" name="taskform">
    <p><label for="task">Введите задачу<br>
<input class="input" id="task1" name="task1" size="50" type="text"></label></p>
<input class="button" name="ttt" type= "submit" value="Подтвердить"></p>
</form>

    <script src="./js/app.js"></script>

            
           <?php foreach ($cat as $data):?>
            
            <?php echo $data['task'] ?>
            <form action="delete_task.php" id="loginform" method="post" name="loginform">
                    <input class="button" id="obra" name= "<?=$data['task']?>" type="submit" style="float: right;" value="Удалить">
                    <input type="hidden" value="<?=$data['task']?>" name="crd" style="float: left;">
            </form>
              
            <?php endforeach;
