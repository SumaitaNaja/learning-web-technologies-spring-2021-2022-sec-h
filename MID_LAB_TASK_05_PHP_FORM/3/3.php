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
		Date: <br><input type="text" name="d" value="<?php if(isset($d)){ echo $d; }?>"/><br>
		Month: <br><input type="text" name="m" value="<?php if(isset($m)){ echo $m; }?>"/><br>
		E-Year: <br><input type="text" name="y" value="<?php if(isset($y)){ echo $y; }?>"/><br>
		<input type="submit" name="submit" value="Submit">
	</fieldset>
	</form>
</body>
</html>