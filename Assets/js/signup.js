var ck_name = /^[A-Za-z ]{3,20}$/;
var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
var ck_password = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
var ck_mobile= /^[0]?[789]\d{9}$/;
var name =form1.username.value;
var email =form1.email1.value;

var pass2word=form1.password2.value;


function mobb()
{

var mob=form1.mobile1.value;
if(!ck_mobile.test(mob)) 

{ 
    document.getElementById("mob_1").style.visibility="visible";
    document.getElementById("bor_2").style.boxShadow="red 1px 1px 11px 1px";
  
 }
else
{
    document.getElementById("mob_2").style.visibility="visible";
  document.getElementById("bor_2").style.boxShadow="green 1px 1px 11px 1px";
}
}


function fact()
{
var name =form1.username.value;
if(!ck_name.test(name)) 
{
 document.getElementById('fac_1').style.visibility="visible";
document.getElementById("bor_1").style.boxShadow="red 1px 1px 11px 1px";
  
 }
else
{document.getElementById('fac_2').style.visibility="visible";
  document.getElementById("bor_1").style.boxShadow="green 1px 1px 11px 1px";

 }
 }

function ema(){
    var email =form1.email1.value;
    if(!ck_email.test(email))
    {
 document.getElementById('email_1').style.visibility="visible";
document.getElementById("bor_3").style.boxShadow="red 1px 1px 11px 1px";
  
 }
else{document.getElementById('email_2').style.visibility="visible";
  document.getElementById('bor_3').style.boxShadow="green 1px 1px 11px 1px";

 }
 }
 
 
 
function pas()
{
    var pass1word=form1.password1.value;

 if (!ck_password.test(pass1word)) 
{
  document.getElementById("pas_1").innerHTML= "You must enter a valid Password ";
  document.getElementById("pdw").style.boxShadow="red 1px 1px 11px 1px";
 }
 else{
       document.getElementById('pdw').style.boxShadow="green 1px 1px 11px 1px";
        document.getElementById("pas_1").innerHTML= "";
 }
}


 function pass()
 {
     var pass1word=form1.password1.value;
var pass2word=form1.password2.value;

 if(pass1word!=pass2word)
 {
 document.getElementById("pass_1").style.visibility="visible";
document.getElementById("bor_4").style.boxShadow="red 1px 1px 11px 1px";
  
 }
else
{
    document.getElementById("pass_2").style.visibility="visible";
  document.getElementById("bor_4").style.boxShadow="green 1px 1px 11px 1px";

 }
 }

function cl()
{
     document.getElementById("fac_1").style.visibility="hidden";
 document.getElementById("fac_2").style.visibility="hidden";
 document.getElementById("email_1").style.visibility="hidden";
 document.getElementById("email_2").style.visibility="hidden";
document.getElementById("mob_1").style.visibility="hidden";
 document.getElementById("mob_2").style.visibility="hidden";
 document.getElementById("pass_1").style.visibility="hidden";
 document.getElementById("pass_2").style.visibility="hidden";
 
}
function cl1()
 {
     document.getElementById("fac_1").style.visibility="hidden";
 document.getElementById("fac_2").style.visibility="hidden";
 
 }


function cl2()
{
 document.getElementById("mob_1").style.visibility="hidden";
 document.getElementById("mob_2").style.visibility="hidden";
   }


function cl3(){
     document.getElementById("email_1").style.visibility="hidden";
 document.getElementById("email_2").style.visibility="hidden";
 
}
function cl4()
{
    document.getElementById("pass_1").style.visibility="hidden";
 document.getElementById("pass_2").style.visibility="hidden";
}



function show()
{
    var pd=document.getElementById('pdw');
    var eye=document.getElementById('eye');

   if (pd.type=="password"){
       

    pd.type="text";}
    else{
    pd.type="Password";}
}

function validate()
{
    var mob=form1.mobile1.value;
var name =form1.username.value;
var email =form1.email1.value;
var pass1word=form1.password1.value;
var pass2word=form1.password2.value;
var errors = [];
if (!ck_name.test(name)) 
{
  errors[errors.length] = "You must enter valid Name .";
 }
if(!ck_mobile.test(mob)) {
    errors[errors.length]="you must enter vald no";
}
 if (!ck_email.test(email))
 {
  errors[errors.length] = "You must enter a valid email address.";
 }

 if (!ck_password.test(pass1word)) 
{
  errors[errors.length] = "You must enter a valid Password ";
 }
 if(pass1word!=pass2word)
 {
    
errors[errors.length] = "Password not match";

 }


    var securityQuestionElement = document.getElementById('securityQuestion');
    if(!securityQuestionElement.value) {  
        errors[errors.length]="You must select a Security Question";  
        securityQuestionElement.value = 'm'
        
    }

 if (errors.length > 0) 
{

  Errors(errors);
  return false;
 }
return true;
}

function Errors(errors)
{
 var msg = "Please Enter Valide Data...\n";
 for (var i = 0; i<errors.length; i++) 
{
 var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
}
 alert(msg);
}
