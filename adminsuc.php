<?php
     include("webpage_header.php");
?>
<?php
if(isset($_POST['submit']))
{
	$unm=$_POST["a_username"];
	$pwd=$_POST["a_password"];
	
	//$qry="select * from userlist where username='$unm' and userpassword='$pwd'";

	//$rs=mysql_query($qry);
	
	
	if ($unm=="ભવ્ય" && $pwd=="bhavya")
	{
		//session_start();
		$_SESSION['auname']=$unm;
        // 	 	echo "<script type='text/javascript'>alert('Login successfully!')</script>";
		//setcookie("chk",$unm,time()*7*3600);		
		header("Location: home.php?arr=1");
		
	}
	else
	{
		
		header("Location:adminlogin.php?err=1");
	}
}
?>
<?php
     include("webpage_footer.php");
?>