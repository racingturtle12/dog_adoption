
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="form.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login /Sign up Form</title>
  <?php include 'shownav.php';
  echo shownav();?> 
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <form class="search" action="action_page.php"  method="POST">
    <input type="text" placeholder="Search for dog breed" name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <br>
  <br>
    <form action="registrationform.php" method="POST">
    <h2> Create an account: </h2>
    <br>
    <td>Create UserID </td>
             <input type="number" name="user_id" required>


             <td>Create Username </td>
             <input type="text" name="userName" required>
       
             <td>Create Password </td>
             <td><input type="text" name="password" required></td>
         
             <td>Enter your Email </td>
             <input type="email" name="user_email" required>
           
           <br>
            
          <button type="submit" name="submit">Submit</button>
      <br>
         
  </form>



</body>
</html>


