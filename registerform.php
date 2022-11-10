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

  <div class="subnav">
    <button class="subnavbtn">Adopt <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="adopt_app.html">Adopt a Dog</a>
      <a href="adoptable_dogs.html">Adoptable Dogs</a>
      <a href="adoption_agreements.html">Adoption Agreements</a>
      <a href="adoption_fees.html">Adoption Fees</a>
    </div>
  </div> 

  <div class="subnav">
    <button class="subnavbtn">Foster <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="foster_app.html">Dog Foster Application</a>
    </div>
  </div>
  </div>
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


