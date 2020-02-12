<?php

require_once 'connect.php';
if(isset($_POST['mail']) && isset($_POST['pass'])){
	$mail = filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

$pass = md5($pass."asdpixcvn23Qc;ljx");

$query = "SELECT * FROM  `users` WHERE `mail` = '$mail' AND `pass` = '$pass'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$user= $result->fetch_assoc();

if(count($user) == 0){
  echo "Takoi ne naiden";
  exit();
}

if($mail==$user['mail'] && $pass==$user['pass']){
			 $_SESSION['user']=$user;
       //echo '<h3>'.$_SESSION['user']['mail'];
	   header('Location: question.php');
	    
		 }
}


if(isset($_GET['exit'])){
	unset($_SESSION['user']);
}



?>
