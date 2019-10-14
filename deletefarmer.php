<?php
	include_once "connection.php";
	$qry="delete from farmer where f_id=".$_GET["id"];
	mysql_query($qry);
	header("Location: fetchfarmer.php");

?>