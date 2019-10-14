
                function isadd(ele)
                {
					var r=/[^a-z,A-Z,\u0a81-\u0aef,0-9,-:_\s]+/i;
					//var r=/^[0-9a-zA-Z]+$/;
                   // var r=/\W$/i;
				   //\u0a81-\u0aef
				   //\u0ae6-\u0aef	
                    if(r.test(ele.value))
                     {
                         alert("અહીં ફક્ત  મૂળાક્ષરો અને આંકડા  જ  દાખલ કરો .");
                         ele.value="";
                         ele.focus();
                     }
                }
				function isalphanum(ele)
                {
					var r=/[^a-z,A-Z,\.,\u0a81-\u0aef,0-9,_\s]+/i;
					//var r=/^[0-9a-zA-Z]+$/;
                   // var r=/\W$/i;
				   //\u0a81-\u0aef
				   //\u0ae6-\u0aef	
                    if(r.test(ele.value))
                     {
                         alert("અહીં ફક્ત  મૂળાક્ષરો અને આંકડા  જ  દાખલ કરો .");
                         ele.value="";
                         ele.focus();
                     }
                }
				function checklength(el)
				{
					if(el.value.length !=10) 
					{
						alert("તમારો ફોન નં બરાબર નથી.");
					} 
				}
                function isalpha(ele)
                {
					//var r= /^[-'a-z\u0a81-\u0ae6]{1,20}$/i;
					//var r = [\u0a81-\u0ae6];
                  // var r=/[^a-z,A-Z]+/i;
					//var r=/[^a-z,A-Z,\u0a81-\u0ae6,_\s]+/i;
                    var r=/[^a-z,A-Z,\u0a81-\u0ae6,_\s]+/i;
                    if(r.test(ele.value))
                     {
                         alert("અહીં ફક્ત  મૂળાક્ષરો જ  દાખલ કરો .");
                         ele.value="";
                         ele.focus();
                     }
                }
                function isnum(ele)
                {
					var r=/[^\u0ae6-\u0aef,0-9]+/i;
                   // var r=/\D$/i;
                    if(r.test(ele.value))
                     {
                         alert("અહીં ફક્ત  આંકડા  જ  દાખલ કરો .");
                         ele.value="";
                         ele.focus();
                     }
                }
				function check()
				{
					if(document.getElementById('password').value === document.getElementById('confirm_password').value)
					{
						
					} 
					else 
					{
						alert("તમારો પાસવર્ડ મેળ ખાતો નથી");
					}
				}
               

                function validateform(mmyform)
                {
                   // var em=/[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z]+/;
                    myform=document.forms[mmyform];
                    if(myform.type.value=="" ||myform.name.value=="" || myform.add.value=="" || myform.mno.value=="" || myform.username.value=="" || myform.pass.value=="" || myform.cpass.value=="")
                     {
                         alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                         return false;
                         //  myform.onsubmit=false;
                     }
                }
                function validateformforgot(mmyform)
                {
                   // var em=/[a-zA-Z0-9]+@[a-zA-Z0-9]+.[a-zA-Z]+/;
                    myform=document.forms[mmyform];
                    if(myform.uname.value=="" ||myform.txtpass.value=="" || myform.txtpassc.value=="")
                     {
                         alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                         return false;
                         //  myform.onsubmit=false;
                     }
                }

                function validateloginform(mmyform)
                {

                    myform=document.forms[mmyform];
                    if(myform.txtname.value=="" || myform.txtpass.value=="")
                     {
                         alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
						 return false;
                     }
                     
                }
                             

  /*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


