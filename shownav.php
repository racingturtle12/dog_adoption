<?php


function shownav() {
    echo '
    <div class="navbar">
    <div>
        <h1 class="logo">Dog haven<span style="color:#359127;"> Web</span> site</h1>
        </div>
  <a href="index.php">Home</a>

  <div class="subnav">
    <button class="subnavbtn">Adopt <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="adopt_app.php">Adopt a Dog</a>
      <a href="adoptable_dogs.php">Adoptable Dogs</a>
      <a href="adoption_agreements.php">Adoption Agreements</a>
      <a href="adoption_fees.php">Adoption Fees</a>
    </div>
  </div> 

  <div class="subnav">
    <button class="subnavbtn">Foster <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="foster_app.php">Dog Foster Application</a>
    </div>
  </div>

    <a href="loginform.php">Login</a>
  </div>';}
    /*   if (isset($_SESSION['email'])) {
        if ($_SESSION['role'] == 'admin') {
          echo '<a href="administration.php">Administration</a>';
        }
        echo '<a href="registration_form.php" id="register">Register Now</a>';
      }
       echo '</div>';

} */

?>

