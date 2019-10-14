 function cpp1(mmyform)
 {

  myform=document.forms[mmyform];
  if(myform.old.value=="" || myform.newc.value=="" || myform.new.value=="")
  {
   alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    } 
                    function upp1(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.name.value=="" || myform.add.value=="" || myform.phno.value=="" || myform.username.value=="" )
                      {
                       alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    } 
                     function validate(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.crop.value=="")
                      {
                       alert("પાક નું નામ નાખો");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    }  