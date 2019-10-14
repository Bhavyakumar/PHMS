<?php

	     include "connection.php";
     
if(isset($_POST['submit']))
{
	$did=$_POST['d_name'];
	//echo $did;
	$tal=$_POST['tname'];
	//echo $tal;
     $qr= "insert into taluka (t_name,dis_id) values ('$tal','$did')";
    // $rs=mysql_query($qr);  


     $rt="select * from taluka where t_name='".$tal."'";
	$qq=mysql_query($rt);

	$tt=mysql_fetch_assoc($qq);

	//echo $tt["type_name"];



if($tt["t_name"]!=$tal)
	{
		if(mysql_query($qr))
		{
			header("location:add_taluka.php?err=1");
		}
		else
		{
			header("location:add_taluka.php?erro=2");
		}

	}		
	else
	{
		 header("location:add_taluka.php?msg=3");

		//echo "alredy.....";
	}
 }    




?>