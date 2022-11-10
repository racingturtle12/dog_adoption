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
     
     $dbhost = 'localhost';
     $dbuser = 'icsfa2206';
     $dbpass = '5859';
     $dbname = 'icsfa2206';
     $con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
     
     if($mysqli_connect_errno) {
        printf("Connect failed: %s<br />", $mysqli_connect_error);
        exit();
     }
     $sql = "SELECT * FROM users";
     $result = mysqli_query($con,$sql);
   printf($result);
     $mysqli→close();
     
  ?>




</body>
</html>

