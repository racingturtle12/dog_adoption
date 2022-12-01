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
  <?php
$servername = "localhost";
$username = "ics325fa2206";
$password = "5859";
$dbname = "ics325fa2206";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM dog";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo  "<br> Dog name: " . $row["dog_name"]. "<br> Dog Breed:  " . $row["dog_breed"]. "<br> Weight: " . $row["dog_weight"]. "<br> Dog color:  " . $row["dog_color"]. "<br> " 
    . "<br> Gender:  " . $row["dog_gender"]. ' <br><br><img src="data:image/jpg;base64,' .base64_encode( $row["dog_img"]).'"/> <br><br>';
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>







