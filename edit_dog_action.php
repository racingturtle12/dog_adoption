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

$dog_id= $_POST['dog_id'];
$dog_name = $_POST['new_dog_name'];

$dog_breed = $_POST['new_dog_breed'];

$dog_gender = $_POST['new_dog_gender'];

$dog_weight = $_POST['new_dog_weight'];

$dog_color = $_POST['new_dog_color'];
$dog_img = $_POST['new_dog_img'];
$shelter_id  $_POST['new_shelter_id'];

$sql = "UPDATE dog SET dog_name= '$dog_name, dog_breed='$dog_breed',
 dog_gender='$dog_gender', dog_weight='$dog_weight', dog_color='$dog_color' , 
 dog_img='$dog_img' WHERE dog_id ='$id'";

$run = mysqli_query($conn, $sql) or die (mysqli_error());
}

if($run){

echo "Update was successful";

} else{

echo "Update was no good ";

}



else{

echo " All fields required";

}
?>




























