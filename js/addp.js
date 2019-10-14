
function check1()
{
  if(document.getElementById('p').value === document.getElementById('cpp').value)
  {

  } 
  else 
  {
    alert("તમારો પાસવર્ડ મેળ ખાતો નથી");
  }
} 
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
         function checklength(el)
         {
          if(el.value.length !=10) 
          {
            alert("તમારો ફોન નં બરાબર નથી.");
          } 
        }
        function isalphanum(ele)
        {
          var r=/[^a-z,A-Z,\u0a81-\u0aef,0-9,_\s]+/i;
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
         function isalphaa(ele)
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
                 function validateaddproduct(mmyform)
                 {

                  myform=document.forms[mmyform];
                  if(myform.type.value=="" || myform.crop.value==""|| myform.var.value=="" || myform.fileA.value=="" || myform.fileB.value=="" ||myform.fileC.value=="" || myform.fileD.value=="" || myform.a.value=="" ||  myform.b.value=="" ||  myform.c.value=="" ||  myform.d.value=="" )
                  {
                   alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    }
                      


