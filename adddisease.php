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

<script type="text/javascript">
google.load("elements", "1", {packages: "transliteration"});
</script> 
<script type="text/javascript">
 
      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });
 
      function onLoad() {
        var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.GUJARATI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };
 
        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);
 
        // Enable transliteration in the editable DIV with id
        // 'transliterateDiv'.
         if($("#dname").length){
            control.makeTransliteratable(['dname']);
        }
		if($("#ddiscription").length){
            control.makeTransliteratable(['ddiscription']);
        }
        /*if($("#s_pincode").length){
            control.makeTransliteratable(['s_pincode']);
        }
        if($("#s_phoneno").length){
            control.makeTransliteratable(['s_phoneno']);
        }
        if($("#s_username").length){
            control.makeTransliteratable(['s_username']);
        }*/
       
      }
      google.setOnLoadCallback(onLoad);
    </script>
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
	  <form action="insertdisease.php" method="POST">
		<?php 
		if(isset($_GET['err']))
				 		{
				 		echo "<font color=green>પાકનો રોગ નંખાઈ ગયો છે.</font>";
				 		}
				 		
		 ?> 
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="plantType" id="plantType" Onchange= "getplantname()" class="form-control" required>
			      	<option>પાકનો પ્રકાર પસંદ કરો</option>
	     			<?php
			     			$query= "select * from planttype where type_id='".$_SESSION['tid']."'";

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
	     	<br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-leaf"></i></span>
		      <input id="dname" type="text" class="form-control" name="d_name" placeholder="પાકનો રોગ નાખો"  required>
		    </div>
			<br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-leaf"></i></span>
		      <input id="ddiscription" type="text" class="form-control" name="d_discription" placeholder="પાકના રોગનું વર્ણન નાખો"  required>
		    </div>

		    
		    
		    <br><div>
		    	<button type="submit" name="submit" id="submit">મોકલો</button>

		    </div>
		    <br>
		</form>
	</div>
</div>
<?php 
	include("webpage_footer.php");
?>