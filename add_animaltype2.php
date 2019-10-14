<?php


//you have to delete plant type table
include "connection.php";
//if(isset($_POST['submit']))
//$aa=mysql_connect("localhost","root","","phms");
if(isset($_POST["submit"]))
{
	$pt=$_POST["type_name"];
	
	$qry="insert into animaltype(type_name) VALUES ('$pt')";

	$rt="select * from animaltype where type_name='".$pt."'";
	$qq=mysql_query($rt);

	$tt=mysql_fetch_assoc($qq);

	echo $tt["type_name"];



if($tt["type_name"]!=$pt)
	{
		if(mysql_query($qry))
		{
			header("location:add_animaltype.php?err=1");
		}
		else
		{
			header("location:add_animaltype.php?erro=2");
		}

	}		
	else
	{
		 header("location:add_animaltype.php?msg=3");

		//echo "alredy.....";
	}


}
?>