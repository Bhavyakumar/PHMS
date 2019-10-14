<?php
     include("webpage_header.php");

	

?>



 


<div class="row">
	
	<div class="col-lg-offest-6 col-lg-6 col-md-offset-3 col-md-6">
	  <form action="add_animaltype2.php" method="post">
		<?php 
				


								if (isset($_GET["err"]))
								{
									echo"<div class='alert alert-success' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b> type is enter..";
									echo"</div>";
								}
								if (isset($_GET["msg"]))
								{
									echo"<div class='alert alert-warning' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b> this type is enter";
									echo"</div>";
								}
						
							if (isset($_GET["erro"]))
								{
									echo"<div class='alert alert-danger' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b>Not enter";
									echo"</div>";
								}
				 		
	 ?>    
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
		      <input id="p_type" type="text" class="form-control" name="type_name" placeholder="enter type of animal" onchange="isalpha(this)" required>
		    </div>
		    
		    <br><div>
		    	<button type="submit" name="submit" class='btn btn-success btn-lg' id="submit" >Send</button>

		    </div>
		    <br>
		</form>
	</div>
</div>
<?php
     include("webpage_footer.php");
?>
