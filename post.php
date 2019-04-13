<html>
<head>
	<title>Post</title>
</head>

<body>

<form>
<?php
//including the database connection file
include_once("config.php");
session_start();
error_reporting(  E_WARNING );
if(isset($_POST['Submit'])) 
{
	$pname= $_POST['pname'];
	
	$reg_no= $_POST['reg_no'];
	$age= $_POST['age'];
	$gender= $_POST['gender'];
	$address= $_POST['address'];
	$disease= $_POST['disease'];
	$d_add= $_POST['d_add'];
	$schedule= $_POST['schedule'];
	$bgroup_id= $_POST['Blood'];
	$height= $_POST['height'];
	$weight= $_POST['weight'];
	$operation= $_POST['operation'];
	
	
	
	
	
	//echo "You have selected :".$_POST['predia_pop'];  //  Displaying Selected Value
	//echo "You have selected :".$_POST['powi'];  //  Displaying Selected Value
	
	
//echo var_dump($_POST);	


	// checking empty fields
	
/*if(empty($pname) ||empty($reg_no) ||empty($age)||empty($gender)||empty($address)||empty($d_add)||empty($d_op)||empty($d_dis)||empty($diagnosis)||empty($bgroup_id)||empty($echo)||empty($cxr) ||empty($ctscan)||empty($op_findings)||empty($bsa)||empty($height)||empty($weight)||empty($lvef)||empty($re_vsd)||empty($pop_renal)||empty($predia_pop)||empty($powi) ||empty($duration_o_s)||empty($st_in_pop)||empty($st_in_icu)||empty($re_explo)||empty($re_op)||empty($use_tca)||empty($use_actegrade)||empty($duration_o_ven)||empty($dsc)||empty($rlnp) ||empty($pnp)||empty($stroke)||empty($paraplegia)||empty($hemo)||empty($st_i_hos)||empty($ecct)||empty($xct)||empty($mort)||empty($date)) 
	{
	
		if(empty($pname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($reg_no)) {
			echo "<font color='red'>Registration Number field is empty.</font><br/>";
		}
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		if(empty($gender)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
		}
			if(empty($address)) {
			echo "<font color='red'>Addrees is empty.</font><br/>";
		}
		if(empty($d_add)) {
			echo "<font color='red'>Date of Admission field is empty.</font><br/>";
		}		
		if(empty($d_op)) {
			echo "<font color='red'>Date of Operation field is empty.</font><br/>";
		}
		if(empty($d_dis)) {
			echo "<font color='red'>Date of Discharge field is empty.</font><br/>";
		}		
		if(empty($diagnosis)) {
			echo "<font color='red'>Diagnosis field is empty.</font><br/>";
		}
		if(empty($bgroup_id)) {
			echo "<font color='red'>Blood Group field is empty.</font><br/>";
		}		
		if(empty($echo)) {
			echo "<font color='red'>Echocardiogram  field is empty.</font><br/>";
		}
		if(empty($cxr)) {
			echo "<font color='red'>CXR field is empty.</font><br/>";
		}
		if(empty($ctscan)) {
			echo "<font color='red'>Ctscan field is empty.</font><br/>";
		}
		if(empty($op_findings)) {
			echo "<font color='red'>Operation Findings field is empty.</font><br/>";
		}
			if(empty($bsa)) {
			echo "<font color='red'>BSA field is empty.</font><br/>";
		}
		if(empty($height)) {
			echo "<font color='red'>height field is empty.</font><br/>";
		}		
		if(empty($weight)) {
			echo "<font color='red'>weight field is empty.</font><br/>";
		}
		if(empty($lvef)) {
			echo "<font color='red'>lvef field is empty.</font><br/>";
		}		
		if(empty($re_vsd)) {
			echo "<font color='red'>Residual VSD field is empty.</font><br/>";
		}
		if(empty($pop_renal)) {
			echo "<font color='red'>Post op Renal Impairment field is empty.</font><br/>";
		}		
		if(empty($predia_pop)) {
			echo "<font color='red'>Peritoneal Dialysis in post op period field is empty.</font><br/>";
		}
		if(empty($powi)) {
			echo "<font color='red'>Post operative wound infection field is empty.</font><br/>";
		}
		if(empty($duration_o_s)) {
			echo "<font color='red'>Duration of surgery field is empty.</font><br/>";
		}
		if(empty($st_in_pop)) {
			echo "<font color='red'>Stay in post operative ward field is empty.</font><br/>";
		}
			if(empty($st_in_icu)) {
			echo "<font color='red'>Stay in icu field is empty.</font><br/>";
		}
		if(empty($re_explo)) {
			echo "<font color='red'>Re-Exploration field is empty.</font><br/>";
		}		
		if(empty($re_op)) {
			echo "<font color='red'>re- Operation is empty.</font><br/>";
		}
		if(empty($use_tca)) {
			echo "<font color='red'>Use of TCA field is empty.</font><br/>";
		}		
		if(empty($use_actegrade)) {
			echo "<font color='red'>Use of Antegrade Cerebral Circulation field is empty.</font><br/>";
		}
		if(empty($duration_o_ven)) {
			echo "<font color='red'>Duration of ventelation field is empty.</font><br/>";
		}		
		if(empty($dsc)) {
			echo "<font color='red'>Delayed Sternal Clouser field is empty.</font><br/>";
		}
		if(empty($rlnp)) {
			echo "<font color='red'>REC Laryngeal Nerve palsy field is empty.</font><br/>";
		}
		if(empty($pnp)) {
			echo "<font color='red'>Phrenic nerve palsy field is empty.</font><br/>";
		}
		if(empty($stroke)) {
			echo "<font color='red'>Stroke field is empty.</font><br/>";
		}
			if(empty($paraplegia)) {
			echo "<font color='red'>paraplegia field is empty.</font><br/>";
		}
		if(empty($hemo)) {
			echo "<font color='red'>Hemorrhage field is empty.</font><br/>";
		}		
		if(empty($st_i_hos)) {
			echo "<font color='red'>Stay in Hospital field is empty.</font><br/>";
		}
		if(empty($ecct)) {
			echo "<font color='red'>ECCT field is empty.</font><br/>";
		}		
		if(empty($xct)) {
			echo "<font color='red'>XCT field is empty.</font><br/>";
		}
		if(empty($mort)) {
			echo "<font color='red'>Mortality field is empty.</font><br/>";
		}		
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	else 
	
		{*/
		//echo "<font color='green'>Your Post has been added successfully.";
		// if all the fields are filled (not empty) 
		$doctors_id= $_SESSION['doctors_id'];	
		//echo "doctors id".$_SESSION['doctors_id'];
		
		
		
		//insert data to database
	
				$result= mysql_query("INSERT INTO patient( doctors_id,name,reg_no,age,gender_id,address,disease,d_add,schedule,bgroup_id,height,weight,operation) VALUES('$doctors_id','$pname','$reg_no','$age','$gender','$address','$disease','$d_add','$schedule','$bgroup_id','$height','$weight','$opeartion')");
				$patient_id= mysql_insert_id();
		

		
			/*$open=fopen("patientinfo.txt",'a+');
			
			IF(fwrite($open,$content))
			{
				echo "ADDING SUCCESSFUL <br>";
				echo"<a href='index.php'>See your post";
			}
			ELSE
			{
				echo "CAN NOT ADD";
			}
			if($uploadfile && $query)
			{
				echo "BOOK ADDED SUCCESSFULLY<br>";
			}
			else
			{
				echo "ERROR OCCURED";
			}
		
		/*else
			{
				echo "INVALID IMAGE FORMAT"; 
			}*/
		//display success message
		echo "Congratulations ".$_SESSION['fname']." !! <br><br>";
		echo "<font color='green'>Your Data has been added successfully.<br><br>";
		echo "<br/><a href='show.php'>Go to Homepage</a>";
		
}
?>
</form>
</body>
</html>
