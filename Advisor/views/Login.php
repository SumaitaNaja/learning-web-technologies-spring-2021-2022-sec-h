
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


  </head>
      <body>
       
          <fieldset>
            
              
              <table width="100%">
              <tr height="80px">
                <td width="80px">
                <img src="farm.jpg" width="1000px" height="200px">
                </td>
              </tr>

                  <tr>
                    <td>
                      <h1>FARMER'S HELP CENTER</h1>
                    </td>
        
                   <td align ="right">
                      
                      <a href="Login.php">Login</a>
                      <a> | </a>
                      <a href="Logout.php">Logout</a>
                    </td>
                  </tr>

                </table>
                  
        
      </fieldset>
      <fieldset>
        <form method="post" action=" ../controller/Logincheck.php">
           <fieldset>
                <legend><h2 style="color:white;">LOGIN</h2></legend>
                   <table >
                    <tr>
                       <td style="color:white;">Username: </td>
                       <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td style="color:white;">Password: </td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                  </table>
                  <hr>
                  <table>
                    <tr>
                       <input type="checkbox" name="" value=""> Remember me
                    </tr>
                    <tr>
                      <td><input type="submit" name="submit" value="Submit">
                      <a href="Forgot Password.php">Forgot Password?</a></td>
                    </tr>
                  </table>
           </fieldset>
         </form>
         </fieldset>
         
   </body>
</html>