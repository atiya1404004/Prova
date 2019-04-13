<!DOCTYPE html>
<html lang="en">
<head>
<title>Doctors</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
 /*background-color: #f1f1f1;*/
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
img {
  border-radius: 50%;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
</style>
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

<div class="topnav w3-bar">
  <h2><a href="home.php">Home</a></h2>
  <h2><a href="show.php" class="w3-button w3-bar-item">Patient</a></h2>
 <h2> <a href="about.php" class="w3-button w3-bar-item">Doctor</a></h2>
 <h2> <a href="equip.php" class="w3-button w3-bar-item">Equipments</a></h2>
  <h2><a href="contact.php" class="w3-button w3-bar-item">Contact</a></h2>
  <h2><a href="logout.php">Logout</a></h2>
</div>
<br>
<div class="header">
<h1>Meet Our Experts</h1>
</div>
<br>

<div class="row">
  <div class="column">
    <img src="sim.jpg" alt="Paris" width="300" height="300">
    <h2>Ln. Dr. Simson Kalyan Baroi</h2>
    <h3>Consultant Physiotherapist & Project Director</h3>
    <p> PT (CMC, Vellore), SBEPT (Madras,U.),</p>
    <p> MCP ( Jadavpur, U.), MDT.(Mangalore),</p>
    <p> MPP (PPWC,Dhaka),WCPT (Recognized Physiotherapist,</p>
    <p>World Confederation for Physical Therapist)</p>
  </div>
  
  <div class="column">
    <img src="tanim.jpg" alt="Paris" width="300" height="300">
    <h2>Tanim Ahmed Noor</h2>
    <p>BSPT (DU), MPH (SUB)</p>
    <p>Coordinator</p>
  </div>
  
  <div class="column">
    <img src="bak.jpg" alt="Paris" width="300" height="300">
    <h2>Dr. Hossain Mohammad Baker</h2>
    <p>BSPT (DU), MPH (SUB)</p>
    <p>Physiotherapist</p>
  </div>
</div>

</body>
</html>
