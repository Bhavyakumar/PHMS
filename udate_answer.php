<?php
include "connection.php";
include "webpage_header.php";
$rt=$_GET["aid"];

$qr="select * from faq_answer where a_id='".$rt."'";

	$rt=mysql_query($qr);

	$tt=mysql_fetch_assoc($rt);



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
         if($("#txtname").length){
            control.makeTransliteratable(['txtname']);
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
<form action="update_ans.php" method="post">
<input type="hidden" name="txtnum" value=<?=$_GET["aid"] ?>>
	<!--<table>
	<tbody><tr style="width:'1000px' height:'100px'">
				<td>જવાબ:</td>
				<td><input type=text id="txtname"  rows="2" cols="50" type="text" class="form-control" name="txtname" value='<?=$tt["s_answer"] ?>'></td>
			</tr>
			<br>
			<tr>
				<th colspan="2">
					<input type="submit" name="s1" class="btn btn-info" value="સુધારો">
				</th>
			</tr>
		</tbody>
			
	</table>-->
	<div class="input-group">
		      <span class="input-group-addon">જવાબ:</span>
		      <input id="txtname" type="text" class="form-control" name="txtname"  value='<?=$tt["s_answer"] ?>' required>
		    </div>
			<br/>
			<div>
		    	<button type="submit" name="s1" class="btn btn-primary" id="submit" >સુધારો</button>

		    </div>
</form>
<?php
	include "webpage_footer.php";
?>