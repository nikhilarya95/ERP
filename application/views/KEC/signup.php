<?php include ('header.php');?>
<html>
<head>
<style>
      #form{
     box-shadow: 5px 10px 18px #888888;
     
  padding: 6px;
    margin-top: 10%;
}
 
 #from .btn{
    margin-left: 10%;
    box-shadow: 2px 2px 5px #888888;
}


.form-header{
    margin: -6px -6px 20px;
    padding: 10px 30px 10px;
    text-align: center;
    
    background-color: #07b5fa;
    border-bottom: 1px solid #eee;
    color: #fff;
}
.form-header h2{
    font-size: 40px;
    font-weight: bold;
    font-family:'times-roman';
}

.f
{
    position: relative;
    left:365px;
    top:35px;
    font-size: 20px;

}

.f:active{
    color:dodgerblue;
}
.fac_b{
    position: relative;
    left:160px;
    top:15px;
    font-size: 21px;
 color:green;

}
.fac_a{
    position: relative;
    left:160px;
    top:15px;
    font-size: 21px;
    color:rgb(156, 0, 0);

}
.sec_a{
    position: relative;
    left:200px;
    top:40px;
    font-size: 21px;
 color:green;

}
.sec_b{
    position: relative;
    left:180px;
    top:40px;
    font-size: 21px;
    color:rgb(156, 0, 0);

}
.pass_b{
    position: relative;
    left:300px;
    top:35px;
    font-size: 41px;
 color:green;

}
.pass_a{
    position: relative;
    left:315px;
    top:35px;
    font-size: 41px;
    color:rgb(156, 0, 0);

}
.mo_b{
    position: relative;
    left:320px;
    top:35px;
    font-size: 21px;
 color:green;

}
.mo_a{
    position: relative;
    left:337px;
    top:35px;
    font-size: 21px;
    color:rgb(156, 0, 0);

}
.emai_b{
    position: relative;
    left:322px;
    top:35px;
    font-size: 21px;
 color:green;

}
.emai_a{
    position: relative;
    left:340px;
    top:35px;
    font-size: 21px;
    color:rgb(156, 0, 0);

}



      </style>
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
      <link href="<?php base_url();?>Assets/css/signup.css" rel="stylesheet" type="text/css">
<!--<script >
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
if(!ck_password.test(pass2word))
{document.getElementById("pass_1").style.visibility="visible";
document.getElementById("bor_4").style.boxShadow="red 1px 1px 11px 1px";
  
}
 else if(pass1word!=pass2word)
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
function signup()
{
if(!form1.terms.checked)
{
    document.getElementById("sign_up").style.visibility="hidden";
}
else{
    document.getElementById("sign_up").style.visibility="visible";
}
}
function sign()
{
    document.getElementById("sign_up").style.visibility="hidden";
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

 if (!ck_pass1word.test(pass2word)) 
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



</script>-->
</head>
<body onload="cl();sign();">
<div class="rows">


    <div class="col-lg-6"style="margin-left:27%">
        <div class="form-group" style="margin-right:70px;">
    
            <?php echo form_open('admin/sendmail','id="form"','name="form1"');?>
		    <div class="form-header">
			    <h2>Sign Up</h2>
		    </div>
            <div class="form-group" style="margin-left:60%;">
                <?php echo form_label("Faculty ID");?>
                <?php echo form_input(['class'=>"form-control",'type'=>"text"]);?>
            </div>

            <div class="form-group">
			
                <?php echo form_label('Faculty Name');?>
            
            
                <div class="rows">
                    <div class="col-lg-1"style="padding:2px;margin-left:15px;width:15%">
                        <select class="form-control" name="tle" >
                        <option >Mr</option>
                        <option >Dr</option>
                        <option >Ms</option>
                        </select> 
                    </div>

                    <div class="col-lg-4"style="padding:2px;width:40%;">
                        <!--<i class="fa fa-times fac_a "id="fac_1"></i>
                        <i class="fa fa-check fac_b"id="fac_2"></i>-->
                        <?php echo  form_input(['class'=>"form-control ",'type'=>"text",'id'=>"bor_1",'placeholder'=>"Enter First Name",'value'=>set_value('firstname'),'onblur'=>"fact();",'onfocus'=>"cl1();",' name'=>"firstname"]);?>
                    </div>
            
                    <div class="col-lg-4" style="padding:2px;width:39%;">
            
                        <?php echo  form_input(['class'=>"form-control ",'type'=>"text",'id'=>"bor_1",'placeholder'=>"Enter Last Name",'onblur'=>"fact();",'value'=>set_value('lastname'),'onfocus'=>"cl1();",' name'=>"lastname"]);?>
                    </div>
                </div>
                <?php echo form_error('firstname') ?>
                <?php echo form_error('lastname') ?>
            </div>

            <div class="form-group">
			
             <?php echo form_label('Mobile Number');?>
                <!-- <i class="fa fa-times mo_a"id="mob_1"></i>
                <i class="fa fa-check mo_b"id="mob_2"></i>-->
        	
             <?php echo  form_input(['class'=>"form-control",'type'=>"text",'id'=>"bor_2",'value'=>set_value('mobile1'),'placeholder'=>"Enter 10 digit mobile",'onblur'=>"mobb();",'onfocus'=>"cl2();",' name'=>"mobile1"]);?>
               <?php echo form_error('mobile1') ?>
            </div>

            <div class="form-group">
			
                <?php echo form_label('Email ID');?>
                <!-- <i class="fa fa-times emai_a"id="email_1"></i>
                <i class="fa fa-check emai_b"id="email_2"></i>-->
        	
                <?php echo  form_input(['class'=>"form-control",'type'=>"email",'value'=>set_value('email1'),'id'=>"bor_3",'placeholder'=>"eg:-xyz@kongu.edu",'onblur'=>"ema();",'onfocus'=>"cl3();",' name'=>"email1"]);?>
                <?php echo form_error('email1') ?>
            </div>

		    <div class="form-group">
			
                <?php echo form_label('Password');?>
            
                <!-- <i onclick="show();" class="fa fa-eye f" id="eye"></i>-->
            
                <?php echo  form_password(['class'=>"form-control pas1",'type'=>"password",'value'=>set_value('password1'),'id'=>"pwd",'placeholder'=>"atleast 1 uppercase,1 lowercase,1 digit,1 symbol",'onblur'=>"pas();",'onfocus'=>"cl6();",' name'=>"password1"]);?>
                <!-- <p id="pas_1"></p>--><?php echo form_error('password1') ?>
         </div>

		    <div class="form-group">
			
                <?php echo form_label('Confirm Password');?>
                <!--<i class="fa fa-times pass_a "id="pass_1"></i>
             <i class="fa fa-check pass_b"id="pass_2"></i>-->
             <?php echo  form_password(['class'=>"form-control",'type'=>"password",'value'=>set_value('password2'),'id'=>"bor_4",'placeholder'=>"atleast 1 uppercase,1 lowercase,1 digit,1 symbol",'onblur'=>"pas();",'onfocus'=>"cl4();",' name'=>"password2"]);?>
             <?php echo form_error('password2') ?>
            </div>  
        
            <div class="form-group">
			
            <?php echo form_label('Security Question');?>
            <select class="form-control" name="Security Question" id="securityQuestion"><?php echo form_error('SecurityQuestion') ?>
            <option>select one</option>
            <option value="m">what is your pet name?</option>
            <option value="p">what is your favorate city name?</option>
            <option value="c">what is your first teacher name?</option>
            <option value="q">what is your favorate colour name?</option>
            <option value="r" >what is your favorate book name?</option>
            </select> 
            <?php echo  form_input(['class'=>"form-control",'type'=>"text",'value'=>set_value('security_answer'),' name'=>"security_answer"]);?>
       
            </div>

            <div class="form-group">
			
                <select class="form-control" name="Security Question" id="securityQuestion">
                  <option>Select One</option>
                    <option value="m">what is your pet name?</option>
                    <option value="p">what is your favorate city name?</option>
                    <option value="c">what is your first teacher name?</option>
                    <option value="q">what is your favorate colour name?</option>
                    <option value="r" >what is your favorate book name?</option>
                </select> <?php echo form_error('securityQuestion') ?>
                <?php echo  form_input(['class'=>"form-control",'type'=>"text",'value'=>set_value('security_answer1'),' name'=>"security_answer1"]);?>
           
            </div>
               
            <div class="form-group">
        
            <?php echo form_checkbox(['terms','I accept the','false']);?>
            <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		    </div>
		    <div class="form-group">
			    <button onClick="validate();" id="sign_up" type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
		    </div>	
        </div>
	<div class="text-center small">Already have an account? <a href="http://localhost:8080/kec_erp/">Login here</a></div>
    </div>
    
    </div>


</body>
<?php include ('footer.php');?>
</html>
