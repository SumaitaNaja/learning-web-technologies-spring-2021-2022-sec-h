<?php
	session_start();

	$tryAgain = 0;

	if(isset($_POST['submit']))
  {
  	    
        $username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

    if($username != "")
    {
      if($password != "")
      {
      	
		if($email != "")
				{
					
					$file = fopen('user.txt', 'a');

					$file = fopen('user.txt', 'r');

			    while(!feof($file))
			        {
			          $data = fgets($file);
								$user = explode('|', $data);

			          if($username == trim($user[0]))
				        {
									echo "Username already taken. Please try with another one....";
									$tryAgain = 1;
								}
							}

							if($tryAgain == 0)
							{
								if( $username !=null && $password !=null && $email !=null)
								{
									$file = fopen('user.txt', 'a');
									$user = $username."|".$password."|".$email."\r\n";
									fwrite($file, $user);

									header('location: Login.php');
								}
							}
					
			}	
           else
				{
					echo "Invalid email....";
				}
      }
      else
      {
        echo "Invalid password....";
      }
    }
    else
    {
      echo "Invalid username....";
    }
}


?>
