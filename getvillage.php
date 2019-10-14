<?php
include_once"connection.php";
   $id=$_GET["u"];
   $_SESSION['id']=$_GET["u"];
   //echo $id;
	$qry="SELECT v_name           
    FROM village  
    INNER JOIN taluka            
    ON taluka.t_id=village.t_id         
    WHERE t_name='$id'";
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
		//var_dump($rec); exit;
		$name=$rec["v_name"];
		//$id=$rec["p_id"];
		$var="opt=new Option('ગામનું નામ પસંદ કરો','');objCm.add(opt);";
		echo "objCm.options[$cnt]=new Option('$name','$name');";
		$cnt++;
		
	}
	//$id=$_SESSION["a"];
	//$_SESSION["a"]=$id;
	//echo $var;


?>