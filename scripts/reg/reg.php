<?php
require_once 'connect.php';
function script($text){
	echo "<script>
		window.onload = function() {

			what();
	
			function what() {
				document.getElementById('auth-danger').innerHTML = '<p class=\'auth-error text-danger ml-4\'>$text</p>';
			};
	
		
		};</script>";
}
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
						$_SESSION['reg-ok'] = true;
						//header('Refresh: 3; index.php');
						
						header('Refresh: 0; index.php?login');
						
					}else{
						$message='email already exists';
						script($message);
					}
				}else{
					$message='зasswords do not match';
					script($message);
				}
			}else{
				$message='invalid email';
				script($message);
			}
		}else{
			$message='all fields must be filled';
			//echo '<div class="alert alert-danger">Не все поля заполнены!</div>';
			script($message);
		}
}else{
	
}
 



?>
				
	


