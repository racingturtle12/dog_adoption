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
  
<br>
<h2>Fees Include</h2>
<br>
<ul>
  <li>Health screening and veterinary examination</li>
  <li>Spay/Neuter</li>
  <li>Rabies vaccination (if over 4 months old)</li>
  <li>Distemper combination vaccination</li>
  <li>Flea treatment and preventative</li>
  <li>Deworming for intestinal parasites</li>
  <li>Microchip and registrationn</li>
  <li>Heartworm test (if over 6 months) and preventative medication</li>
  <li>Bordetella vaccination</li>
</ul>  














  </body>
  </html>