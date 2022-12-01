<?php
session_start();

if(!isset($_SESSION["username"]))
{

  header("location:loginform.php");
}

elseif($_SESSION['usertype']=='admin'){
  
  header("location:loginform.php");
}



?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="main.css">
<?php include 'user_nav.php';
  echo show_user_nav();?> 
</head>
<body>
 <h1>   <?php echo "Hello, ".  $_SESSION["username"] ;?></h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <form class="search" action="action_page.php"  method="post">
    <input type="text" placeholder="Search for dog breed" name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>

  <div style=" margin-top: 10px; float: left;">
    <img src="images/1.jpg" alt="Dog" width="500" height="333">
   
    <div class="rescue">
        <h2 style="text-align: center;">Adopt Me!<br></h2>
        <p style="text-align: left; margin-left: 20px;">
             Fostering a dog is an incredibly rewarding experience.
             Fosters provide care, food, play, exercise, and socialization for an animal.
             They work hand-in-hand with Dog Haven volunteers to respond to the adopter. 
             And yes, it can be difficult to say goodbye, but the success makes it worthwhile. 
             Our fosters share their stories and photos with other volunteers and celebrate each 
             animal's new home together.
        </p>
     </div>
    </div>
</body>
</html>
