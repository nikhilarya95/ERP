
<head>
<style>
  #form{
     box-shadow: 5px 10px 18px #888888;
     
  padding: 6px;
    
}
 input{
    margin-bottom: 3%;}
 #from .btn{
    margin-left: 10%;
    box-shadow: 2px 2px 5px #888888;
}

  </style>
</head>
<body>

<?php echo form_open('Admin/login','id="form"');?>
  <fieldset>
 <div class="form-group">
      <?php if($error=$this->session->flashdata('Login_failed')): ?>
      <div class="row">
      <div class="col-lg-12"style="margin-left:80px;">
        <p class="text-danger"><?php echo $error ?></p>
      </div>
      </div>
<?php endif;?>
      <?php echo form_label('Email ID','InputEmail');?>
      <?php echo  form_input(['class'=>"form-control",'type'=>"email",'id'=>"email_1",'placeholder'=>"Enter email",'value'=>set_value('emil'),'name'=>"emil"])?>
     <?php echo form_error('emil') ?>
    </div>
    <div class="form-group">
      
      <?php echo form_label('Password','password');?>
      <?php echo  form_password(['class'=>"form-control",'id'=>"pass_1",'placeholder'=>"Enter Password",'value'=>set_value('pass'),'name'=>"pass"]);?>
      <?php echo form_error('pass') ?>
    </div>
   
    </fieldset>
    
    
    <?php echo form_button(['class'=>"btn btn-info",'type'=>"submit",'content'=>"Submit",'onclick'=>""]);?>
 <fieldset class="form-group">
 
     <br>
      <p>New user? <?php echo anchor('User/signup','Click here');?></p>
     <?php echo anchor('User/forget/','Forget password') ?>           <?php echo anchor('User/cngpass','Change password','class="p1"') ;?> 
     
    </fieldset>
    <?php form_close()?>
</body>
