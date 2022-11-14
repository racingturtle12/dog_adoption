<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="form.css">
</head>
<body>
<?php require 'shownav.php';
  echo shownav();?>

  <form class="search" action="action_page.php" method="post">
    <input type="text" placeholder="Search for dog breed" name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <?php
$servername = "localhost";
$username = "ics325fa2202";
$password = "6666";
$dbname = "ics325fa2202";

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
    echo "id: " . $row["dog_id"]. "<br> Dog name: " . $row["dog_name"]. "<br> Dog Breed:  " . $row["dog_breed"]. "<br> MIcrochipped: " . $row["dog_microchipped"]. "<br> Weight: " . $row["dog_weight"]. "<br> Dog color:  " . $row["dog_color"]. "<br> 
    Picture: " . $row["dog_img"]. "<br> Dog Shelter: " . $row["shelter_id"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>









  </body>
  </html>