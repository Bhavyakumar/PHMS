<?php 
	include("webpage_header.php");
	include("connection.php");

	

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
<!--<script src="bootstrap/js/getPlantName.js"></script>-->
<script type="text/javascript">
	
	var objAjax,objnewAjax;
	function getplantname()
	{
		objAjax= new XMLHttpRequest();
		uname=document.getElementById("plantType").value;
		url="getplantname.php?u="+uname;
		objAjax.open("GET",url,true);
		objAjax.send();
		objAjax.onreadystatechange=fillEmp;
	}
	
		
		function fillEmp()
	{
	
		if (objAjax.readyState==4)
		{
			
			
			objCmb=document.getElementById("plantName");
			len=objCmb.length;
			for (i=0;i<=len;i++)
			{
				objCmb.remove(0);
			}			

			str=objAjax.responseText;
			eval(str);
		}
		
	} 


	//var objnewAjax;
	function getplantnamess()
	{ 
       	objnewAjax= new XMLHttpRequest();
		uname=document.getElementById("plantName").value;
		objnewAjax.open("GET","getplantsymptom.php?u="+uname,true);
		objnewAjax.send();
		objnewAjax.onreadystatechange=fillEmpo;
	}
	
		
	function fillEmpo()
	{
		if (objnewAjax.readyState==4)
		{
			objnnCmb=document.getElementById("plantNamess");
			len=objnnCmb.length;
			for (i=0;i<=len;i++)
			{
			objnnCmb.remove(i);
			}			
			str=objnewAjax.responseText;
			eval(str);
		}
	} 



	



</script>

<div class="row">
	<div class="col-lg-offest-6 col-lg-6 col-md-offset-3 col-md-6">
		<p style="color:#006400;text-align:left">
    		<b>  રોગની માહિતી</b>  
		</p>
	  <form action="fetch_disease.php" method="POST">
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="plantType" id="plantType" Onchange= "getplantname()" class="form-control" required>
			      	<option value="">પાકનો પ્રકાર પસંદ કરો</option>
	     			<?php
			     			$query= "select * from planttype ";

		                    $result=mysql_query($query);

			     			while($arr=mysql_fetch_assoc($result))
					     	{

					     		//$st = $arr['type_id'];
					     		//$ss = $arr['type_name'];
					     		echo"<option value=".$arr['type_id'].">".$arr['type_name']."</option>";
					     		//echo $st."<br>";
					     		//echo $ss."<br>";
			     			}
			     	?>
			      </select>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="plantName" id='plantName' Onchange= "getplantnamess()" class="form-control" required>

			      	<option value="">પાકનુ નામ પસંદ કરો</option>


	     		  </select>
	     	</div>
	     	<br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="plantNamess" id='plantNamess' class="form-control" required>

			      	<option value="">પાકના લક્ષણો પસંદ કરો</option>


	     		  </select>
	     	</div>

		    
		    
		    <br><div>
		    	<button type="submit" name="submit">માહિતી આપો</button>

		    </div>
		    <br>
		</form>
	</div>
</div>

<?php 
	include("webpage_footer.php");
?>