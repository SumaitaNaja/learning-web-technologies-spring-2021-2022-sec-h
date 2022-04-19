<html>
  <head><style>


a {
  color: white;
}

body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: left;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style></head>
    <body>
      <fieldset >
        
          <table width="100%">
             <tr>
                <td>
                  <h1>ADDED INFORMATION</h1>
                </td>
                <td align ="right">
                    
                    <a href="information.php">Go back</a>
                    <a>  </a>
                </td>
             </tr>
          </table>
             
    </fieldset>


<fieldset >
  <table>
 <form method="post" action=" ">
<b>Advise from Advisor: </b> <?php echo $_POST["addtext"]; ?><br>
<b>Attached photo: </b><?php echo $_POST["addfile"]; ?>
</table>
</fieldset>
<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = "";
</script>


</body>
</html>