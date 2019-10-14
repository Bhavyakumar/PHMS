<?php
include_once"connection.php";
   $id=$_GET["u"];
   //echo $id;
	$qry="SELECT t_name           
    FROM taluka  
    INNER JOIN district            
    ON district.dis_id=taluka.dis_id         
    WHERE dis_name='$id'";
	if ($rs=mysql_query($qry))
	{
	}
	else
	{	
		echo "<br>".mysql_error();
	//$var="opt=new Option('તાલુકો પસંદ કરો','');objCmb.add(opt);";
	}
	$cnt=1;
	while($rec=mysql_fetch_assoc($rs))
	{
		$name=$rec["t_name"];
		//$id=$rec["t_id"];
		$var="opt=new Option('તાલુકો પસંદ કરો','');objCmb.add(opt);";
		echo "objCmb.options[$cnt]=new Option('$name','$name');";
		$cnt++;
		
	}
	//$id=$_SESSION["a"];
	//$_SESSION["a"]=$id;
	//echo $var;


?>