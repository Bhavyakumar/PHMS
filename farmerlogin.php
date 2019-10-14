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
         if($("#f_username").length){
            control.makeTransliteratable(['f_username']);
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
	<form name="" method=post action="farmersuc.php">
		<div>
				<br><h3 align=center style="  font-family:UniversCondensed;">ખેડૂત લોગઈન પેજ</h3 >
		</div>
		<br>
	  	<?php 
				if (isset($_GET["err"]))
				 		echo "<font color=red><b>તમારુ યુઝરનેમ અથવા પાસવર્ડ ખોટો છે.</b></font>";
				 if (isset($_GET["arr"]))
				 		echo "<font color=red><b> સફળતાપૂર્વક લોગઆઉટ</b></font>";
				 if(isset($_GET['ar']))
						echo "<script>(function(){alert('તમારુ રજીસ્ટ્રેશન સફળતાપૂર્વક થઇ ગયું છે.');})();</script>";
		?>
			
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="f_username" type="text" class="form-control" name="f_username" placeholder=" યુઝરનેમ"  required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		      <input id="f_password" type="password" class="form-control" name="f_password" placeholder=" પાસવર્ડ" required>
		    </div>
		    <div>
		    	<button type="submit" name="submit" id="submit">લોગઈન</button>

		    </div>
		    <br>
		    <div><a href="farmer_registration.php">નવું વપરાશકર્તા નોંધણી</a></div>
		</form>
	</div>
</div>

<?php
     include("webpage_footer.php");
?>