

<?php
	include "webpage_header.php";

	
	$qry="update faq_answer set status='1' where s_type='".$_SESSION['tnm']."'";
	$result=mysql_query($qry);
	
	include "connection.php";

 	$qr="select a.a_id,a.s_type,p_name,f_question,image,s_answer from faq_answer a inner join faq f on f.q_id=a.q_id where a.s_type='".$_SESSION['tnm']."'";

	$rs=mysql_query($qr);
	$count=0;
	echo"<table class='fq table table-bordered'>";		//
	echo"<thead style='background-color:#660000;color:#ffffff;'><tr><th>ક્રમ</th><th>પાકનો પ્રકાર</th><th>પાકનુ નામ</th><th>પ્રશ્ન</th><th>ફોટો</th><th>જવાબ</th><th></th></tr></thead><tbody>";

	while($row=mysql_fetch_assoc($rs))
			  {
			  	$count++;
			  	$a=$row["image"];
				$im="<img src=$a width='100' height='100' />";
		
				echo"<tr>";
				echo"<td>".$count."</td>";
				//echo"<td>".$ar["type_id"]."</td>";
				echo"<td>".$row["s_type"]."</td>";
				echo"<td>".$row["p_name"]."</td>";
				echo"<td>".$row["f_question"]."</td>";
				echo"<td>".$im."</td>";
				echo"<td>".$row["s_answer"]."</td>";
				echo "<td><a href='udate_answer.php?aid=".$row["a_id"]."'>સુધારવા</a></td>";
				echo"</tr>";
			  }
			  echo"</tbody></table>";

include "webpage_footer.php";
?>