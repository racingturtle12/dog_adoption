<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee add new dog </title>
</head>
<body>
<?php require 'shownav.php';
  echo shownav();?>
  <form class="search" action="action_page.php" method="post">
    <input type="text" placeholder="Search for dog breed, color etc.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>

<form action="new_dog_action.php" method="post" >

<label for="dog_name">Dog name:</label><br>
  <input type="text" id="dogname" name="dog_name" ><br>
  <label for="dog_breed">Dog Breed:</label><br>
  <input type="text" id="dog_breed" name="dog_breed" >
  <label for="dog_microchipped">Microchipped ? :</label><br>
  <input type="text" id="dog_microchipped" name="dog_microchipped" ><br>
  <label for="dog_weight">Dog Weight:</label><br>
  <input type="text" id="dog_weight" name="dog_weight">
  <label for="dog_color">Dog Color:</label><br>
  <input type="text" id="dog_color" name="dog_color" value="John"><br>
<label> Only png files </label>
<br>
<input type="file" id="dog_img" name="dog_img">
  <input type="submit">
  <br><br>
  <label for="shelter_id">Shelter :</label><br>
  <input type="text" id="shelter_id" name="shelter_id">
</form>








  

    
</body>
</html>