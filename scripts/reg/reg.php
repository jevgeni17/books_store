<?php
require_once 'connect.php';
	 if(isset($_POST['mail']) && isset($_POST['pass']) && isset($_POST['pass-control'])){
		if(!empty($_POST['mail']) && !empty($_POST['pass']) && !empty($_POST['pass-control'])){
			if(preg_match("/^[a-z0-9_.-]+@([a-z0-9]+\.)+[a-z]{2,6}$/i", $_POST['mail'])){
				if($_POST['pass'] == $_POST['pass-control']){
					
					$mail = filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);
					$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
					
					$query = "SELECT * FROM  `users` WHERE `mail` = '$mail'";
					$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

					$user= $result->fetch_assoc();

					if(count($user) == 0){
						$pass = md5($pass."asdpixcvn23Qc;ljx");

						$query = "INSERT INTO `users` (`mail`, `pass`) VALUES ('$mail','$pass')";# запись данных в б.д
						$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
					}else{
						echo 'Пользователь с таким почтовым ящиком уже существует!';
					}
				}else{
					echo 'Пароли не совпадают!';
				}
			}else{
				echo 'Пожалуйста введите существующий почтовый ящик';
			}
		}else{
			echo 'Не все поля заполнены!';
		}
}else{
	
}
 



?>
				
	


