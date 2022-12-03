<!-- same as the add  new dog page only difference is that edit will have and dog_id which will determine what dog neeeds to be edited  -->
<?php 
$id = $_POST['dog_id'];

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

if($_SERVER["REQUEST_METHOD"] == "POST"){

$dog_id= $_POST['dog_id'];
$dog_name = $_POST['new_dog_name'];

$dog_breed = $_POST['new_dog_breed'];

$dog_micro = $_POST['new_dog_microchipped'];

$dog_weight = $_POST['new_dog_weight'];

$dog_color = $_POST['new_dog_color'];
$dog_img = $_POST['new_dog_img'];

$sql = "UPDATE dog SET dog_name='$dog_name', dog_breed='$dog_breed', dog_microchipped='$dog_micro', dog_weight='$dog_weight', dog_color='$dog_color' , dog_img='$dog_img' WHERE dog_id =$id";

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




























