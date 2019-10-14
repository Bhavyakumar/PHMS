<?php
	
	include "webpage_header.php";
	include "connection.php";
	$fid=$_SESSION["fid"];
	$qr="select * from faq_answer a inner join faq f on f.q_id=a.q_id where a.f_id=$fid";
	$rs=mysql_query($qr);
	$count=1;
	echo"<table class='fq table table-bordered'>";		
	echo"<thead style='background-color:#660000;color:#ffffff;'><tr><th>ક્રમ</th><th>પાકનો પ્રકાર</th><th>પાકનુ નામ</th><th>પ્રશ્ન</th><th>ફોટો</th><th>જવાબ</th></tr></thead><tbody>";

	while($row=mysql_fetch_assoc($rs))
			  {
			  	
			  	$a=$row["image"];
				$im="<img src='$a' width='100' height='100' />";
				//echo $im;
				echo"<tr>";
				echo"<td>".$count."</td>";
				echo"<td>".$row["s_type"]."</td>";
				echo"<td>".$row["p_name"]."</td>";
				echo"<td>".$row["f_question"]."</td>";
				echo"<td>".$im."</td>";
				echo"<td>".$row["s_answer"]."</td>";
				//echo"<td>".$im."</td>";
				echo"</tr>";
				$count++;
			  }
			  echo"</tbody></table>";
			  
	include "webpage_footer.php";
?>