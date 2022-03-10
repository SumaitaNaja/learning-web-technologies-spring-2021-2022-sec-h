<?php

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['myname'];
	}
?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" action="B.php" style="width:30%">
		<fieldset>
			<legend>NAME</legend>
		<br> <input type="text" name="myname" value="<?php if(isset($name)){ echo "NAME: ".$name; }?>"/>
		<hr>
		<br><input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>