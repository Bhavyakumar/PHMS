<?php
//setcookie("uname","$unm",time()-1);

session_start();


if(isset($_SESSION['auname']) )
{	
	unset($_SESSION['auname']);
	header("location:adminlogin.php?ar");
	//unset($_SESSION['suname']);
	//unset($_SESSION['auname']);
}
if(isset($_SESSION['suname']) )
{	
	unset($_SESSION['suname']);
	header("location:scientistlogin.php?erro");
	unset($_SESSION['ntf']);
	unset($_SESSION['snm']);
	unset($_SESSION['tnm']);
	unset($_SESSION['tid']);
	//unset($_SESSION['tnm']);
	//unset($_SESSION['suname']);
	//unset($_SESSION['auname']);
}
if(isset($_SESSION['funame']) )
{	
	unset($_SESSION['funame']);
	setcookie("qid",$qid,time()-1);
	unset($_SESSION['far']);
	header("location:farmerlogin.php?arr");
	//unset($_SESSION['suname']);
	//unset($_SESSION['auname']);
}

//session_destroy();
//setcookie("suname","$sunm",time()-1);
//		header("location:adminlogin.php");
?>