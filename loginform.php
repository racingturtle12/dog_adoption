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
  <div class="navbar">
    <div>
        <h1 class="logo">Dog haven<span style="color:#359127;"> Web</span> site</h1>
    </div>
      <a href="index.html">Home</a>
      <a href="adopt_app.html">Adopt a Dog</a>
      <a href="adoptable_dogs.html">Adoptable Dogs</a>
      <a href="adoption_agreements.html">Adoption Agreements</a>
      <a href="adoption_fees.html">Adoption Fees</a>
      <a href="foster_app.html">Dog Foster Application</a>
    </div>
  
  <br>
  <br>
  <br>

  <form action="loginform.php" method="post">

        <label> <strong> User Name </strong></label>
        <input type="text" name="userName" />
    
        <label><strong>Password </strong></label>
        <input type="text" name="pasword"/>
  
     <input type="submit" value="Submit" >
 
    <h5>Don't have account with us: <a href="registerform.html">Sign Up</a></h5> 
    </form>
  
</body>
</html>
        
