<?php
	include("webpage_header.php");
	include_once "connection.php";
	?>

	<div class="row">
	 	<form class="form-horizontal" method="GET" >
		    <div class="col-lg-3">
				<div class="form-group">
					<!--<span class="glyphicon glyphicon-circle-arrow-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>-->
					  <select name="d_name" id="d_name" class="form-control" onchange="gettaluka()" >
					
										<option  value="">જિલ્લો પસંદ કરો</option>
										<?php
											include("connection.php");
											$qry="select dis_name from district;";
											$rc=mysql_query($qry);
											while($data=mysql_fetch_assoc($rc))
											{
												echo"<option id=".$data["dis_id"]." value=".$data["dis_name"].">".$data["dis_name"]."</option>";
												
											}
										?>
										
					</select>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
				 <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>-->
					  <select name="t_name" id='t_name'  class="form-control" onchange="getvillage()" >

						<option value="">તાલુકો પસંદ કરો</option>


					  </select>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
				  <!--<span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>-->
					  <select name="v_name" id='v_name' class="form-control" >

						<option value="">ગામનું નામ પસંદ કરો</option>


					  </select>
				</div>
			</div>
			<div class="col-lg-3">
				<button type="submit" name="submit" class="btn btn-success" id="submit" >શોધો</button>
			</div>
		</form>
	</div>	
	<br><br>
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-boredred table-hover">
					<thead>
						<tr class="info">
							<th>ક્રમ</th>
							<th>ખેડૂતનુ નામ</th>
			'				<th>સરનામું</th>
							<th>જિલ્લો</th>
							<th>તાલુકો</th>
							<th>ગામ</th>
							<th>પીનકોડ</th>
							<th>મોબાઇલ નંબર</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							include("connection.php");
							if(isset($_GET["submit"]))
							{
								//echo"<pre>";
									//print_r($_GET);
								//echo"</pre>";
								$district=$_GET["d_name"];
								$taluka=$_GET["t_name"];
								$village=$_GET["v_name"];
								$qry="select * from farmer where dis_name like '%".$district."%' and t_name like '%".$taluka."%' and v_name like '%".$village."%'";
								//echo $qry;
							}
							else
							{
									$qry="select * from farmer";
							}
							$count=1;
							$rc=mysql_query($qry);
							while($data=mysql_fetch_assoc($rc))
							{
								echo'
								
									<tr>
										<td>'.$count++.'</td>
										<td>'.$data["f_name"].'</td>
										<td>'.$data["f_address"].'</td>
										<td>'.$data["dis_name"].'</td>
										<td>'.$data["t_name"].'</td>
										<td>'.$data["v_name"].'</td>
										<td>'.$data["f_pincode"].'</td>
										<td>'.$data["f_phone_no"].'</td>
										
									</tr>
								';
							}
							
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>	
<script type="text/JavaScript">
	function check()
	{
		return confirm("શું તમને ખાતરી છે?");
	}
</script>
<?php
	include("webpage_footer.php");
?>