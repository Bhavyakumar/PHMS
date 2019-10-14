<?php
session_start();
include_once"connection.php";
   $id=$_GET["u"];
   //echo $id;
  // echo "id is:".$id;

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
	$index=0;
	while($rec=mysql_fetch_assoc($rs))
	{
		$name=$rec["t_name"];
		//$id=$rec["t_id"];
		//echo $cnt."-".$name."<br>";
		if($name==$_SESSION["taluka"])
		{
			$index=$cnt;
		}
		echo "objCmb.options[$cnt]=new Option('$name','$name');";
		$cnt++;
		
	}
	echo'document.getElementById("t_name").selectedIndex = "'.$index.'";';
	//echo "taluka is:".$_SESSION["taluka"];
	//$id=$_SESSION["a"];
	//$_SESSION["a"]=$id;
	//echo $var;


?>