
<!DOCTYPE html>
<html lang="en">
<head>
	<title> PHMS </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html;charset=utf8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/validate.js"></script>
	<script src="gu/jsapi.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		.fq img{
			
			    -webkit-transition: all .5s ease-in-out;
			    -moz-transition:all .5s ease-in-out;
			    -o-transition:all .5s ease-in-out;
			
		}
		.fq img:hover{
				-webkit-transform: scale(5); 
			    -moz-transform: scale(5);
			    -o-transform: scale(5);
			    transform: scale(5);
		}
	</style>
</head>
<body>
<?php
	include "connection.php";
	session_start();
	
?>
<script type="text/javascript">
	
	
	var objAjax;
	function gettaluka()
	{
		objAjax= new XMLHttpRequest();
		uname=document.getElementById("d_name").value;
		//alert(uname);
		//url="gettaluka.php?u="+uname;
		url="gettaluka.php?u="+uname;
		//objAjax.open("GET","gettaluka.php?u="+uname,true);
		objAjax.open("GET",url,true);
		objAjax.send();
		objAjax.onreadystatechange=fillEmp;
	}
	
		
		function fillEmp()
	{
	
		if (objAjax.readyState==4)
		{
			
			
			objCmb=document.getElementById("t_name");
			//alert("hi");
			len=objCmb.length;
			for (i=1;i<=len;i++)
			{
				objCmb.remove(i);
			}			
             //alert("hi");
			str=objAjax.responseText;
			
			eval(str);
			//alert("hi");
		}
		
	} 


	var objnewAjax;
	function getvillage()
	{ 
       	objnewAjax= new XMLHttpRequest();
		uname=document.getElementById("t_name").value;
		
		objnewAjax.open("GET","getvillage.php?u="+uname,true);

		objnewAjax.send();
		objnewAjax.onreadystatechange=fillEmpo;
	}
	
		
	function fillEmpo()
	{
		if (objnewAjax.readyState==4)
		{
			objCm=document.getElementById("v_name");
			//alert(objCmb);
			len=objCm.length;
			for (i=1;i<=len;i++)
			{
			objCm.remove(i);
			}			
			str=objnewAjax.responseText;
			//alert(objCm);
			eval(str);
		}
	} 


</script>

	<div class="container" style="background-color:#f0f0f0">
		<div>
				<div class="row" style="margin-bottom:5px;margin-top:10px;">
					<div class="col-lg-12 col-md-12">
						<div style="float:left;">
								<br><h1 style="padding-left:10px;font-family:UniversCondensed;">
પ્લાન્ટ હેલ્થકેર મેનેજમેન્ટ સિસ્ટમ</h1>
						</div>
			
						<div style="float:right;padding-right:10px;">
							<a href="http://www.aau.in/"><img src="Image/aau.jpg" class="img-responsive" width="80px" height="80px"></a>
						</div>
					</div>
				</div>
		</div>
		<input type="hidden" id="htext" name="htext">
		<div>
			<nav class="navbar navbar-inverse" >
			  <div class="container-fluid">
				<ul class="nav navbar-nav">
				  <li class="active"><a href="home.php">મુખ્ય</a></li>
				<?php
						//session_start();
							if(isset($_SESSION["auname"]))
							{
					        	
				            	echo"<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#''>પાક <span class='caret'></span></a>
					    		  <ul class='dropdown-menu'>
						        <li><a href='add_plantname.php'> પાકનુ નામ ઉમેરો</a></li>
						        <li><a href='add_planttype.php'>પાકનો પ્રકાર ઉમેરો</a></li>
						        <li><a href='fetch_type.php'>પાકનો પ્રકાર કાઢી નાખો</a></li>
						        <li><a href='fetch_pname.php'>પાકનુ નામ કાઢવા</a></li>
						  		</ul>
				  				</li>";
				  				echo"<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#''>વપરાશકર્તાઓ<span class='caret'></span></a>
					    		  <ul class='dropdown-menu'>
						        <li><a href='fetchfarmer.php'>ખેડૂત</a></li>
						        <li><a href='fetch_dis_serch.php'>વૈજ્ઞાનિક</a></li></ul></li>";
						        echo"<li><a href='fetch_scientist.php'>વૈજ્ઞાનિક મંજુરી</a></li>";
						        echo"<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#''>ઉમેરો <span class='caret'></span></a>
					    		  <ul class='dropdown-menu'>
						        <li><a href='add_district.php'> જિલ્લાનુ નામ ઉમેરો</a></li>
						        <li><a href='add_taluka.php'>તાલુકાનું નામ ઉમેરો</a></li>
						        <li><a href='add_village.php'>ગામનું નામ ઉમેરો</a></li>
						  		</ul>
				  				</li>";
				  				


							}
							
							if(isset($_SESSION["suname"]))
							{
					        
				            	echo"<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#''>પાક <span class='caret'></span></a>
					    		  <ul class='dropdown-menu'>
						        <li><a href='addsymptom.php'>લક્ષણો નાખો</a></li>
						        <li><a href='adddisease.php'>રોગ નાખો</a></li>
						        <li><a href='fetch_symptom.php'>લક્ષણો કાઢી નાખવા</a></li>
						  		</ul>
				  				</li>";
				  				
				  				  echo "<li style='color:white'><a href='fetch_question.php'>પ્રશ્ન જોવો</a>
				  				  		 </li>
				  				  		 ";
				  				
								  echo "<li style='color:white'><a href='fetch_answer.php'>પ્રશ્નનો જવાબ સુધારવા</a></li>";
								  		 			  				  
							}
							if(isset($_SESSION["funame"]))
							{
					        
				            	echo"<li><a href='question.php'>પ્રશ્નો મોકલવા </a></li>";
								echo"<li><a href='farmer_answer.php'>જવાબ જોવો </a></li>";
							}
							
							
				?>
				  <li ><a href="aboutus.php">અમારા વિશે</a></li>
				  <li><a href="contactus.php">અમારો સંપર્ક</a></li>
				  	  <li><a href="help.php">મદદ</a></li>
				  <?php
				  	if (isset($_SESSION['suname']) || isset($_SESSION['auname']) || isset($_SESSION['funame']))
				  	{

				  	}
				  	else
				  	{
				  		echo"<li><a href='disease_getinfo.php'>રોગની માહિતી</a></li>";
					}
				?>
				</ul>

				<ul class="nav navbar-nav navbar-right">
				<?php
				/*
					if(isset($_COOKIE["uname"]))
					{
							 echo"<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
					}
					else
					{	
						 	echo "<li><a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-log-in'></span> Login</a>";
				  			echo "<ul class='dropdown-menu'>";
					  		echo"<li><a href='adminlogin.php'>Admin</a></li>";
					  		echo"<li><a href='farmerlogin.php'>Farmer</a></li>";
					 		echo"<li><a href='scientistlogin.php'>Scientist</a></li>";
							echo"</ul> </li>";
					}
*/
					
					if (isset($_SESSION['suname']) || isset($_SESSION['auname']) || isset($_SESSION['funame'])) 
					{
						if(isset($_SESSION['auname']))
						{

						echo "<li><h5 style='padding-left:5px;font-family:UniversCondensed;color:white'>આપણું સ્વાગત છે ".$_SESSION['auname']."</h5
						></li>";
						}
						
						//var_dump($_SESSION['suname']);
						if(isset($_SESSION['far']))
						{

						echo "<li><h5 style='padding-left:5px;font-family:UniversCondensed;color:white'>આપણું સ્વાગત છે <a href='update_farmer.php' style='color:white'>".$_SESSION['far']."</a></h5
						></li>";
						}
						if(isset($_SESSION['snm']))
						{

						echo "<li><h5 style='padding-left:5px;font-family:UniversCondensed;color:white'>આપણું સ્વાગત છે <a href='update_scientist.php' style='color:white'>".$_SESSION['snm']."</h5
						></li>";
						}
						echo"<li><a href='logout.php' ><span class='glyphicon glyphicon-log-out'></span>લોગઆઉટ</a></li>";

						
					}
					else
					{

							echo "<li><a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-log-in'></span> લોગઈન</a>";
				  			echo "<ul class='dropdown-menu'>";
					  		echo"<li><a href='adminlogin.php'>સંચાલક</a></li>";
					  		echo"<li><a href='farmerlogin.php'>ખેડૂત</a></li>";
					 		echo"<li><a href='scientistlogin.php'>વૈજ્ઞાનિક</a></li>";
							echo"</ul> </li>";
					}
				?>
				</ul>
				</ul>
			  </div>
			</nav>

		</div>
		<div class="jumbotron" style="background-color:#FFF">

