<?php
	include "connection.php";
	// include "haed.php";
	session_start();
		$a=$_SESSION['fid'];
		//var_dump($a);exit(); 
		$pt=$_POST["plantType"];

		//$rt=$_SESSION['sid'];
		//echo $pt;

	$pname=$_POST["pname"];

	$size=$_FILES["upfile"]["size"];
		$fimg="fsendimage/".$_FILES["upfile"]["name"];
	$size=$size/(1024*1024);
	$que=$_POST["f_question"];
	
	
	$qry="insert into faq(f_question,image,s_type,p_name,f_id,status)values('$que','$fimg','$pt','$pname','$a','')";
	echo $qry;
	if($size<=2)
	{
		$ext=substr($_FILES["upfile"]["name"],-3);
		if ($ext=="jpg")
		{

			 if (mysql_query($qry))
					{
						//echo "succesfull";
						header("Location:question.php?err=1");
					}
					else
					{
						mysql_error();
						//header("Location:fruitdetails.php?erro=2");
					}
			 move_uploaded_file($_FILES["upfile"]["tmp_name"], $fimg);
		}
		else
		{
			echo"is not jpg";
			//header("Location:fruitdetails.php?errrr=3");
		}

	}
	else
	{
		echo"2mb";
		//header("Location:fruitdetails.php?erroo=4");
	}
	
?>