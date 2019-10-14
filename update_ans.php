<?php

include "connection.php";

	$nm=$_POST["txtname"];
	$a_id=$_POST["txtnum"];
	

	$qry="update faq_answer set s_answer='$nm' where a_id=$a_id";
	echo $qry;
	if (mysql_query($qry))
	{
		header("Location: fetch_answer.php");
	}
	else
	{
		echo "<br>Error: In add Record";
		echo "<br>Error-".mysql_errno()."#".mysql_error();

	}
	
?>