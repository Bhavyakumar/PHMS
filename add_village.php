<?php
	include_once "webpage_header.php";
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
         if($("#vname").length){
            control.makeTransliteratable(['vname']);
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

<form action="add_village.php" method="POST">
		<div class="input-group">
		    	<span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="d_name" id="d_name" class="form-control" onchange="gettaluka()" required>
			    
									<option  value="">જિલ્લો પસંદ કરો</option>
									<?php
										include("connection.php");
										$qry="select dis_name from district;";
										$rc=mysql_query($qry);
										while($data=mysql_fetch_assoc($rc))
										{
											echo"<option>".$data["dis_name"]."</option>";
										}
									?>
				</select>

		    </div>

		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="t_name" id='t_name'  class="form-control" onchange="getvillage()" required>

			      	<option value="">તાલુકો પસંદ કરો</option>


	     		  </select>
	     	</div>
	     	<br>
			<div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-leaf"></i></span>
		      <input id="vname" type="text" class="form-control" name="vname" placeholder="ગામનું નામ નાખો" onchange="isalpha(this)" required>
		    </div>
			<br>
			<br><div>
		    	<button type="submit" name="submit" id="submit" >મોકલો</button>

		    </div>
</form>
</div>
</div>
<?php
	
	if(isset($_POST["submit"]))
	{
	
	//$did=$_POST['d_name'];
	//echo $did;
	$tal=$_POST['t_name'];
	$qrr="select * from taluka where t_name='".$tal."'";
	$tt=mysql_query($qrr);
	$ab=mysql_fetch_assoc($tt);
	$tid=$ab["t_id"];
	$v=$_POST['vname'];
	
	
     $qr= "insert into village (v_name,t_id) values ('$v','$tid')";
     $rs=mysql_query($qr);  
	//echo"success";
	}
	include "webpage_footer.php";
?>