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
         if($("#s_address").length){
            control.makeTransliteratable(['s_address']);
        }
		 if($("#s_name").length){
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
	/*
function v_name1(id)
		{
			//alert(id);
			var value= document.getElementById(id).value;
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
					$('#'+id).after("<span style='color:#dd4b39;'>આ ફિલ્ડમાં માત્ર ગુજરાતી અક્ષરો અને એ પણ ત્રણ કરતા વધારે અને '_'  નાખવાની મંજુરી છે!!!</span>");
					document.getElementById("htext").value=1;
				}
			}
		}*/function pincode(){

     var Number = document.getElementById('s_pincode').value;
     var IndNum = /^[1-9][0-9]{5}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "પીનકોડ સરખો નાખો.");
        document.getElementById('s_pincode').value="";
        document.getElementById('s_pincode').focus();
    }

}
  function mobileNumber(){

     var Number = document.getElementById('s_phoneno').value;
     var IndNum = /^[0]?[6789]\d{9}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "મોબાઇલ નંબર સરખો નાખો.");
        document.getElementById('s_phoneno').value="";
        document.getElementById('s_phoneno').focus();
    }

}
function check()
				{
					if(document.getElementById('s_password').value === document.getElementById('f_cpassword').value)
					{
						
					} 
					else 
					{
						document.getElementById('s_password').value="";
						document.getElementById('f_cpassword').value="";
						  document.getElementById('s_password').focus();
						alert("તમારો પાસવર્ડ મેળ ખાતો નથી");
					}
				}
function email(){

     var Number = document.getElementById('s_email').value;
     var IndNum = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z]+\.)+([a-zA-Z]{2,3})$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "ઈમૈલ સરખું નાખો .");
        document.getElementById('s_email').value="";
        document.getElementById('s_email').focus();
    }

}
	function all_check()
			{
				document.getElementById("htext").value=0;
				v_name1("sanme");
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
	<div class="col-lg-offest-6 col-lg-6 col-md-offset-3 col-md-6">
	  <form action="scientist_reg.php" method="POST">
			<?php
								if (isset($_GET["msg"]))
								{
									echo"<div class='alert alert-danger' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b> ઈમૈલ અંદર રજીસ્ટર્ડ થયેલું છે";
									echo"</div>";
								}
								if (isset($_GET["msg1"]))
								{
									echo"<div class='alert alert-danger' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b> યુઝરનેમ અંદર રજીસ્ટર્ડ થયેલું છે";
									echo"</div>";
								}
								?>
	  	<div>
				<br><h3 align=center style="  font-family:UniversCondensed;">વૈજ્ઞાનિક રજીસ્ટ્રેશન ફોર્મ</h3 >
		</div>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="s_name" type="text" class="form-control" name="s_name" placeholder="તમારુ નામ નાખો
		      " onblur=" v_name1(this.attributes['id'].value)" onchange="isalpha(this)" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
		      <input id="s_address" type="text" class="form-control" name="s_address" placeholder="તમારુ સરનામું નાખો" required aria-describedby="basic-addon1" onkeyup="isadd(this)">
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
		      <input id="s_pincode" type="text" class="form-control" name="s_pincode" placeholder="તમારુ પીનકોડ નાખો" size="6" maxlength="6" onchange="pincode(this)" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
		      <input id="s_phoneno" type="text" class="form-control" name="s_phoneno" placeholder="તમારુ મોબઈલ નંબર નાખો"  size="10" maxlength="10" title="6,7,8 અને 9 થી ચાલુ થતા નંબર જ નખાશે અને એ પણ પૂર્ણાંક જ!!" onchange="mobileNumber(this)" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="s_email" type="email" class="form-control" name="s_email" placeholder="તમારુ ઈમેલ નાખો"  required title="યોગ્ય ફોર્મેટમાં ઈમૈલ નાખો" onchange="email(this)" required>
		    </div>
		    <br>
			<div class="input-group">
		      	<span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="s_type" id="s_tp" class="form-control" required>
			      	<option>પાકનો પ્રકાર પસંદ કરો</option>
	     			<?php
			     			$query= "select * from planttype";
		                    $result=mysql_query($query);

			     			while($arr=mysql_fetch_assoc($result))
					     	{

					     		//$st = $arr['type_id'];
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
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="s_username" type="text" class="form-control" name="s_username" placeholder="તમારુ યુઝરનેમ નાખો" onkeyup="isalphanum(this)" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		      <input id="s_password" type="password" class="form-control" name="s_password" placeholder=" પાસવર્ડ નાખો" onkeyup="isalphanum(this)" required>
		    </div>
		    <br>
			<div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		      <input id="f_cpassword" type="password" class="form-control" name="f_cpassword" placeholder=" પાસવર્ડ પુષ્ટિ નાખો" required maxlength="25" minlength="3" onkeyup="isalphanum(this)"   onchange="check()" required>
		    </div>
		    <br><div>
		    	<button type="submit" name="submit"  onclick="return all_check();" >મોકલો</button>

		    </div>
		    <br>
		</form>
	</div>
</div>

<?php
     include("webpage_footer.php");
?>
