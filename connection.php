<?php session_start();?>
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
  <form id="adoption-form" action="edit_user.php"  method="POST">
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
  <label for="age1">Admin</label>
  <input type="radio" id="age1" name="user_type" value="admin">
 <br>
 <label for="age2">User</label>
  <input type="radio" id="age2" name="user_type" value="user">
<br>  






  <input type="submit">
</form>

</body>
</html>