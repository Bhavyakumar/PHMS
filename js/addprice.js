 

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
                  if(document.getElementById('pass').value === document.getElementById('conf').value)
                  {

                  } 
                  else 
                  {
                    alert("તમારો પાસવર્ડ મેળ ખાતો નથી");
                  }
                }
                function validateaddproductprice(mmyform)
                {

                  myform=document.forms[mmyform];
                  if(myform.type.value=="" || myform.crop.value==""|| myform.var.value=="" || myform.a.value=="" ||  myform.b.value=="" ||  myform.c.value=="" ||  myform.d.value=="" )
                  {
                   alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    }   
                    function bill(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.app.value=="")
                      {
                       alert("બીલ નો નંબર નાખો");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    }   
                    function addcon(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.type.value=="" || myform.crop.value=="" || myform.var.value==""  || myform.duration.value==""|| myform.qty.value=="" || myform.price.value=="" || myform.nur.value=="" || myform.land.value=="" || myform.tran.value=="" || myform.ferti.value=="" || myform.irr.value=="" || myform.har.value=="" ||myform.iw.value=="" )
                      {
                        alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    }   
                    function addlocation(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.date.value=="" || myform.time.value=="")
                      {
                        alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        return false; 
                      }

                    }  
                    function nursary(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.sbpd.value=="" || myform.sbed.value==""|| myform.fym.value=="" || myform.sqty.value=="" ||  myform.sprice.value=="" ||  myform.weeding.value=="" ||  myform.labour.value=="" ||  myform.seedling.value=="" )
                      {
                       alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    } 
                    function land(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.cultidate.value=="" || myform.cultiprice.value=="")
                      {
                       alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    } 
                    function plant(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.pdate.value=="" || myform.lcost.value==""|| myform.spacing.value=="")
                      {
                       alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    } 
                    function pest(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.tdate.value=="" || myform.tname.value==""|| myform.tprice.value=="" || myform.lcost.value=="")
                      {
                       alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    } 
                    function ferti(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.fdate.value=="" || myform.fname.value==""|| myform.fcost.value=="" || myform.lcost.value=="")
                      {
                       alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    } 
                    function irr(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.irrdate.value=="" || myform.irrcost.value==""|| myform.irrlab.value=="")
                      {
                       alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    } 
                    function har(mmyform)
                    {

                      myform=document.forms[mmyform];
                      if(myform.hdate.value=="" || myform.hyeild.value==""|| myform.lcost.value==""|| myform.host.value=="")
                      {
                       alert("કેટલીક વસ્તુ ભરવાની બાકી રહી ગયી છે.");
                        // myform.onSubmit=false;
                        return false;
                        // 
                      }

                    } 
                   



