<?php

include "connection.php";
//if(isset($_POST['submit']))

		$fname=$_POST["f_name"];
		$fadd=$_POST["f_address"];
		$fdis=$_POST["d_name"];
		$ftal=$_POST["t_name"];
		$fvlg=$_POST["v_name"];
		$fpincode=$_POST["f_pincode"];
		$fphone=$_POST["f_phone_no"]; 
		$fusername=$_POST["f_username"];
        $fpassword=$_POST["f_password"]; 
			
		
		 $qry="insert into farmer(f_name,f_address,dis_name,t_name,v_name,f_pincode,f_phone_no,f_username,f_password) VALUES ('$fname','$fadd','$fdis','$ftal','$fvlg','$fpincode','$fphone','$fusername','$fpassword')";
		 
		$rs=mysql_query($qry);
		if($rs)
		{

			
			 header("Location: farmerlogin.php?ar=1");
		}
		else
		{
			 echo mysql_error();
		}




?>