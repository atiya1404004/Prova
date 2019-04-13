
<html>
<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" href="post.css">
	<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="w3.css">
	<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
	
</head>

<style>
.ab{
	width:800px;
	height:auto;
	margin:0 auto;
	margin-top: 30px;
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
<body>
<div class ="a ab">
	
	<form name="form1" method="post" enctype="multipart/form-data" action="edit.php">
		<table border="1">
	   
	   <tbody>
	      <?php  
		   include("config.php");
		   $patient_id=$_GET['id'];
		   
		   $query=mysql_query("SELECT * FROM patient WHERE patient_id='$patient_id'");
		   
		   $male_status = 'unchecked';
		   $female_status = 'unchecked';
		   $true_operation='unchecked';
		   $false_operation='unchecked';
	
		   
		  while($row=mysql_fetch_object($query))
		  {   //gender
			  if ($row->gender_id == 1) 
			  {
				$male_status = 'checked';

			  }
			  else if ($row->gender_id == 2) 
				{
					$female_status = 'checked';
	
				}
					//re_op
				if($row->operation == 1)
					{
						$true_operation = 'checked';
					}
				else if($row->operation == 0)
					{
						$false_operation = 'checked';
					}
				
			
			  ?>
			    <tr>
				  <td>Name : </td> 
				  <td colspan="2" ><input type="text" name="pname" value=<?php echo $row->name?>></td>
				</tr>
				<tr>
				  <td>Registration no : </td> 
				  <td colspan="2"><input type="text" name="reg_no" value=<?php echo $row->reg_no?>></td>
				</tr>
				<tr>
				  <td >Age : </td> 
				  <td colspan="2" ><input type="text" name="age" value=<?php echo $row->age?>></td>
				</tr>
				<tr>
				  <td>Gender : </td> 
				  <td colspan="2" ><input type="radio" name="gender" value="1" <?PHP print $male_status; ?>> Male<br>
					  <input type="radio" name="gender" value="2" <?PHP print $female_status; ?>> FeMale<br>
				  </td>
				</tr>
				<tr>
				  <td>Address : </td> 
				  <td colspan="2" ><input type="text" name="address" value=<?php echo $row->address?>></td>
				</tr>
				<tr>
				  <td>Disease : </td> 
				  <td colspan="2" ><input type="text" name="disease" value=<?php echo $row->disease?>></td>
				</tr>
				<tr>
				  <td>Date of Admission: </td> 
				  <td colspan="2" ><input type="text" name="d_add" id="date1" alt="date" class="IP_calendar" title="Y-m-d" value=<?php echo $row->d_add?>></td>
				</tr>
				<tr>
				  <td>Schedule: </td> 
				   <td colspan="2" >
				 <select name="schedule">
					<option value="1">9am-10am</option>
					<option value="2">10am-11am</option>
					<option value="3">4pm-5pm</option>
					<option value="4">5pm-6pm</option>
					<option value="5">6pm-7pm</option>
					<option value="6">7pm-8pm</option>
					<option value="7">8pm-9pm</option>
					<option value="0">9pm-10pm</option>
				</select> </td>
				</tr>
				<tr>
				  <td>Blood Group: </td> 
				   <td colspan="2" >
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
				
				
				  <td>Height : </td> 
				  <td colspan="2" ><input type="text" name="height" value=<?php echo $row->height?>></td>
				</tr>
				<tr>
				  <td>Weight : </td> 
				  <td colspan="2" ><input type="text" name="weight" value=<?php echo $row->weight?>></td>
				</tr>
				<tr>
				  <td>Any Operation : </td> 
				  <td colspan="2" >
					<input type="radio" name="re_op" value="1" <?PHP print $true_operation; ?>> Yes
					<input type="radio" name="re_op" value="0" <?PHP print $false_operation; ?>> No<br>
				  </td>
				</tr>
				
				<tr>
					<td><input type="hidden" name="patient_id" value=<?php echo $_GET['id'];?>></td>
					<td><input type="submit" name="Submit" value="Add"  onClick="return confirm('Are you sure you want to Edit?')"></td>
				</tr>
			  
			  <?php
			  
		  }
		   
		  
		  ?>
	   
	   
	   
	   </tbody>
	</table>
			
	
	</form>
</body>
</html>

