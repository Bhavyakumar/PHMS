
<div class="container-fluid"> 
	<div class="row">
	 		<div class="jumbotron" style="background-color:#fff0e6" align="center">
				<div class="from-group">
					
<?php
	   //$q = intval($_GET['q']);
	   include_once "connection.php";
	   $q=$_GET["fru"];
		$sql="SELECT * FROM scientist WHERE dis_name = '".$q."'";
		$result = mysql_query($sql);
		 
           echo"<div class='from-group'>";
		   echo"<table class='table table-bordered'>";		
		   echo"<thead style='background-color:#660000;color:#ffffff;'><tr><th>ક્રમ</th><th>વૈજ્ઞાનિકનુ નામ</th><th>જિલ્લો</th><th>તાલુકો</th><th>ગામ</th><th>મોબઈલ નંબર</th><th>ઈમૈલ</th><th>વૈજ્ઞાનિકનો પ્રકાર</th><th></th></tr></thead>";
		   $count=1;
				while($row = mysql_fetch_assoc($result))
				{
					echo "<tbody><tr>";
					echo "<td>" .$count++. "</td>";
					echo "<td>" . $row['s_name'] . "</td>";
					echo "<td>" . $row['dis_name'] . "</td>";
					echo "<td>" . $row['t_name'] . "</td>";
					echo "<td>" . $row['v_name'] . "</td>";
					echo "<td>" . $row['s_phoneno'] . "</td>";
					echo "<td>" . $row['s_email'] . "</td>";
					echo "<td>" . $row['s_type'] . "</td>";
					echo"<td><a href='del_all_scientist.php?id=".$row["s_id"]."' onclick='return check();'>રદ કરવા</a></td>";
				
					//echo "<td>" . $row['s_email'] . "</td>";
					//echo "<td>" . $row['s_type'] . "</td>";
					//echo "<td>" . $row['quntity'] . "</td>";
					//echo "<td>" . $row['p_price'] . "</td>";
					//echo "<td>" . $row['t_bill'] . "</td>";
					echo "</tr></tbody>";
				}
				echo "</table>";
			echo "</div>";
				
?>
	</div>
	</div>
	</div>
</div>	