
<?php
	include "webpage_header.php";
?>
<div class="container-fluid"> 
	<div class="row">
	 		<div class="jumbotron" style="background-color:#fff0e6" align="center">
				<div class="from-group">
					
<?php
	
	   include_once "connection.php";
	   $d=$_POST['d_name'];
	 //  echo $d;
	   $t=$_POST['t_name'];
	  // echo $t;
	   $v=$_POST['v_name'];
	   //echo $v;
		$sql="SELECT * FROM farmer WHERE dis_name = '".$d."' and t_name ='".$t."' and v_name ='".$v."'";
		echo $sql;
		$result = mysql_query($sql);
		 
           echo"<div class='from-group'>";
		   echo"<table class='table table-bordered'>";		
		   echo"<thead style='background-color:#660000;color:#ffffff;'><tr><th>ક્રમ</th><th>ખેડૂતનુ નામ</th><th>જિલ્લો</th><th>તાલુકો</th><th>ગામ</th><th>મોબઈલ નંબર</th><th></th></tr></thead>";
		   $count=1;
				while($row = mysql_fetch_assoc($result))
				{
					echo "<tbody><tr>";
					echo "<td>" .$count++. "</td>";
					echo "<td>" . $row['f_name'] . "</td>";
					echo "<td>" . $row['dis_name'] . "</td>";
					echo "<td>" . $row['t_name'] . "</td>";
					echo "<td>" . $row['v_name'] . "</td>";
					echo "<td>" . $row['f_phone_no'] . "</td>";
					echo"<td><a href='deletefarmer.php?id=".$row["f_id"]."' onclick='return check();'>રદ કરવા</a></td>";
				
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