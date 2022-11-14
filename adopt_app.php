<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="form.css">
<?php include 'shownav.php';
  echo shownav();?> 
</head>
<body>
<br>
<br>
<br>
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
<form>

    <body>
        <div class="container">
          <header class="header">
            <h1 id="title">
              Dog Adoption form
            </h1>
            <p id="note">
              Every family and every dog have different needs. This form will help us to identify what information will be
              helpful for you and for us to find the best dog for you.
            </p>
          </header>
          <form id="adoption-form">
      
      <!-- First Name -->
      <div class="form-item">
        <label for="fname" id="label-two" class="label-item">First name<span class="requred">*</span>:</label>
        <input type="text" required name="fname" class="form-control" placeholder="Enter your first name">
      </div>
       <!-- Last Name -->
       <div class="form-item">
        <label for="lname" id="label-two" class="label-item">Last name<span class="requred">*</span>:</label>
        <input type="text" required name="lname" class="form-control" placeholder="Enter your last name">
      </div>
      <!-- Email -->
      <div class="form-item">
        <label for="email" id="label-three" class="label-item">E-mail<span class="requred">*</span>:</label>
        <input type="email" required name="email" class="form-control" placeholder="Enter your e-mail">
      </div>
      <!-- Address -->
      <div class="form-item">
        <p class="label-item">Address* <span class="clue">(city, zipcode, street, bld., apt.)</span></p>
        <textarea id="address" required name="address" class="input-textarea"
          placeholder="Enter your address here"></textarea>
      </div>
      <!-- Phone -->
      <div class="form-item">
        <label for="phone" id="label-five" class="label-item">Mobile phone:</label>
        <input type="tel" name="phone" id="phone" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
          placeholder="Format: 916-123-4578">
      </div>
    
      <!-- button -->
      <div id="submit-explain">
        <p><strong>By sending this electronically, I acknowledge that I have completely read this questionnaire and comprehend
          it fully.</strong></p>
      </div class="form-group">
      <button type="submit" id="submit" class="submit-button">Submit</button>
    </form>
        </div>
      </body>



</form>



















</body>
</html>