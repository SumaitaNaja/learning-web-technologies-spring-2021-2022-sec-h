<?php


	if(isset($_REQUEST['g'])){
		$g = $_REQUEST['g'];
		if(empty($g))
		{
			echo 'Select any \n';
		}
		else {
			echo $g.' Selected \n';
		}
	}
?>


<html>
<head>
	<title>GENDER</title>
</head>
<body>
	<form method="post" action="2.php" style="width:30%">
		<fieldset>
		<legend>GENDER</legend>

			<input type="radio" name="g" value="male"> Male
			<input type="radio" name="g" value="female"> Female
			<input type="radio" name="g" value="other"> Other <br>
		<input type="submit" name="submit" value="Submit">
		<br><br><?php if(isset($_REQUEST['g'])){ echo "Gender : ".$g; }?>
	</form>
</body>
</html>