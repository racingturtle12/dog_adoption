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
     
     $servername = 'localhost';
     $username = 'icsfa2206';
     $password = '5859';
     $database_name = 'icsfa2206';
     $db = mysqli_connect($servername, $username, $password,$database_name);
     if(mysqli_connect_errno()){
echo '<p> Error: Could not get into db. <br/>
please try again</p>';
exit;
     }
$querystring = "SELECT * FROM users";
$stmnt = mysql_query($db, $querystring);
if (mysqli_num_rows($result) > 0) {
while($row = mysql_fetch_assoc($stmnt )) {
   echo "id ". $row['user_id']. "username ". $row['userName']. " passwrof" . $row['password']."email ". $row['user_email']. "<br>";
}
}else{
   echo "0 results";
}




  ?>




</body>
</html>

<!-- while($row = mysql_fetch_array($stmnt)) {
   echo $row['column_name']; // Print a single column data
   echo print_r($row);       // Print the entire row data
} -->
