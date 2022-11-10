<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'icsfa2206';
         $dbpass = 'ukny';
         $dbname = 'dog_db';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
         
         if($mysqli→connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli→connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
         $mysqli→close();
      ?>
   </body>
</html>