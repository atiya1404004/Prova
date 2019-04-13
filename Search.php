<!DOCTYPE html>
<html>
  <head>
     <title>Search</title>
	 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	 
	
   <link rel="stylesheet" href="search.css">
     
   </head>
   <style>
.ab{
	width:1200px;
	height:auto;
	margin:0 auto;
	margin-top: 30px;
	padding-left:200px;
	-webkit-border-radius:15px;
	font-size:25px;
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
  <li><a href='show.php'> Go Back</a></li>
  <li><a href='home.php'> Home</a></li>
  <li><a href ="logout.php">Logout</a></li>
  </ul></div></div>
  <div class ="a">
 
  
     <div class="container">
	 <br/>
	 <h2 align="center">SEARCH Patient HERE</h2>
	 <br/>
	  <div class="ab from-group">
	    <div class="input-group">
		  <span class="input-group-addon">SEARCH</span>
		  <td><input type="text" name="search_text" id="search_text" placeholder="Search your Patient by name" /></td>
		  <td><img src="icon1.jpg" alt="icon" style="width:44px;height:28px;"></td>
		  
		</div>
	  </div>
	  <br/><br/>
	  <div id="result">
	     
	  </div>
	   
	 
	 </div>
   </body>
</html>


<script>
  $(document).ready(function()
  {
	  $('#search_text').keyup(function()
	  {
		  var txt=$(this).val();
		  if(txt != '')
		  {
			  $.ajax({
				  
				  url:"fetch.php",
				  method:"post",
				  data:{search:txt},
				  dataType:"text",
				  success:function(data)
				  {
					  $('#result').html(data);
				  }
			  });
			  
			  
			  
		  }
		  else
		  {
			   $('#result').html('');
			   $.ajax({
				  
				  url:"fetch.php",
				  method:"post",
				  data:{search:txt},
				  dataType:"text",
				  success:function(data)
				  {
					  $('#result').html(data);
				  }
			  });
			 
		  }
	  });
	  
  });








</script>