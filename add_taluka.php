<?php
     include("webpage_header.php");


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
         if($("#tname").length){
            control.makeTransliteratable(['tname']);
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
<div class="row">
	<div class="col-lg-offest-6 col-lg-6 col-md-offset-3 col-md-6">
	  <form  method="POST" action="add_taluka2.php">
      <?php
              if (isset($_GET["err"]))
                {
                  echo"<div class='alert alert-success' role='alert' style='width=20%
                      background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                  echo "<b> તાલુકાનું નામ નખાઈ ગયો..";
                  echo"</div>";
                }
                if (isset($_GET["msg"]))
                {
                  echo"<div class='alert alert-warning' role='alert' style='width=20%
                      background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                  echo "<b>તાલુકાનું નામ અંદર છે જ";
                  echo"</div>";
                }
            
              if (isset($_GET["erro"]))
                {
                  echo"<div class='alert alert-danger' role='alert' style='width=20%
                      background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                  echo "<b>તાલુકાનું નામ નાકાહાયુ નથી";
                  echo"</div>";
                }
      ?>
	  	 <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
				  <select name="d_name" id="d_name" class="form-control" onchange="gettaluka()" required>
			    
									<option  value="">જિલ્લો પસંદ કરો</option>
									<?php
										include("connection.php");
										$qry="select dis_id,dis_name from district;";
										$rc=mysql_query($qry);
										while($data=mysql_fetch_assoc($rc))
										{
											echo"<option id='ab' value=".$data["dis_id"].">".$data["dis_name"]."</option>";
											
										}
									?>
									
				</select>
			</div>	
			<br>
			<div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-leaf"></i></span>
		      <input id="tname" type="text" class="form-control" name="tname" placeholder="તાલુકાનું નામ નાખો" onchange="isalpha(this)" required>
		    </div>
		     <br><div>
		    	<button type="submit" name="submit" id="submit" >મોકલો</button>

		    </div>
		   
		</form>
	</div>
</div>	    
		    
<?php
     include("webpage_footer.php");
?>
