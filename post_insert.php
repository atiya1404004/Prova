<html>
<head>

<link rel="stylesheet" href="post.css">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="w3.css">
<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	 
	<title>Add Patient</title>
   <link rel="stylesheet" href="post_insert.css">
</head>
<style>
.ab{
	width:800px;
	height:auto;
	margin:0 auto;
	padding-left:80px;
	border-radius: 100px;
	-webkit-border-radius:15px;
	font-size:17px;
	font-weight:bolder;

}
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

<div id="nav_wrapper"><br>
   <ul>
  <li><a href='show.php'>Go Back</a></li>
  <li><a href='home.php'>Home</a></li>
  <li><a href ="logout.php">Logout</a></li>
  </ul>
  </div>
  <div class="ab">
<section class="a w3-container w3-padding-64">
<form  action="post.php" method="post" enctype="multipart/form-data" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="pname" required></td>
			</tr>
			<tr> 
				<td>Registration no: </td>
				<td><input type="text" name="reg_no" id="reg"  ></td>
				<td> <span id = "reg_status"> </span></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Gender</td>
				<td><input type="radio" name="gender" value="1"> Male<br>
					<input type="radio" name="gender" value="2"> Female<br>
				</td>
			</tr>
			<tr> 
				<td>Address</td>
				<td> <textarea name="address" rows="5" cols="30"> </textarea></td>
			</tr>
			<tr> 
				<td>Disease</td>
				<td> <textarea name="disease" rows="5" cols="30"> </textarea></td>
			</tr>
			
			<tr>
				<td> Date of admission: </td>
				<td> <input type="text" name="d_add" id="date1" alt="date" class="IP_calendar" title="Y-m-d"> </td>
			</tr>
			<tr>
				<td> Schedule: </td>
				 <td>
				 <select name="schedule" id="schedule">
					<option value="1">9am-10am</option>
					<option value="2">10am-11am</option>
					<option value="3">4pm-5pm</option>
					<option value="4">5pm-6pm</option>
					<option value="5">6pm-7pm</option>
					<option value="6">7pm-8pm</option>
					<option value="7">8pm-9pm</option>
					<option value="0">9pm-10pm</option>
				</select> </td>
				<td> <span id = "schedule_status"> </span></td>
			</tr>
			<tr>
				<td> Blood group: </td>
				 <td>
				 <select name="Blood">
					<option value="1">A+</option>
					<option value="2">A-</option>
					<option value="3">B+</option>
					<option value="4">B-</option>
					<option value="5">AB+</option>
					<option value="6">AB-</option>
					<option value="7">O+</option>
					<option value="8">O-</option>
				</select> </td>
			</tr>
			<tr> 
				<td>Height: </td>
				<td><input type="text" name="height"></td>
			</tr>
			<tr> 
				<td>Weight: </td>
				<td><input type="text" name="weight"></td>
			</tr>
			<tr> 
				<td>Any Operation: </td>
				<td><input type="radio" name="Operation" value="1"> Yes
					<input type="radio" name="Operation" value="0"> No<br>
				</td>
			</tr>

			<tr> 
				<td></td>
				<td>
				<input type="submit" name="Submit" value="Add" onclick="return valid()">
				<div id="result"></div>
				
				</td>
				
			</tr>
			</table>
	</form>
</section>
</div>
</body>
<?php
$_POST['name']="fd";
?>


<script type='text/javascript'>
var retVal = null; 

function ajaxCallBack(retString){
    retVal = retString;
	
}
	  function valid()
	  {

		  
		  var txt=document.getElementById( "reg" ).value;
		


	
		  if(txt != '')
		  {
			  $.ajax({
				  
				  url:"reg.php",
				  method:"post",
				  data:{reg:txt},
				  dataType:"text",
				  async: false,
				  success:function(data)
				  {
					 ajaxCallBack(data);
					  
				  }
			  });
			
			    if(retVal=="invalid")
					  {
						  alert("This Registration number is allready taken")
						  return false;
					  }
			  
		  }
		  
	  }

var retVal = null; 

function ajaxCallBack(retString){
    retVal = retString;
	
}
	  function valid()
	  {

		  
		  var txt=document.getElementById( "schedule" ).value;
		


	
		  if(txt != '')
		  {
			  $.ajax({
				  
				  url:"schedule.php",
				  method:"post",
				  data:{schedule:txt},
				  dataType:"text",
				  async: false,
				  success:function(data)
				  {
					 ajaxCallBack(data);
					  
				  }
			  });
			
			    if(retVal=="invalid")
					  {
						  alert("This Schedule is already used")
						  return false;
					  }
			  
		  }
		  
	  }


</script>
</html>