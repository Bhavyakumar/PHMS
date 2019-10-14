//function cheak match password or not
function check() {
	if(document.getElementById('password').value === document.getElementById('confirm_password').value) {
        //document.getElementById('message').innerHTML = "";
    } else {
    	alert("તમારો પાસવર્ડ મેળ ખાતો નથી");
    	/* document.getElementById('message').innerHTML = "તમારો પાસવર્ડ મેળ ખાતો નથી "; */
    }
}
//function cheak phone no valid or not 
function checklength(el)
{
	if(el.value.length !=10) {
		alert("તમારો ફોન નં બરાબર નથી.");
	} 
}
//function cheak all character latter or not
function allLetter(uname)  
{   
	var letters = /^[A-Za-z]+$/;
	if(uname.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('નામ માત્ર મૂળાક્ષર અક્ષરો જ જોઈએ');  
		uname.focus();  
		return false;  
	}  


}

//function cheak all character are alphanumerical or not
function alphanumeric(uadd)  
{   
	var letters = /^[0-9a-zA-Z]+$/;  
	if(uadd.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('સરનામું ફક્ત મૂળાક્ષર કે અકળા માં હોવું જોઈએ.'); 
		uadd.focus();  
		return false;  
	}  
} 
//function check field empty or not
/*function emptyfield(emp) {
    var x = emp.value;
    if (x == null || x == "") {
        alert("આ ભરવાનું બાકી છે.");
        return false;
    }
}*/
