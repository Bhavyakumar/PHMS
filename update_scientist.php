<?php
     include("webpage_header.php");
     include "connection.php";
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
<script type="text/javascript">


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
						alert("તમારો પાસવર્ડ સરખો નથી");
					}
				}

		function pincode(){

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
			//alert(objCm);
			eval(str);
		}
	} 

		
</script>
<div class="row">
<?php
	
	$rt= $_SESSION['sid'];
	//echo $rt;

			$qr="select * from scientist where s_id='".$rt."'";

			$rt=mysql_query($qr);

			$tt=mysql_fetch_assoc($rt);
			$_SESSION["taluka"]=$tt["t_name"];
			$_SESSION["village"]=$tt["v_name"];


?>

	<div class="col-lg-offest-6 col-lg-6 col-md-offset-3 col-md-6">
	  <form action="scientist_up.php" method="POST">
			
	  	<div>
				<br><h3 align=center style="  font-family:UniversCondensed;">માહિતી સુધારવા </h3 >
				<?php
					if(isset($_GET["succes"]))
					{
						echo"સુધારો સફળતાપૂર્વક થઇ ગયો છે";
					}
				?>
				
		</div>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="s_name" type="text" class="form-control" name="s_name" value='<?=$tt["s_name"] ?>'  onchange="isalpha(this)">
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
		      <input id="s_address" type="text" class="form-control" name="s_address" value='<?=$tt["s_address"]?>' aria-describedby="basic-addon1" onkeyup="isadd(this)">
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
		      <input id="s_pincode" type="text" class="form-control" name="s_pincode" value='<?=$tt["s_pincode"] ?>'  size="6" maxlength="6" onchange="pincode(this)" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
		      <input id="s_phoneno" type="text" class="form-control" name="s_phoneno" value='<?=$tt["s_phoneno"] ?>'  maxlength="10" onchange="mobileNumber(this)" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="s_email" type="email" class="form-control" name="s_email" value='<?=$tt["s_email"] ?>'  required title="યોગ્ય ફોર્મેટમાં ઈમૈલ નાખો" onchange="email(this)">
		    </div>
		    <br>
			<div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		      <input id="s_username" type="text" class="form-control" name="s_username" value='<?=$tt["s_username"] ?>' onkeyup="isalphanum(this)" required>
		    </div>
		    <br>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		      <input id="s_password" type="password" class="form-control" name="s_password" value='<?=$tt["s_password"] ?>' required >
		    </div>
		    <br>
			<div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		      <input id="f_cpassword" type="password" class="form-control" name="f_cpassword" required maxlength="25" minlength="3" onkeyup="isalphanum(this)"   onchange="check()" required">
		    </div>
		    <br><div>
		    	<button type="submit" name="submit"  onclick="return all_check();" >મોકલો</button>

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