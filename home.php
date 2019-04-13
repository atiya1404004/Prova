<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="min.css">
</head>
<?php
session_start();

if(!isset($_SESSION["username"]))
{
  header("location:index.php");
}

if(isset($_POST["logout"]))
{
  header("location:logout.php");
}
$_POST['name']="fd";
?>
<body>
<style>
.responsive {
  width: 100%;
  height: auto;
}

</style>
<!-- Navigation -->
<nav class="w3-bar w3-black">
 <h3> <a href="#home" class="w3-button w3-bar-item">Home</a></h3>
  <h3><a href="show.php" class="w3-button w3-bar-item">Patient</a></h3>
 <h3> <a href="about.php" class="w3-button w3-bar-item">Doctor</a></h3>
 <h3> <a href="equip.php" class="w3-button w3-bar-item">Equipments</a></h3>
  <h3><a href="contact.php" class="w3-button w3-bar-item">Contact</a></h3>
  <h3> <a href="logout.php" class="w3-button w3-bar-item">Log Out</a></h3>
</nav>

<!-- Slide Show -->
<section>
  <img class="mySlides" src="center.JPG" class="responsive" width="500" height="500"
  style="width:100%">
  <img class="mySlides" src="thera.jpg" class="responsive" width="500" height="500"
  style="width:100%">
  <img class="mySlides" src="fracture.jpg" class="responsive" width="500" height="500"
  style="width:100%">
</section>
<h2 class="w3-wide w3-center">PHYSIOTHERAPY AND PARALYSED WELFARE CENTRE</h2>
<!-- Band Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  
  <p class="w3-opacity"><i>Help Disabled to Help Themselves</i></p>
  <p class="w3-justify">The ‘ PHYSIOTHERAPY AND PARALYSED WELFARE CENTRE ’ (PPWC) is established in the year of 1981 mainly for the treatment and rehabilitation of the Handicapped, Crippled and Disabled people coming from all areas of Bangladesh.This organization has adopted the scheme to facilitate Treatment and Rehabilitation program to the poor, deprived, neglected, frustrated disabled, crippled and handicapped people and whoever may in need of Physiotherapy in the society. It would be a noble project through where they might have a better way to restore their shattered confidence and  lead themselves in a rightful place in the society.</p>
  <h2 class="w3-wide">Our Health Services</h2>
</section>

<!-- Band Members -->

<section class="w3-row-padding w3-center w3-light-grey">
  <article class="w3-third">
    
    <img src="rehab.png" alt="Random Name" style="width:50%">
    <p>REHABILITATION CENTER</p>
  </article>
  <article class="w3-third">
    
    <img src="medicine.png" alt="Random Name" style="width:50%">
    <p>MEDICINE RESEARCH</p>
  </article>
  <article class="w3-third">
    
    <img src="counsiling.png" alt="Random Name" style="width:50%">
    <p>MEDICAL COUNSELING</p>
  </article>
</section>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-blue-grey">
  <article class="w3-third">
    <h3>Developer Information</h3>
    <img src="prova1.jpg" alt="Random Name" style="width:50%">
    <p>Atiya Masuda Siddika</p>
    <p>ID : 1404004</p>
    <p>CSE,CUET</p>
  </article>
  <article>
  <h3>Contact Information</h3>
  <p>PHYSIOTHERAPY AND PARALYSED WELFARE CENTRE (PPWC)</p>
  <p>46,WEST  TEJTURI BAZAR,</p>
  <p>TEJGAON, DHAKA-1215,</p>
  <p>BANGLADESH.</p>
  <p>Mobile :-01711808464 / 01534272529</p>
</article>
 
</footer>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>

