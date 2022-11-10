<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="form.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
</head>
<body>
<?php require 'shownav.php';?>
  <br>
  <br>
  <br>
    <form action="registerform.php" method="post">
    
           
             <td>Enter User Name </td>
             <input type="text" name="userName" />
       
             <td>Create Password </td>
             <td><input type="text" name="pasword"/></td>
          
             <td>Retype Password </td>
             <input type="text" name="retypepasword"/>
         
             <td>Enter Email </td>
             <input type="text" name="email"/>
           
           <br>
            
          <input type="submit" value="Submit" />
      <br>
         
         </form>



</body>
</html>


