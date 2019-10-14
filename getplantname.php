<?php
include_once"connection.php";




   
	$qry="select * from plantname where type_id = '".$_GET["u"]."'";
	//echo "<br>".$qry;
	if ($rs=mysql_query($qry))
	{
	}
	else
		echo "<br>".mysql_error();
	$var="opt=new Option('પાકનુ નામ પસંદ કરો','');objCmb.add(opt);";
	while($rec=mysql_fetch_assoc($rs))
	{
		$name=$rec["p_name"];
		$id=$rec["p_id"];
		$var=$var."objCmb.add(new Option('$name','$name'));";
	}
	//$id=$_SESSION["a"];
	//$_SESSION["a"]=$id;
	echo $var;

?>