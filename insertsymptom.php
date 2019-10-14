<?php 
	//include("webpage_header.php");
	include("connection.php");
	 // mysql_query("set names utf8");

	if (isset($_POST['submit'])) 

	{ 
		$a=$_POST["plantName"];
		echo $a;

		 $qry="select p_id from plantname where p_name = '$a'";
		$rc=mysql_query($qry);
			
		 while($rec=mysql_fetch_assoc($rc))
		{
			//$name=$rec["p_name"];
			$id=$rec["p_id"];
			//$var=$var."objCmb.add(new Option('$name','$name'));";
		}
		
		$ps=$_POST["p_symptoms"];
		//$pid=$_POST["plantName"];
		//var_dump($pid); exit;
		$qry="insert into symptoms (sy_id,p_id,p_symptoms) VALUES ('','$id','$ps')";
		
		$rs=mysql_query($qry);
		//var_dump($rs);exit;
		if($rs)
		{
			 header("Location: addsymptom.php?arro=1");
		}
		else
		{
			 echo "Invalid";
		}
		//exit;
}
?>
