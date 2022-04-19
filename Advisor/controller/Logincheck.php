<?php 
	session_start();

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != null && $password != null){
		
			/*if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			}*/

			$file = fopen('user.txt', 'r');
			$user = fread($file, filesize('user.txt'));
			//echo $user;

			fclose($file);
			$abc = explode('|', $user);
			//print_r($abc);
				
			if(trim($abc[0]) == $username && trim($abc[1]) == $password){
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				
				header('location: ../views/information.php');
			}
			else{
				echo "invalid username/password";
			}

		}else{
			echo "null submission..";
		}
	}	
?>