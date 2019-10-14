<?php
	include("webpage_header.php");
	include_once "connection.php";
		echo"<div class='container-fluid'>";

			$qr="select * from  scientist where status=0";
			$qry=mysql_query($qr);
			$count=0;
			
			echo"<table class='table table-bordered'>";		
			echo"<thead style='background-color:#660000;color:#ffffff;'><tr><th>ક્રમ</th><th>વૈજ્ઞાનિકનુ નામ</th><th>મોબઈલ નંબર</th><th>ઈમૈલ </th><th>વૈજ્ઞાનિકનો પ્રકાર</th><th></th><th></th></tr></thead>";
		   while($ar=mysql_fetch_assoc($qry))
			  {
			  	$count++;
				echo"<tbody><tr>";
				echo"<td>".$count."</td>";
				//echo"<td>".$ar["type_id"]."</td>";
				echo"<td>".$ar["s_name"]."</td>";
				echo"<td>".$ar["s_phoneno"]."</td>";
				echo"<td>".$ar["s_email"]."</td>";
				echo"<td>".$ar["s_type"]."</td>";
				echo "<td><a href='approve.php?no=".$ar["s_id"]."' onclick='return check();'
				>Accept</a></td>";
				echo"<td><a href='deletescientist.php?id=".$ar["s_id"]."'>Reject</a></td>";
				echo"</tr></tbody>";
			  }
			  echo"</table>";
			  
			  echo"</div>";

?>
<script type="text/JavaScript">
	function check()
	{
		return confirm("શું તમને ખાતરી છે?");
	}
</script>
<?php
	include("webpage_footer.php");
?>