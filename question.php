<?php
     include("webpage_header.php");
?>
<style>
button {
    background-color: #4CAF50;
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
         if($("#pname").length){
            control.makeTransliteratable(['pname']);
        }
		if($("#fquestion").length){
            control.makeTransliteratable(['fquestion']);
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


 



<div class="row">
	<div class="col-lg-offest-6 col-lg-6 col-md-offset-3 col-md-6">
	  <form action="add_question.php" method="POST" enctype="multipart/form-data">
	  	<?php 
		if(isset($_GET['err']))
				 		{
					 		echo "<font color=green>પ્રશ્ન મોકલાઈ ગયો છે.</font>";
				 		}
				 		
	 	?> 
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="plantType" id="plantType" class="form-control">
			      	<option>પાકનો પ્રકાર પસંદ કરો</option>
	     			<?php
	     					include "connection.php";
			     			$query= "select * from planttype";

		                    $result=mysql_query($query);

			     			while($arr=mysql_fetch_assoc($result))
					     	{

					     		//$st = $arr['type_id'];
					     		//$ss = $arr['type_name'];
					     		echo"<option value=".$arr["type_name"].">".$arr["type_name"]."</option>";
					     		//echo $st."<br>";
					     		//echo $ss."<br>";
			     			}
			     	?>
			      </select>

		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
		      <input id="pname" type="text" class="form-control" name="pname" placeholder="પાકનુ નામ નાખો" required>
		    </div>
		    <br>
		    <div class="input-group">
				 <label class="input-control">પાકનો ફોટો અપલોડ કરો:</label>
						<div class="input-group">
							<input type="file"  name="upfile">
			       		</div>
			</div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-tree"></i></span>
		      <input id="fquestion" type="text" class="form-control" name="f_question" placeholder=" પ્રશ્ન નાખો" required>
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
