<?php include_once 'connection.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Testing db </title>
</head>
<body>
<?php

$sql = "SELECT * FROM users;";

$result = mysql_query($con, $sql);

$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0) {
while($row = mysql_fetch_assoc($result)) {
   echo "id ". $row['user_id']. "username ". $row['userName']. " passwrof" . $row['password']."email ". $row['user_email']. "<br>";
}
}




  ?>




</body>
</html>

