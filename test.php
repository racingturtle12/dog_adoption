<?php include 'connection.php'; ?>

<?php
     
$sql = "SELECT * FROM users";

$result = $con->query($sql);

$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0) {
while($row = mysql_fetch_assoc($result)) {
   echo "id ". $row['user_id']. "username ". $row['userName']. " password" . $row['password']."email ". $row['user_email']. "<br>";
}
}




 ?>


