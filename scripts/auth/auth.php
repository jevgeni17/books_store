<?php

require_once 'connect.php';
if(isset($_POST['mail']) && isset($_POST['pass'])){
	$mail = filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

	$pass = md5($pass."asdpixcvn23Qc;ljx");

	$query = "SELECT * FROM  `users` WHERE `mail` = '$mail' AND `password` = '$pass'";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

	$user= $result->fetch_assoc();

	if(count($user) == 0){
		//header('Refresh: 3; index.php');
		//echo '<div class="alert alert-danger">К сожалению, такого пользователя не существует</div>';
		echo "<script>
		window.onload = function() {

			what();
	
			function what() {
				document.getElementById('auth-danger').innerHTML = '<p class=\'auth-error text-danger ml-4\'>incorrect email or password</p>';
			};
	
		
		};</script>";

	}


	if($mail==$user['mail'] && $pass==$user['password']){
		$_SESSION['user']=$user;
		$_SESSION['user-id']=$user['id'];
		$_SESSION['user-status']=$user['status'];
		//echo '<h3>'.$_SESSION['user']['mail'];
		header('Location: index.php');
	}
	
}

if(isset($_GET['exit'])){
	unset($_SESSION['user']);
}



?>
