<?php
     include("webpage_header.php");

     include "connection.php";

?>

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
         if($("#p_name").length){
            control.makeTransliteratable(['p_name']);
        }
		/* if($("#s_name").length){
            control.makeTransliteratable(['s_name']);
        }
        if($("#s_pincode").length){
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
                  echo "<b> પાકનુ નામ નખાઈ ગયો..";
                  echo"</div>";
                }
                if (isset($_GET["msg"]))
                {
                  echo"<div class='alert alert-warning' role='alert' style='width=20%
                      background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                  echo "<b> પાકનુ નામ અંદર છે જ";
                  echo"</div>";
                }
            
              if (isset($_GET["erro"]))
                {
                  echo"<div class='alert alert-danger' role='alert' style='width=20%
                      background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                  echo "<b>નામ નાકાહાયુ નથી";
                  echo"</div>";
                }
  
	 	?> 
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="abc" id="abc" class="form-control" required>
			      	<option>પાકનો પ્રકાર પસંદ કરો</option>
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
		      <input id="p_name" type="text" class="form-control" name="p_name" placeholder="પાકનુ નામ નાખો" onchange="isalpha(this)" required>
		    </div>
		    
		    
		    <br><div>
		    	<button type="submit" name="submit" id="submit" >મોકલો</button>

		    </div>
		    <br>
		</form>
	</div>
</div>

<?php
     include("webpage_footer.php");
?>
