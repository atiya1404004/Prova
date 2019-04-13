<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
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
 <h3> <a href="home.php" class="w3-button w3-bar-item">Home</a></h3>
 <h3><a href="show.php" class="w3-button w3-bar-item">Patient</a></h3>
 <h3> <a href="about.php" class="w3-button w3-bar-item">Doctor</a></h3>
 <h3> <a href="equip.php" class="w3-button w3-bar-item">Equipments</a></h3>
  <h3><a href="contact.php" class="w3-button w3-bar-item">Contact</a></h3>
  <h3> <a href="logout.php" class="w3-button w3-bar-item">Log Out</a></h3>
</nav>

<section class="w3-container w3-padding-64 w3-center w3-white>
<article class="w3-third">
    <h3>Special Thanks To</h3>
    <img src="sir.PNG" alt="Random Name" style="width:10%">
    <p>Name :   Mir Md. Saki Kowsar</p>
    <p>Designation :  Asst. Professor</p>
    <p>Department :   Department of Computer Science & Engineering</p>
    <P>Qualification :  B.Sc. in EEE (CUET), Pursuing M.Sc. in CSE </P>
    <P>E-mail :   sakikowsar@cuet.ac.bd</P>
  </article>
</section>
<!-- Footer -->
<section class="w3-container w3-padding-64 w3-center w3-blue-grey">
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
</section>

 
</body>
</html>


