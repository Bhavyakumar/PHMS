<?php
	include_once "connection.php";
	$qry="delete from planttype where type_id=".$_GET["no"];
	mysql_query($qry);
	header("Location: fetch_type.php");

?>