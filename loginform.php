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
<?php require 'shownav.php';
  echo shownav();?>
  
  <br>
  <br>
  <br>

  <form action="loginform.php" method="post">

        <label> <strong> User Name </strong></label>
        <input type="text" name="userName" />
    
        <label><strong>Password </strong></label>
        <input type="text" name="pasword"/>
  
     <input type="submit" value="Submit" >
 
    <h5>Don't have account with us: <a href="registerform.php">Sign Up</a></h5> 
    </form>
  
</body>
</html>
        
