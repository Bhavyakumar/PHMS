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
<script type="text/javascript">


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
	var objnewAjax;
function gettaluka1()
	{
		objAjax= new XMLHttpRequest();
		uname=document.getElementById("d_name").value;
		//alert(uname);
		//url="gettaluka.php?u="+uname;
		url="gettaluka1.php?u="+uname;
		//objAjax.open("GET","gettaluka.php?u="+uname,true);
		objAjax.open("GET",url,true);
		objAjax.send();
		objAjax.onreadystatechange=fillEmp;
	}
	
		
		function fillEmp()
	{
	
		if (objAjax.readyState==4)
		{
			
			
			objCmb=document.getElementById("t_name");
			//alert("hi");
			len=objCmb.length;
			for (i=1;i<=len;i++)
			{
				objCmb.remove(i);
			}			
             //alert("hi");
			str=objAjax.responseText;
			//alert()
			eval(str);
			//alert("hi");
		}
		
	} 


	var objnewAjax;
	function getvillage1()
	{ 
       	objnewAjax= new XMLHttpRequest();
		uname=document.getElementById("t_name").value;
		
		objnewAjax.open("GET","getvillage1.php?u="+uname,true);

		objnewAjax.send();
		objnewAjax.onreadystatechange=fillEmpo;
	}
	
		
	function fillEmpo()
	{
		if (objnewAjax.readyState==4)
		{
			objCm=document.getElementById("v_name");
			//alert(objCmb);
			len=objCm.length;
			for (i=1;i<=len;i++)
			{
			objCm.remove(i);
			}			
			str=objnewAjax.responseText;
			//alert(alert);
			eval(str);
		}
	} 			
</script>
<div class="row">
	<?php
	
	$rt=$_SESSION['fid'];

			$qr="select * from farmer where f_id='".$rt."'";

			$rt=mysql_query($qr);

			$tt=mysql_fetch_assoc($rt);
			$_SESSION["taluka"]=$tt["t_name"];
			$_SESSION["village"]=$tt["v_name"];


?>
	<div class="col-lg-offest-6 col-lg-6 col-md-offset-3 col-md-6">
	  <form action="farmer_up.php" method="POST">
	  
			<div>
				<?php
					if(isset($_GET["success"]))
					{
						echo"સુધારો સફળતાપૂર્વક થઇ ગયો છે";
					}
				?>
				<br><h3 align=center style="  font-family:UniversCondensed;">માહિતી  સુધારો </h3 >
		</div>
	  
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="f_name" type="text" class="form-control" name="f_name" value='<?=$tt["f_name"] ?>'   onchange="isalpha(this)" maxlength="50" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
		      <input id="f_address" type="text" class="form-control" name="f_address" value='<?=$tt["f_address"] ?>' required>
		    </div>
		    <br>
		    <div class="input-group">
		    	<span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="d_name" id="d_name" class="form-control" onchange="gettaluka1()" required>
			    
									<option  value=''>---Select---</option>
									<?php
										include("connection.php");
										$qry="select dis_name from district;";
										$rc=mysql_query($qry);
										while($data=mysql_fetch_assoc($rc))
										{
											if($data["dis_name"]==$tt["dis_name"])
											{
												echo"<option selected>".$data["dis_name"]."</option>";	
											}
											else
											{
												echo"<option>".$data["dis_name"]."</option>";	
											}

										}
									?>
				</select>

		    </div>

		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="t_name" id='t_name'  class="form-control" onchange="getvillage1()" required>

			      	<option value='<?=$tt["t_name"]?>'>---Select---</option>


	     		  </select>
	     	</div>
	     	<br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
			      <select name="v_name" id='v_name' class="form-control" required>

			      	<option value=''>---Select---</option>


	     		  </select>
	     	</div>
	     	<br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
		      <input id="f_pincode" type="text" class="form-control" name="f_pincode" value='<?=$tt["f_pincode"] ?>' required onchange="pincode(this)" minlength="6">
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
		      <input id="f_phone_no" type="text" class="form-control" name="f_phone_no" value='<?=$tt["f_phone_no"] ?>'required onchange="mobileNumber(this)" minlength="10">
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="f_username" type="text" class="form-control" name="f_username" value='<?=$tt["f_username"] ?>'  required   onkeyup="isalphanum(this)" maxlength="25" minlength="3">
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		      <input id="f_password" type="password" class="form-control" name="f_password" value='<?=$tt["f_password"] ?>' required maxlength="25" minlength="3">
		    </div>
			
			 <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		      <input id="f_cpassword" type="password" class="form-control" name="f_cpassword"  required maxlength="25" onkeyup="isalphanum(this)"  onchange="check()"  minlength="3">
		    </div>
		    
		    <br>
 			
		    <div>
		     	<button type="submit" onclick="return all_check();" name="submit" id="submit">મોકલો</button>

		    </div>
		    <br>
		</form>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var dis = $("#d_name").val();
		
		gettaluka1();
		getvillage1();
		//$("#t_name").attr('value','ધોળકા').attr('selected', 'selected');
		//$("#t_name").val("ધોળકા");
		//$('#t_name option[value="ધોળકા"]').attr('selected','selected');
		

	});	
</script>
<?php
     include("webpage_footer.php");
?>
