<?php

	if(isset($_REQUEST['submit'])){
		$d = $_REQUEST['d'];
	}

	if(isset($_REQUEST['submit'])){
		$m = $_REQUEST['m'];
	}

	if(isset($_REQUEST['submit'])){
		$y = $_REQUEST['y'];
	}
?>


<html>
<head>
	<title>DATE OF BIRTH</title>
</head>
<body>
	<form method="post" action="2.php" style ="width:30%">
		<fieldset>
		<legend>DATE OF BIRTH</legend>
		Date: <br><input type="text" name="d" value=""/><br>
		Month: <br><input type="text" name="m" value=""/><br>
		E-Year: <br><input type="text" name="y" value=""/><br>
		<input type="submit" name="submit" value="Submit">
		<br><?php if(isset($d) and isset($m) and isset($y) ){ echo "DOB: ".$d.'//'.$m.'//'.$y; }?>
	</fieldset>
	</form>
</body>
</html>