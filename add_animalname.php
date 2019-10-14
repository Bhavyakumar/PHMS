<?php
     include("webpage_header.php");

     include "connection.php";

?>



<style>
button 
{
    background-color: #4d79ff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
</style>
<script src="bootstrap/js/getPlantName.js"></script>
<div class="row">
	<div class="col-lg-offest-6 col-lg-6 col-md-offset-3 col-md-6">
	  <form  method="POST" action="add_plantname1.php">
	  	<?php 
		
				 		
            if (isset($_GET["err"]))
                {
                  echo"<div class='alert alert-success' role='alert' style='width=20%
                      background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                  echo "<b>The name of the crop was enter..";
                  echo"</div>";
                }
                if (isset($_GET["msg"]))
                {
                  echo"<div class='alert alert-warning' role='alert' style='width=20%
                      background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                  echo "<b> The name of the crop was already enter";
                  echo"</div>";
                }
            
              if (isset($_GET["erro"]))
                {
                  echo"<div class='alert alert-danger' role='alert' style='width=20%
                      background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                  echo "<b>The name is not enter";
                  echo"</div>";
                }
  
	 	?> 
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="abc" id="abc" class="form-control" required>
			      	<option>Choose the type of Animal</option>
	     			<?php
			     			$query= "select * from planttype";
		                    $result=mysql_query($query);

			     			while($arr=mysql_fetch_assoc($result))
					     	{

					     		$st = $arr['type_id'];
					     		//$ss = $arr['type_name'];
					     		echo"<option  id='abc' value=".$arr['type_id'].">".$arr['type_name']."</option>";
					     		//echo $st."<br>";
					     		//echo $ss."<br>";
			     			}
			     	?>
			      </select>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-leaf"></i></span>
		      <input id="p_name" type="text" class="form-control" name="p_name" placeholder="enter animal name" onchange="isalpha(this)" required>
		    </div>
		    
		    
		    <br><div>
		    	<button type="submit" name="submit" id="submit" >Send</button>

		    </div>
		    <br>
		</form>
	</div>
</div>

<?php
     include("webpage_footer.php");
?>
