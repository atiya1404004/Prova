<!DOCTYPE html>
<html>
<title>equipments</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">

<style>
.w3-bar-block .w3-bar-item {padding:20px}
</style>

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

<!-- Navigation -->
<nav class="w3-bar w3-black">
 <h3> <a href="home.php" class="w3-button w3-bar-item">Home</a></h3>
 <h3><a href="show.php" class="w3-button w3-bar-item">Patient</a></h3>
 <h3> <a href="about.php" class="w3-button w3-bar-item">Doctor</a></h3>
 <h3> <a href="equip.php" class="w3-button w3-bar-item">Equipments</a></h3>
  <h3><a href="contact.php" class="w3-button w3-bar-item">Contact</a></h3>
  <h3> <a href="logout.php" class="w3-button w3-bar-item">Log Out</a></h3>
</nav>
</div>
<div class="header w3-center w3-padding-16">
<h1>EQIPMENT INFORMATION</h1>
</div>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
 <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="img/short.jpg" alt="Sandwich" width="200" height="200">
      <h3>SHORTWAVE DIATHERMY MACHINE</h3>
      <p>In Shortwave Diathermy heat generated from high frequency waves is used for giving relief to the patient. Short wave Diathermy is effective in Inflammation of Cervical Spondylosis, Sholder Joint, Elbow Joint, Osteoarthritis, Low Back Ache, Ligament Sprains in Knee Joints, Heel Pain, Sinusitis etc.</p>
    </div>
    <div class="w3-quarter">
      <img src="img/ULTRASONIC.PNG" alt="Steak" width="200" height="200">
      <h3>ULTRASONIC PHYSIOTHERAPY MACHINE</h3>
      <p>Ultrasonic waves are useful for treatment of Inflammation of Elbow Joint (Tennis Elbow), Plantar Fascitis (Heel Pain), Shortening of Muscle or Ligament, Inflammation of tendons (Suprasspinatus tendnitis), Ligament Sprain (Lateral Ligament Sprain of Ankle), Unhealed Scars etc..</p>
    </div>
    <div class="w3-quarter">
      <img src="img/traction_unit_indotrac_.jpg" alt="Cherries" width="200" height="200">
      <h3>CERVICAL CUM LUMBER TRACTION MACHINE</h3>
      <p>cervical spinal traction can relieve muscle spasm and nerve root compression by streching soft tissues and increasing the spaces between cervical vertebrae. Lumber traction increases the space between vertebrae - reducing pressure on intervertebral discs and nerve root..</p>

    </div>
    <div class="w3-quarter">
      <img src="img/INTERFERENTIAL.PNG" alt="Pasta and Wine" width="200" height="200">
      <h3>INTERFERENTIAL THERAPY MACHINE</h3>
      <p>Interferntial Stimulation is used for Symptomatic relief and management of post surgical & post traumatic acute & chronic pain. Interferential therapy commonly used in Cumulative Trauma Disorders, Pre and Post Orthopedic Surgery, Joint Injury Syndrome, Increasing Circulation & Pain Control of Various Origins.</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="img/TEST UNIT.PNG" alt="Popsicle" width="200" height="200">
      <h3>TEST UNIT MACHINE</h3>
      <p>Relieves pain very effectively in Arthritis, Neuralgia, Migraine, Spinal Disc, Surgical Trauma, Headache, Sciatica etc.
</p>
    </div>
    <div class="w3-quarter">
      <img src="img/MUSCLE STIMULATOR.PNG" alt="Salmon" width="200" height="200">
      <h3>MUSCLE STIMULATOR MACHINE</h3>
      <p>This kind of physiotherapy treatment involves use of low frequency current. Electrical stimulation is used to activate and train a muscle, which has lost its action or in training a muscle which has lost or 'forgotten' its action after an injury.</p>
    </div>
    <div class="w3-quarter">
      <img src="img/CONTINUOUS PASSIVE MOTION.PNG" alt="Sandwich" width="200" height="200">
      <h3>CONTINUOUS PASSIVE MOTION</h3>
      <p>Continuous Passive Motion Therapy immediately used after surgery can give several important benefits to patient like maintenance or improvement in the range of motion reduction in pain and discomfort.
</p>
    </div>
    <div class="w3-quarter">
      <img src="img/TRACTION TABLE.PNG" alt="Croissant" width="200" height="200">
      <h3>TRACTION TABLE MACHINE</h3>
      <p>Fixed Height 4 section Traction Table for horizontal Cervical & Lumbar Traction Treatment.</p>
    </div>
  </div>



<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
--> 

</body>
</html>

