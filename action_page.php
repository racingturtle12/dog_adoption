
<?php
$search = $_POST['search'];

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

$sql = "SELECT * FROM dog where dog_breed like '%$search%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo  "<br> Dog name: " . $row["dog_name"]. "<br> Dog Breed:  " . $row["dog_breed"]. "<br> Gender: " . $row["dog_gender"]. "<br> Weight: " . $row["dog_weight"]. 
    "<br> Dog color:  " . $row["dog_color"]. "<br" .'<img src="data:image/jpg;base64,' .base64_encode( $row["dog_img"]).'"/>';
}
} else {
  echo "0 results";
}

mysqli_close($conn);
?>