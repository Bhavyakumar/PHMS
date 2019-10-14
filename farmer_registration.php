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
         if($("#f_address").length){
            control.makeTransliteratable(['f_address']);
        }
		 if($("#f_name").length){
            control.makeTransliteratable(['f_name']);
        }
        if($("#f_pincode").length){
            control.makeTransliteratable(['f_pincode']);
        }
        if($("#f_phone_no").length){
            control.makeTransliteratable(['f_phone_no']);
        }
        if($("#f_username").length){
            control.makeTransliteratable(['f_username']);
        }
       
      }
      google.setOnLoadCallback(onLoad);
    </script>

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


/*function data()
	{
		objAjax= new XMLHttpRequest();	
		tt=document.getElementById("fpassword").value;
		
		rt=document.getElementById("fcpassword").value;
			
		if(rt==tt)
		{
			
		}
		else
		{
			alert('તમારો પાસવર્ડ સરખો નથી ');
		}
			
		
				
	}

function v_name1(id)
		{
			//alert(id);
			var value= document.getElementById(id).value;
			//alert(value);
			if(value=="")
			{
				$("#"+id).css({"border":" 1px solid #dd4b39"});
				$('#'+id).next("span").empty();
				$('#'+id).after("<span style='color:#dd4b39;'>You can't leave this empty.</span>");
				document.getElementById("htext").value=1;
			}
			else
			{
				var re=/^[/\W/g\s_]{3,30}$/;
				if(re.test(value))
				{
					$("#"+id).css({"border":" 1px solid #f1f1f1"});
					$('#'+id).next("span").remove();
				}
				else
				{
					//$("#"+id).css({"border":" 1px solid #dd4b39"});
					$('#'+id).next("span").empty();
					$('#'+id).after("<span style='color:#dd4b39;'>આ ફિલ્ડમાં માત્ર અક્ષરો અને એ પણ ત્રણ કરતા વધારે અને '_'  નાખવાની મંજુરી છે!!!</span>");
					document.getElementById("htext").value=1;
				}
			}
		}
		*/
		function check()
				{
					if(document.getElementById('f_password').value === document.getElementById('f_cpassword').value)
					{
						
					} 
					else 
					{
						document.getElementById('f_password').value="";
						document.getElementById('f_cpassword').value="";
						  document.getElementById('f_password').focus();
						alert("તમારો પાસવર્ડ સરખો નથી");
					}
				}

		function pincode(){

     var Number = document.getElementById('f_pincode').value;
     var IndNum = /^[1-9][0-9]{5}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "પીનકોડ સરખો નાખો.");
        document.getElementById('f_pincode').value="";
        document.getElementById('f_pincode').focus();
    }

}
 function mobileNumber(){

     var Number = document.getElementById('f_phone_no').value;
     var IndNum = /^[0]?[6789]\d{9}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "મોબાઇલ નંબર સરખો નાખો.");
        document.getElementById('f_phone_no').value="";
        document.getElementById('f_phone_no').focus();
    }

}
function all_check()
			{
				document.getElementById("htext").value=0;
				v_name1("fname");
				value=document.getElementById("htext").value;
				value=parseInt(value);
				
				if(value==0)
				{
					return true;
		
				}
				else
				{
					return false;
				}
			}		
</script>
<div class="row">
	<?php
	//var_dump($_SESSION['id']);
	?>
	<div class="col-lg-offest-6 col-lg-6 col-md-offset-3 col-md-6">
	  <form action="farmer_reg.php" method="POST">
	  
			<div>
				<br><h3 align=center style="  font-family:UniversCondensed;">ખેડૂત રજીસ્ટ્રેશન ફોર્મ</h3 >
		</div>
	  
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="f_name" type="text" class="form-control" name="f_name" placeholder="તમારુ નામ નાખો"   onblur="v_name1(this.attributes['id'].value);" onchange="isalpha(this)" maxlength="50" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
		      <input id="f_address" type="text" class="form-control" name="f_address" placeholder="તમારુ સરનામું નાખો" required aria-describedby="basic-addon1" onkeyup="isadd(this)" required>
		    </div>
		    <br>
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
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="v_name" id='v_name' class="form-control" required>

			      	<option value="">ગામનું નામ પસંદ કરો</option>


	     		  </select>
	     	</div>
	     	<br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
		      <input id="f_pincode" type="text" class="form-control" name="f_pincode" placeholder="તમારુ પીનકોડ નાખો"  maxlength="6" title="3 થી ચાલુ થતા નંબર જ નખાશે" minlength="6" onchange="pincode(this)" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
		      <input id="f_phone_no" type="text" class="form-control" name="f_phone_no" placeholder="તમારુ મોબઈલ નંબર નાખો" maxlength="10" title="6,7,8 અને 9 થી ચાલુ થતા નંબર જ નખાશે" minlength="10" onchange="mobileNumber(this)" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="f_username" type="text" class="form-control" name="f_username" placeholder="તમારુ યુઝરનેમ નાખો"  required maxlength="25" minlength="3" onkeyup="isalphanum(this)" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		      <input id="f_password" type="password" class="form-control" name="f_password" placeholder=" પાસવર્ડ નાખો" required maxlength="25" minlength="3" onkeyup="isalphanum(this)" required>
		    </div>
		    
		    <br>
 			<div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		      <input id="f_cpassword" type="password" class="form-control" name="f_cpassword" placeholder=" પાસવર્ડ પુષ્ટિ નાખો" required maxlength="25" minlength="3" onkeyup="isalphanum(this)"   onchange="check()" required>
		    </div>
		    <br>
		    <div>
		     	<button type="submit" onclick="return all_check();" name="submit" id="submit">મોકલો</button>

		    </div>
		    <br>
		</form>
	</div>
</div>

<?php
     include("webpage_footer.php");
?>
