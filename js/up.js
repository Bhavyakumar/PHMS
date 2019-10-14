 function abc(mmyform)
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