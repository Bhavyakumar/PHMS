<?php 
	//include("webpage_header.php");
	include("connection.php");

	if (isset($_POST['submit'])) 

	{ 
		$a=$_POST["plantName"];
		echo $a;
		//$sy_iid=$_COOKIE["syid"];
		 $qry="select p_id from plantname where p_name = '$a'";
		$rc=mysql_query($qry);
			
		 while($rec=mysql_fetch_assoc($rc))
		{
			//$name=$rec["p_name"];
			$id=$rec["p_id"];
			//$var=$var."objCmb.add(new Option('$name','$name'));";
		}
		$sy_iid=$_POST["plantNamess"];	
		$dn=$_POST["d_name"];
		$dd=$_POST["d_discription"];
		$qry="insert into diseases (d_id,p_id,d_name,d_discription,sy_id) VALUES ('','$id','$dn','$dd','$sy_iid')";
		$rs=mysql_query($qry);
		//var_dump($rs);exit;
		if($rs)
		{
			header("Location: adddisease.php?err=1");
		}
		else
		{
			 echo "Invalid";
		}
		//exit;
}
?>
