<!DOCTYPE html>
<html>
 
		   
  <head>
  
  
    <title>details</title>
	
	  <link rel="stylesheet" href="details.css">
	  <link rel="stylesheet" href="w3.css">

</head>
<style>
.a{
	width:800px;
	height:auto;
	margin:0 auto;
	padding-left:80px;
	border-radius: 100px;
	-webkit-border-radius:15px;
	font-size:17px;
	font-weight:bolder;

}
#ab tr:hover {background-color: #add;}
</style>
  <body>
  
    <div id="nav_wrapper"><br>
<ul>
<li><a href="show.php"> Go back </a></li>
<li><a href="home.php"> Home </a></li>
<li><a href="logout.php">Logout</a></li>


</ul>
</div>
  
   
     
		  <h1 align="center">Patient Details </h1>
	
	 
	 		 
		<br/><br/>
		<div class= "a">
	    <table id="ab"  style="width:100%" border="1">
	   
	   <tbody>
	      <?php  
		   include("config.php");
		   $patient_id=$_GET['id'];
		   $query=mysql_query("SELECT * FROM patient WHERE patient_id='$patient_id'");
		  while($row=mysql_fetch_object($query))
		  {
			  ?>
			    <tr>
				  <td>Name : </td> 
				  <td><?php echo $row->name?></td>
				</tr>
				<tr>
				  <td>Registration no : </td> 
				  <td><?php echo $row->reg_no?></td>
				</tr>
				<tr>
				  <td>Age : </td> 
				  <td><?php echo $row->age?></td>
				</tr>
				<tr>
				  <td>Gender : </td> 
				  <td>
				  
				  <?php


			$que=mysql_query("SELECT gender.gender_name FROM gender where gender.gender_id = $row->gender_id ");
		  while($ge=mysql_fetch_object($que))
		  {
			

		  echo $ge->gender_name ."</br>";
		  
		  }  ?>
				  
				  
				  
				  </td>
				</tr>
				<tr>
				  <td>Address : </td> 
				  <td><?php echo $row->address?></td>
				</tr>
				<tr>
				  <td>Disease : </td> 
				  <td><?php echo $row->disease?></td>
				</tr>
				<tr>
				  <td>Date of Admission: </td> 
				  <td><?php echo $row->d_add?></td>
				</tr>
				<tr>
				  <td>Schedule: </td> 
				  <td><?php
				$quer1=mysql_query("select * from schedulet where schedule = ".$row->schedule." ");
	while($sc=mysql_fetch_object($quer1))
				{
				  echo $sc->sc_name;
				  
				} ?></td>
				</tr>

				<tr>
				  <td>Blood Group: </td> 
				  <td><?php
				$quer=mysql_query("select * from bgroup where bgroup_id = ".$row->bgroup_id." ");
	while($ro=mysql_fetch_object($quer))
				{
				  echo $ro->bgroupname;
				  
				} ?></td>
				</tr>
				<tr>
				  <td>Height : </td> 
				  <td><?php echo $row->height?></td>
				</tr>
				<tr>
				  <td>Weight : </td> 
				  <td><?php echo $row->weight?></td>
				</tr>
				

				<tr>
				  <td>Any Operation : </td> 
				  <td><?php if( $row->operation==0)
				  {
					  echo "No";
				  }else
				  {
					  echo "Yes";
				  }
					  
				  ?></td>
				</tr>
				
				
			  
			  <?php
			  
		  }
		  
		  
		  
		  
		  
		  ?>
	   
	   
	   
	   </tbody>
	</table>
</div>
  
  </body>

</html>