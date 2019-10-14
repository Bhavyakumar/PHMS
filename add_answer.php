<?php

session_start();
include_once "connection.php";
$qid=$_SESSION["qid"];
$qry1="update faq set status='1' where s_type='".$_SESSION['tnm']."' and q_id=$qid";
$result=mysql_query($qry1);
//echo $_GET['pnm'];
//$fid=$_GET['fid'];
//echo $_GET['que'];
$ans=$_POST['ans'];



$fid=$_SESSION['fid'];

$st=$_SESSION['tnm'];
$qr="insert into faq_answer(s_type,q_id,s_answer,f_id) values('$st','$qid','$ans','$fid')";

	if(mysql_query($qr))
	{
		header("location:fetch_answer.php?err=1");
	}
	else
	{
		header("location:fetch_question.php?erro=1");
	}	

?>