<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee add new dog </title>
    <?php include 'admin_nav.php';
  echo show_admin_nav();?> 
</head>
<body>
<br>
<br>
<br>
<br>

<br>
  <form class="search" action="action_page.php"  method="post">
    <input type="text" placeholder="Search for dog breed" name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <br>
  <h1> Add new dog: </h1>
  <br>
<form id="adoption-form" action="new_dog_action.php" method="post" >

<label for="dog_name">Dog name:</label><br>
  <input type="text" id="dogname" name="dog_name" ><br>
  <label for="dog_breed">Dog Breed:</label><br>
  <input type="text" id="dog_breed" name="dog_breed" >
  <label for="dog_weight">Dog Weight:</label><br>
  <input type="text" id="dog_weight" name="dog_weight">
  <label for="dog_color">Dog Color:</label><br>
  <input type="text" id="dog_color" name="dog_color" ><br>
  <label for="dog_gender">Dog Gender:</label><br>
  <input type="text" id="dog_gender" name="dog_gender" ><br>
<label> Only png files </label>
<br>
<input type="file" id="dog_img" name="dog_img">
  <br><br>
  <label for="shelter_id">Shelter :</label><br>
  <input type="text" id="shelter_id" name="shelter_id">
  <br>
  <br>
  <input type="submit">
</form>








  

    
</body>
</html>
