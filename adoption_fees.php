<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="form.css">
</head>
<body>
<?php include 'shownav.php'; 
  echo shownav();?>
    <form class="search" action="/action_page.php">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
<br>
<h2>Fees Include</h2>
<br>
<ul>
  <li>Health screening and veterinary examination</li>
  <li>Spay/Neuter</li>
  <li>Rabies vaccination (if over 4 months old)</li>
  <li>Distemper combination vaccination</li>
  <li>Flea treatment and preventative</li>
  <li>Deworming for intestinal parasites</li>
  <li>Microchip and registrationn</li>
  <li>Heartworm test (if over 6 months) and preventative medication</li>
  <li>Bordetella vaccination</li>
</ul>  














  </body>
  </html>