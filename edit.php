<html>
<head>
	<title>Post</title>
</head>

<body>

<form>
<?php
// including the database connection file
include("config.php");
session_start();

if(isset($_POST['Submit']))
{	
    $patient_id = $_POST['patient_id'];

	$pname= $_POST['pname'];
	$reg_no= $_POST['reg_no'];
	$age= $_POST['age'];
	$gender= $_POST['gender'];
	$address= $_POST['address'];
	$disease= $_POST['disease'];
	$d_add= date("Y/m/d");
	$schedule= $_POST['schedule'];
	$bgroup_id= $_POST['Blood'];
	
	
	$height= $_POST['height'];
	$weight= $_POST['weight'];
	
	$operation= $_POST['operation'];
	
	
	//echo "You have selected :".$_POST['pname'];  //  Displaying Selected Value
	//echo "You have selected :".$_POST['ctscan'];
	
	  //echo" i am boss ";
	
		//updating the table
		
		
		$result = mysql_query("UPDATE patient SET name='$pname',reg_no='$reg_no',age='$age',gender_id='$gender',address='$address',disease='$disease',d_add='$d_add',bgroup_id='$bgroup_id',schedule='$schedule',height='$height',weight='$weight',operation='$operation' WHERE patient_id=$patient_id");
		//echo "You have selected :".$_POST['ctscan'];
		//echo" this is shit ";
		
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: show.php");
	}

?>
</form>
</body>
</html>