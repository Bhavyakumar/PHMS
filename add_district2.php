<?php

include_once "connection.php";
     
if(isset($_POST['submit']))
{
	$dis=$_POST['disname'];
     $qr= "insert into district (dis_name) values ('$dis')";
    // $rs=mysql_query($qr);  


     $rt="select * from district where dis_name='".$dis."'";
	$qq=mysql_query($rt);

	$tt=mysql_fetch_assoc($qq);

	echo $tt["type_name"];



if($tt["dis_name"]!=$dis)
	{
		if(mysql_query($qr))
		{
			header("location:add_district.php?err=1");
		}
		else
		{
			header("location:add_district.php?erro=2");
		}

	}		
	else
	{
		 header("location:add_district.php?msg=3");

		//echo "alredy.....";
	}
  }    


?>