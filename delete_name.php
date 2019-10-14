<?php
	include_once "connection.php";
	$qry="delete from plantname where p_id=".$_GET["no"];
	mysql_query($qry);
	header("Location: fetch_pname.php");

?>