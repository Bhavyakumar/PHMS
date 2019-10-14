<?php
 
include "connection.php";
if(isset($_POST['submit']))
{


		$a=$_POST["s_type"];
		echo $a; //plant type id

		 $qry="select type_name from planttype where type_id = '$a'";
		 //echo $qry; exit;
		$rc=mysql_query($qry);
		//var_dump($rc); exit;
			
		 while($rec=mysql_fetch_assoc($rc))
		{
			//$name=$rec["p_name"];
			$tname=$rec["type_name"]; // plant type name
			//$var=$var."objCmb.add(new Option('$name','$name'));";
		}
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
        //$stype=$_POST["s_type"]; 
      //  echo $stp=$_POST["abc"]; 
        

			
		
		 $qry="insert into scientist(s_name,s_address,dis_name,t_name,v_name,s_pincode,s_phoneno,s_email,s_username,s_password,s_type, type_id) VALUES ('$sname','$sadd','$sdis','$stal','$svlg','$spincode','$sphone','$semail','$susername','$spassword','$tname','$a')"; 
		//echo $qry;
	

		if(mysql_query($qry))

		{
			$sql = mysql_query("SELECT s_email FROM scientist WHERE s_email = $semail");
		$row = mysql_fetch_row($sql);
				if(!isset($row[s_email])){

		    		header("Location: scientistlogin.php?err=1");
				} 
					else {
					 header("location:scientist_registration.php?msg=1");
		   		
						}  
				}
		
		else
		{
		 header("location:scientist_registration.php?msg=1");
		}



}
?>