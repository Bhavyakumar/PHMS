<?php
include_once"connection.php";
	$id=$_GET["u"];
	$qry="SELECT p_symptoms,sy_id           
    FROM symptoms  
    INNER JOIN plantname            
    ON plantname.p_id=symptoms.p_id         
    WHERE p_name='$id'";
	$rc=mysql_query($qry);
	
	$cnt=0;
    while($data=mysql_fetch_assoc($rc))
	{
		$name= $data['p_symptoms'];
		$syid=$data['sy_id'];
		//setcookie("syid",$syid);
		$var="opt=new Option('પાકના લક્ષણો પસંદ કરો','');objCmb.add(opt);";
		echo "objnnCmb.options[$cnt]=new Option('$name','$syid');";
		//$syid=$data["sy_id"];
		//setcookie($syid,"","");
		$cnt++;
	}
	
?>