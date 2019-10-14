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
         if($("#a_username").length){
            control.makeTransliteratable(['a_username']);
        }
		/*if($("#fquestion").length){
            control.makeTransliteratable(['fquestion']);
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
		<div>
				<br><h3 align=center style="  font-family:UniversCondensed;">સંચાલક લોગઈન પેજ</h3 >
		</div>
		<br>	  
		<form action="adminsuc.php" method="POST">
	  		<?php 
				if (isset($_GET["err"]))
				 		echo "<font color=red><b>તમારુ યુઝરનેમ અથવા પાસવર્ડ ખોટો છે.</b></font>";
				
				if (isset($_GET["ar"]))
				 		echo "<font color=red><b>સફળતાપૂર્વક લોગઆઉટ.</b></font>";
				
			?>
			
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="a_username" type="text" class="form-control" name="a_username" placeholder="યુઝરનેમ"  required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		      <input id="a_password" type="password" class="form-control" name="a_password" placeholder="પાસવર્ડ" required>
		    </div>
		    <div>
		    	<button type="submit" id="submit" name="submit" >લોગઈન</button>

		    </div>
		</form>
	</div>
</div>

<?php
     include("webpage_footer.php");
?>