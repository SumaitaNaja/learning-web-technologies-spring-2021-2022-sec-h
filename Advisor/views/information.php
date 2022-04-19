
<html>
  <head>
     <style>
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
</style>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Fill again";
}
</script>
  </head>
      <body>
              <fieldset>
            
              
              <table width="100%">
                  <tr>
                    <td>
                      <h1 style="color:white;">ADVISOR PAGE</h1>
                    </td>
                     <td align ="right">
                      
                      <a href="Search.php">Search</a>
                       <a>|</a>
                      <a href="Logout.php">Logout</a>
                    </td>
                  </tr>

                </table>
                  
        
      </fieldset>
      <fieldset>
        <form method="post" action="..//views/viewinfo.php">
           <fieldset>
                <legend><h2 style="color:white;">INFORMATION</h2></legend>
                   <table >
                    <tr>
                       <td style="color:white;">Add information: </td>
                       <td><input type="text" name="addtext" value="" /> </td>
                       
                       <td style="color:white;">Add image: </td>
                       <td><input type="file" name="addfile" value=""></td>
                    </tr>
                  </table>
                  <hr>
                  <table>
                    <tr>
                      
                       <td><input type="submit" name="Add" value="Add">
                     
                      <input type="reset" name="Remove" value="Remove">
                      
                          <button type="button" onclick="myFunction()"> Edit </button>
                    </tr>
                  </table>
           </fieldset>
         </form>
         </fieldset>
         <p id="demo"></p>



         
   </body>
</html>