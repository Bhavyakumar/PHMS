<style>
	table.table-bordered{
    border:1px solid #1aa3ff;
    margin-top:20px;
	margin-left:20px;
	margin-right:20px;
  }
table.table-bordered > thead > tr > th{
    border:1px solid #1aa3ff;
}
table.table-bordered > tbody > tr > td{
    border:1px solid #1aa3ff;
}
.alert{
	margin-top:20px;
	margin-left:20px;
	margin-right:20px;
}
</style>

<?php
			include_once "connection.php";
			include "webpage_header.php";
			
			echo"<div class='container-fluid'>";
			
			
			  if(isset($_GET["err"]))
							{
							    echo"<script type='text/JavaScript'>alert('Your data is  Successfully Updated.')</script>";
								//echo "<div class='alert alert-success text-center'><strong>Success!</strong> Your data is  successfully added.</div>";
							}
			  if(isset($_GET["erro"]))
							{
							    echo"<script type='text/JavaScript'>alert('Your data is  Not Updated.')</script>";
								//echo "<div class='alert alert-danger center'><strong>Invalide!</strong> Your Data is Not Added.</div>";
							}
			
			
			$qr="select * from  plantname";
			$qry=mysql_query($qr);
			$count=0;
			
			  echo"<table class='table table-bordered'>";		
		   echo"<thead style='background-color:#660000;color:#ffffff;'><tr><th>No</th><th>Plant name</th><th></th></tr></thead>";
		   while($ar=mysql_fetch_assoc($qry))
			  {
			  	$count++;
				echo"<tbody><tr>";
				echo"<td>".$count."</td>";
				//echo"<td>".$ar["type_id"]."</td>";
				echo"<td>".$ar["p_name"]."</td>";
				echo "<td><a href='delete_name.php?no=".$ar["p_id"]."'  onclick='return check();'>રદ કરવા</a></td>";
				//echo"<td><a href='fruitedite.php?id=".$ar["type_id"]."'>Edit</a></td>";
				echo"</tr></tbody>";
			  }
			  echo"</table>";
			  
			  echo"</div>";
?>
</div>
<script type="text/JavaScript">
	function check()
	{
		return confirm("Are You Sure to delete a record?");
	}
</script>
<?php			
		include"webpage_footer.php";	
?>
