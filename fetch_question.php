
<?php
include_once "webpage_header.php";
?>
<?php
	//$qry="update faq set status='1' where s_type='".$_SESSION['tnm']."'";
	//$result=mysql_query($qry);
	//session_start();
	
	include "connection.php";
	
    //$qr="select * from ";
	echo"<div class='row'>";
    echo"<div class='col-sm-12'>";
		
				if (isset($_GET["err"]))
				{
				 		echo "<font color=green><b>Your data is sucessfully</b></font>";
				 		//$_GET["arr"]==0;
				}
				if (isset($_GET["erro"]))
				{
				 		echo "<font color=green><b>Your data is not added</b></font>";
				 		//$_GET["arr"]==0;
				}
		
	echo"</div>";	
	echo"</div>";
	$qr="select * from faq where s_type='".$_SESSION['tnm']."' and status=0";


	//echo $_SESSION['tnm'];

	$rs=mysql_query($qr);
	$count=0;
	echo"<div class='fq'><table class='table table-bordered'>";		
	echo"<thead style='background-color:#660000;color:#ffffff;'><tr><th>ક્રમ</th><th>પાકનો પ્રકાર</th><th>પાકનુ નામ</th><th>પ્રશ્ન</th><th>ફોટો</th><th></th></tr></thead>";

while($row=mysql_fetch_assoc($rs))
			  {
			  	$count++;
			  	$a=$row["image"];
				$im="<img src=$a width='100' height='100' />";
		
				echo"<tbody><tr>";
				echo"<td>".$count."</td>";
				//echo"<td>".$ar["type_id"]."</td>";
				echo"<td>".$row["s_type"]."</td>";
				echo"<td>".$row["p_name"]."</td>";
				echo"<td>".$row["f_question"]."</td>";
				echo"<td>".$im."</td>";
				echo "<td><a href='question_answer.php?qid=".$row["q_id"]."'>જવાબ</a></td>";
				/*echo"<td><a href='deletescientist.php?id=".$ar["s_id"]."'>Reject</a></td>";
				*/
				echo"</tr></tbody>";
			  }
			  echo"</table></div>";
			  
include "webpage_footer.php";
?>