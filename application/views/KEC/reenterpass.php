<?php include('header.php');?>

<html>
<head>
<style>
      #form{
     box-shadow: 5px 10px 18px #888888;
     
  padding: 6px;
    margin-top: 10%;
}
 input{
    margin-bottom:3%;}
 #from .btn{
    margin-left: 10%;
    box-shadow: 2px 2px 5px #888888;
}
      </style>
</head>
<body>
<div class="row"style="margin-bottom:37px;width:96%;">
          <div class="col-lg-4">
             </div>
            <div class="col-lg-4">
               <?php echo form_open('admin/login','id="form" style="margin-top:5%;margin-bottom:91px;"');?>
        <form >
  <fieldset>
 
    <div class="form-group">
      
      <?php echo form_label('New Password','InputPassword2');?>
      <?php echo form_password(['class'=>'form-control','placeholder'=>"Enter New password",'id'=>"exampleInputpassword2"]);?>
      
       
       
       <?php echo form_label('Re-enter Password','InputPassword2');?>
       <?php echo form_password(['class'=>'form-control','placeholder'=>"Re-enter Password",'id'=>"exampleInputpassword3"]);?>
       
      
      
    </div>
   
    </fieldset>
    <?php echo form_button(['class'=>"btn btn-info",'type'=>"submit",'content'=>"Submit"]);?>
    <?php echo form_button(['class'=>"btn btn-info",'type'=>"button",'content'=>"Back"]);?>
    
 
</form>
</div>
<div class="col-lg-4">
             </div>
</div>
</body>
</html>

<?php include('footer.php');?>
