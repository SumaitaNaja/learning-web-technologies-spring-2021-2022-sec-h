<?php 
	session_start();

	if(isset($_POST['Add'])){
		$addtext = $_POST['addtext'];
		

		if($addtext != null){
		
			/*if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			}*/

			$file = fopen('user.txt', 'r');
			$user = fread($file, filesize('user.txt'));
			//echo $user;

			fclose($file);
			$abc = explode('|', $user);
			//print_r($abc);
				
			if(trim($abc[0]) == $addtext ){
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				
				header('location: ../views/viewinfo.php');
			}else{
				echo "INVALID INFORMATION";
			}

		}else{
			echo "NULL SUBMISSION";
		}
	}	
?>