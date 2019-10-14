<?php

include "connection.php";
//if(isset($_POST['submit']))

	session_start();

		$fname=$_POST["f_name"];
		$fadd=$_POST["f_address"];
		$fdis=$_POST["d_name"];
		$ftal=$_POST["t_name"];
		$fvlg=$_POST["v_name"];
		$fpincode=$_POST["f_pincode"];
		$fphone=$_POST["f_phone_no"]; 
		$fusername=$_POST["f_username"];
        $fpassword=$_POST["f_password"];

	$qr="update farmer set f_name='$fname',f_address='$fadd',dis_name='$fdis',t_name='$ftal',v_name='$fvlg',f_pincode='$fpincode',f_phone_no='$fphone',f_username='$fusername',f_password='$fpassword' where f_id='".$_SESSION['fid']."'";
	
	if(mysql_query($qr))
	{
		header("location:update_farmer.php?success=1");
	}
	else
	{
		echo"not********************";
	}
		
?>