<?php
session_start();
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

if($_SERVER["REQUEST_METHOD"] == "POST"){

$dog_name = $_POST['dog_name'];
$dog_breed = $_POST['dog_breed'];
$dog_weight = $_POST['dog_weight'];
$dog_color= $_POST['dog_color'];
$dog_gender = $_POST['dog_gender'];
$filename = $_POST['dog_img'];
$id = $_POST['shelter_id'];
                   
$sql = "INSERT INTO dog (dog_id,dog_name,dog_breed,dog_weight,dog_color,dog_gender,dog_img, shelter_id) VALUES 
(NULL,'$dog_name', '$dog_breed', '$dog_weight', '$dog_color', '$dog_gender', '$filename','$id')";

$run = mysqli_query($conn, $sql) or die (mysqli_error());

if($run){
 
echo "New Dog successfully Inserted: "; 
echo"<br>";
echo "Dog name:  " . $dog_name;
echo"<br>";
echo"<br>";
echo "Dog Breed:  " . $dog_breed;
echo"<br>";
echo"<br>";
echo "Dog Weight:  " . $dog_weight;
echo"<br>";
echo"<br>";
echo "Dog Color:  " . $dog_color;
echo"<br>";
echo"<br>";
echo "Dog Gender:  " . $dog_gender;
echo"<br>";




} else{

echo "New dog was NOT insteretd ";

}

}






?>