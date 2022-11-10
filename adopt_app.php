<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="form.css">
</head>
<body>
    
<?php require 'shownav.php';
  echo shownav();?>
  <form class="search" action="/action_page.php">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>



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
            <!-- Source of info -->
            <div class="form-item">
              <label id="label-one" for="source" class="label-item">How did you hear about "Dog Haven"?</label>
              <input type="text" name="source" class="form-control">
            </div>
            <!-- Name -->
            <div class="form-item">
              <label for="name" id="label-two" class="label-item">Full name<span class="requred">*</span>:</label>
              <input type="text" required name="name" class="form-control" placeholder="Enter your full name">
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
            <!-- Age -->
            <div class="form-item">
              <label for="age" id="laberl-six" class="label-item">Age:</label>
              <input type="text" name="age" class="form-control" placeholder="Enter your age">
            </div>
            <!-- House type -->
            <div class="form-item">
              <label for="house" id="label-seven" class="label-item">Do you live in a:</label>
              <select name="house" id="" class="form-control">
                <option disabled selected value>Select type of the house:</option>
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
                <option value="room">Room</option>
                <option value="studio">Studio</option>
              </select>
            </div>
            <!-- Household type -->
            <div class="form-item">
              <p class="label-item">Select your household setting:</p>
              <label class="radio-label"><input type="radio" name="household-type" class="input-radio"
                  value="rural">Rural</label>
              <label class="radio-label"><input type="radio" name="household-type" class="input-radio"
                  value="suburban">Suburban</label>
              <label class="radio-label"><input type="radio" name="household-type" class="input-radio"
                  value="urban">Urban</label>
            </div>
            <!-- Home activity -->
            <div class="form-item">
              <p class="label-item">Select your home activity:</p>
              <label class="radio-label"><input type="radio" name="home-activity" class="input-radio"
                  value="busy/noisy">Busy/Noisy</label>
              <label class="radio-label"><input type="radio" name="home-activity" class="input-radio"
                  value="moderate comings/goings">Moderate comings/goings</label>
              <label class="radio-label"><input type="radio" name="home-activity" class="input-radio"
                  value="quiet with Occasional Guests">Quiet with occasional guests</label>
            </div>
            <!-- People living with you -->
            <div class="form-item">
              <label class="label-item" for="people">Please list all people living in the household:</label>
              <input type="text" required name="people" class="form-control"
                placeholder="List people living with you (name and age)" size="60">
            </div>
            <!-- dog sex -->
            <div class="form-item">
              <p class="label-item">Do you have a preference in sex of foster?</p>
              <label class="radio-label" class="label-item"><input type="radio" name="dog-sex" class="input-radio"
                  value="male">Male</label>
              <label class="radio-label" class="label-item"><input type="radio" name="dog-sex" class="input-radio"
                  value="female">Female</label>
              <label class="radio-label" class="label-item"><input type="radio" name="dog-sex" class="input-radio"
                  value="no preference">No preference</label>
            </div>
            <!-- dog size -->
            <div class="form-item">
              <p class="label-item">Do you have a size preference of foster?</p>
              <label class="radio-label" class="label-item"><input type="radio" name="dog-size" class="input-radio"
                  value="small">Small</label>
              <label class="radio-label" class="label-item"><input type="radio" name="dog-size" class="input-radio"
                  value="medium">Medium</label>
              <label class="radio-label" class="label-item"><input type="radio" name="dog-size" class="input-radio"
                  value="large">Large</label>
            </div>
            <!-- care with patience -->
            <div class="form-item">
              <p class="label-item">We cannot guarantee a dog to be housebroken, are you equipped to train with love and
                patience?</p>
              <label class="radio-label" class="label-item"><input type="radio" name="care-patience" class="input-radio"
                  value="yes">Yes</label>
              <label class="radio-label" class="label-item"><input type="radio" name="care-patience" class="input-radio"
                  value="no">No</label>
            </div>
            <!-- reason to have a dog -->
            <div class="form-item">
              <p class="label-item">
                What is your reason for wanting to foster a dog?
                <span class="clue">(Check all that apply)</span>
              </p>
              <label><input name="reason" value="housepet" type="checkbox" class="input-checkbox" />Housepet</label>
              <label><input name="reason" value="home patrol" type="checkbox" class="input-checkbox" />Home patrol</label>
              <label><input name="reason" value="companion" type="checkbox" class="input-checkbox" />Companion</label>
              <label><input name="reason" value="companion for dog" type="checkbox" class="input-checkbox" />Companion for
                pet</label>
              <label><input name="reason" value="gift" type="checkbox" class="input-checkbox" />Gift</label>
              <label><input name="reason" value="other" type="checkbox" class="input-checkbox" />Other</label>
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