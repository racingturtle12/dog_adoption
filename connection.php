
     <?php
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

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["user_id"]. " - Username: " . $row["userName"]. "Password " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>