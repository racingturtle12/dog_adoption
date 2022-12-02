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
    <h1> Edit dog Post: </h1>
    <br>
<?php

$link = mysqli_connect("localhost","ics325fa2206","5859","ics325fa2206");

$sql = "SELECT * FROM dog;";

$result = mysqli_query($link,$sql);
if ($result != 0) {
    echo '<label>Select Dog you wish to edit:';
    echo '<select name="dog_id">';
    echo '<option value="">all</option>';

    $num_results = mysqli_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysqli_fetch_array($result);
        $id = $row ['dog_id'];
        $name = $row ['dog_name'];
        $dog_breed =$row ['dog_breed'];
        echo '<option value="' .$id. '">' .$name." --Breed: ". $dog_breed. '</option>';
    }

    echo '</select>';
    echo '</label>';
}

mysqli_close($link);

?>
    

  <br>

 <label for="new_dog_name">Update Dog name:</label><br>
  <input type="text" id="new_dog_name" name="new_dog_name"required ><br>
  <label for="new_dog_breed"> Update Dog Breed:</label><br>
  <input type="text" id="new_dog_breed" name="new_dog_breed" required>
  <label for="new_dog_gender"> Update Gender:</label><br>
  <input type="text" id="new_dog_gender" name="new_dog_gender"required ><br>
  <label for="new_dog_weight"> Update Dog Weight:</label><br>
  <input type="text" id="new_dog_weight" name="new_dog_weight"required>
  <label for="new_dog_color">Update Dog Color:</label><br>
  <input type="text" id="dog_color" name="new_dog_color"required ><br>
<label> Only jpg files </label>
<br>
<input type="file" id="new_dog_img" name="new_dog_img" required>
  <br><br>
  <input type="submit"> 
</form> 

    
</body>
</html>