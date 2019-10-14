<?php
	include "connection.php";
  //echo $code;
  //$id= $_GET["no"];
  //echo $id;
   
   $qry="update scientist set status='1' where s_id=".$_GET["no"];
  // $rs= mysql_query($qry); 
  if( $rs= mysql_query($qry))
  {
	header("Location: fetch_scientist.php"); 
  }
else
{
	echo mysql_error();
}
?>
