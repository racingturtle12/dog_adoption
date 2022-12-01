<?php
session_start();

if(!isset($_SESSION["username"]))
{

  header("location:loginform.php");

}
elseif($_SESSION['usertype']=='user'){
  
  header("location:loginform.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee edit dog post </title>
    <?php include 'admin_nav.php';
  echo show_admin_nav();?> 
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

<form id="adoption-form" action="edit_dog_action.php" method="post" >
    <br>
    Select dog you wish to edit: </label>
    <br>
     <?php
$servername = "localhost";
$username = "ics325fa2202";
$password = "6666";
$dbname = "ics325fa2202";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sqlSelect = "SELECT dog_id, dog_name FROM dog";
$result = mysqli_query($conn, $sql);

echo "<select id='dog_id' name='dog_name'>";

while ($row = mysqli_fetch_array($result)) {
   unset($id, $name);
   $id = $row['dog_id'];
   $name = $row['dog_name']; 
   echo '<option value="'.$id.'">'.$name.'</option>';
 }
 
 echo "</select>";
?>
    
<!-- <h1> Edit dog Post: </h1>
  <br>

<label for="new_dog_name">Update Dog name:</label><br>
  <input type="text" id="new_dog_name" name="new_dog_name"required ><br>
  <label for="new_dog_breed"> Update Dog Breed:</label><br>
  <input type="text" id="new_dog_breed" name="new_dog_breed" required>
  <label for="new_dog_microchipped"> Update Microchipped? (yes or no) :</label><br>
  <input type="text" id="new_dog_microchipped" name="new_dog_microchipped"required ><br>
  <label for="new_dog_weight"> Update Dog Weight:</label><br>
  <input type="text" id="new_dog_weight" name="new_dog_weight"required>
  <label for="new_dog_color">Update Dog Color:</label><br>
  <input type="text" id="dog_color" name="new_dog_color"required ><br>
<label> Only png files </label>
<br>
<input type="file" id="new_dog_img" name="new_dog_img" required>
  <br><br>
  <input type="submit">
</form> -->

    
</body>
</html>