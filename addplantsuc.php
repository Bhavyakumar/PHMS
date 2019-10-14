<?php

include "connection.php";
//if(isset($_POST['submit']))

		$pname=$_POST["p_name"];
		$ptype=$_POST["p_type"];
			
		
		$qry="insert into plant(p_name,p_type) VALUES ('$pname','$ptype')";
		 
		$rs=mysql_query($qry);
		
		if($rs)
		{
			 header("Location: Home.php");
		}
		else
		{
			 echo mysql_error;
		}




?>