<?php
include_once"connection.php";
session_start();
   $id=$_GET["u"];
   //echo "id is:".$id;
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
	$index=0;
	while($rec=mysql_fetch_assoc($rs))
	{
		//var_dump($rec); exit;
		$name=$rec["v_name"];
		//$id=$rec[.""p_id"];
		//echo $cnt."-".$name."<br>";
		if($name==$_SESSION["village"])
		{
			$index=$cnt;
		}
		
		echo "objCm.options[$cnt]=new Option('$name','$name');";
		$cnt++;
		
	}

	echo'document.getElementById("v_name").selectedIndex = "'.$index.'";';
	//echo $_SESSION["village"];
	//$id=$_SESSION["a"]/;
	//$_SESSION["a"]=$id;
	//echo $var;


?>