<?php  
   include "connection.php";
//if(isset($_POST['submit']))
//$aa=mysql_connect("localhost","root","","phms");
if (isset($_POST['submit'])) 
{
	$ab=$_POST["abc"];
	$pn=$_POST["p_name"];
	
	$qry="insert into plantname(type_id,p_name) VALUES ('$ab','$pn')";
	
	$rs=mysql_query($qry);



	//$qry="insert into planttype(type_name) VALUES ('$pt')";

	$rt="select * from plantname where p_name='".$pn."'";
	$qq=mysql_query($rt);

	$tt=mysql_fetch_assoc($qq);

	if($tt["p_name"]!=$pn)
	{
		if(mysql_query($qry))
		{
			header("location:add_plantname.php?err=1");
		}
		else
		{
			header("location:add_plantname.php?erro=2");
		}

	}		
	else
	{
		 header("location:add_plantname.php?msg=3");

		//echo "alredy.....";
	}

		
	if($rs)
	{
		 header("Location: add_plantname.php?err=1");
	}
	else
	{
		 echo "Invalid";
	}
	//
	//exit;
}
?>