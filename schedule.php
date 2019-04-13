<?php
include("config.php");
$output='';



$query1=mysql_query("select * from patient where schedule= ".$_POST["schedule"]." ");

if (mysql_num_rows($query1)>0)
{
	
	echo "invalid";
	
}else{
	
	echo "valid";
}



?>