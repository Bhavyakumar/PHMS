<?php
	include_once "connection.php";
	$qry="delete from symptoms where sy_id=".$_GET["no"];
	mysql_query($qry);
	header("Location: fetch_symptom.php");

?>