<?php
require_once 'connect.php';
	 if(isset($_POST['mail']) && isset($_POST['pass']) && isset($_POST['pass-control'])){
		if(!empty($_POST['mail']) && !empty($_POST['pass']) && !empty($_POST['pass-control'])){
			if(preg_match("/^[a-z0-9_.-]+@([a-z0-9]+\.)+[a-z]{2,6}$/i", $_POST['mail'])){
				if($_POST['pass'] == $_POST['pass-control']){
					
					$mail = filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);
					$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
					$status = 'user';
					
					$query = "SELECT * FROM  `users` WHERE `mail` = '$mail'";
					$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

					$user= $result->fetch_assoc();

					if(count($user) == 0){
						
						$pass = md5($pass."asdpixcvn23Qc;ljx");

						$query = "INSERT INTO `users` (`mail`, `password`, `status`) VALUES ('$mail','$pass','$status')";# запись данных в б.д
						$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
						$_SESSION['user']=$user;
						//header('Refresh: 3; index.php');
						echo '<div class="alert alert-success d-flex justify-content-center">Спасибо, вы зарегистрированы в систему.</div>';
						header('Refresh: 3; index.php?login');
						
					}else{
						echo '<div class="alert alert-danger">Пользователь с таким почтовым ящиком уже существует!</div>';
					}
				}else{
					echo '<div class="alert alert-danger">Пароли не совпадают</div>';
				}
			}else{
				echo '<div class="alert alert-danger">Пожайлуйста введите существующий почтовый ящик!</div>';
			}
		}else{
			echo '<div class="alert alert-danger">Не все поля заполнены!</div>';
		}
}else{
	
}
 



?>
				
	


