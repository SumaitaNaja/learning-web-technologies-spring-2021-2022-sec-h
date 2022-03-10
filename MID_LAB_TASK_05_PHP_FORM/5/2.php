<html>
    <head>
		<title></title>
	</head>
	<body>
		<form method="post" action="2.php" style="width:30%">
            <fieldset >
			<legend>DEGREE</legend>
            <table>
                <tr>
					<td>
						<input type="checkbox" name="" value=""> SSC
						<input type="checkbox" name="" value=""> HSC
						<input type="checkbox" name="" value=""> BSc
						<input type="checkbox" name="" value=""> MSc
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Submit"><br><br>
		<?php if(isset($_REQUEST['SSC'])){ echo $_REQUEST['SSC'].'<br>'; }?>
		<?php if(isset($_REQUEST['HSC'])){ echo $_REQUEST['HSC'].'<br>'; }?>
		<?php if(isset($_REQUEST['Bsc'])){ echo $_REQUEST['Bsc'].'<br>'; }?>
		<?php if(isset($_REQUEST['Msc'])){ echo $_REQUEST['Msc']; }?>
					</td>
				</tr>
		    </table>
		    
		</fieldset>
		    
        </form>

    </body>
</html>