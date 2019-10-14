<?php


include "connection.php";
session_start();

		/*$rt= $_SESSION['sid'];

		$a=$_POST["s_type"];
		//echo $a; //plant type id

		 $qry="select type_name from planttype where type_id = '$a'";
		 //echo $qry; exit;
		$rc=mysql_query($qry);
		//var_dump($rc); exit;
			
		 while($rec=mysql_fetch_assoc($rc))
		{
			//$name=$rec["p_name"];
			$tname=$rec["type_name"]; // plant type name
			//$var=$var."objCmb.add(new Option('$name','$name'));";
		}*/
		$sname=$_POST["s_name"];
		$sadd=$_POST["s_address"];
		$sdis=$_POST["d_name"];
		$stal=$_POST["t_name"];
		$svlg=$_POST["v_name"];
		$spincode=$_POST["s_pincode"];
		$sphone=$_POST["s_phoneno"]; 
		$susername=$_POST["s_username"];
        $spassword=$_POST["s_password"]; 
        $semail=$_POST["s_email"];


        $qr="update scientist set s_name='$sname',s_address='$sadd',dis_name='$sdis',t_name='$stal',v_name='$svlg',s_pincode='$spincode',s_phoneno='$sphone',s_username='$susername',s_password='$spassword',s_email='$semail' where s_id='".$_SESSION['sid']."'";
       // echo $qr;
        if(mysql_query($qr))
        {
        	header("location:update_scientist.php?succes=1");
        }	
        else
        {

        }
	 

?>