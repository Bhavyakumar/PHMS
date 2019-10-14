<?php
	include_once "connection.php";
	$qry="delete from scientist where s_id=".$_GET["id"];
	mysql_query($qry);
	header("Location: fetch_scientist.php");

?>