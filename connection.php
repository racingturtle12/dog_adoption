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
    <title>Edit user</title>
    <?php include 'admin_nav.php';
  echo show_admin_nav();?> 
</head>
<br>
<br>
<body>
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
  <form id="adoption-form" action="edit_user_action.php"  method="POST">
    <br>
<?php

$link = mysqli_connect("localhost","ics325fa2206","5859","ics325fa2206");

$sql = "SELECT * FROM users;";

$result = mysqli_query($link,$sql);
if ($result != 0) {
    echo '<label>Select Name you wish to edit:';
    echo '<select name="user_id">';
    echo '<option value="">all</option>';

    $num_results = mysqli_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysqli_fetch_array($result);
        $id = $row ['user_id'];
        $name = $row ['username'];
        echo '<option value="' .$id. '">' .$name. '</option>';
    }

    echo '</select>';
    echo '</label>';
}

mysqli_close($link);

?>
  <h3>Please select authorization:</h3>
  <label for="age1" class="radio-inline">
  <input type="radio" id="age1" name="user_type" value="admin"> Admin
  </label>
  <br>
 <label for="age2" class="radio-inline">
  <input type="radio" id="age2" name="user_type" value="user">User
  </label>
  <br>  
  
  <label> <strong> Change Username?</strong></label>
        <input type="text" name="username" />
  <br>
  <br>
  
        <label> <strong> Change Password?</strong></label>
        <input type="text" name="password" />




  <input type="submit">
</form>

</body>
</html>