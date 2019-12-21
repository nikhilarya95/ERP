<!DOCTYPE html>
<html>
    <head>
        <style>
           body {
            background-color:rgba(0, 148, 143, 1);}</style>
<title>registraton form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    .w{
    width: 33%;
    padding-right: 20px;
    }
    </style>
</head>
<body>

    
<div class="container-fluid ">

<div class="col-md-10 py-4 ">

        

    <form   method="POST">
    <div class="form-group "  >
        <div class="form-row">
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'First Name']); ?>
           </div><div class="col"> <?php echo form_input(['class'=>'form-control','placeholder'=>'Middle Name']); ?>
           </div><div class="col"> <?php echo form_input(['class'=>'form-control','placeholder'=>' Last Name']); ?>
           </div></div><br>
           <div class="form-row">
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Disignation']); ?></div>
        <div class="col">
            
        <?php echo form_input(['id'=>'ag','name'=>'agg','class'=>'form-control','type'=>'date']); ?></div>
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Age']);?></div></div><br>
        <div class="form-row">
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>' Email-id']); ?></div>
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Alternate Email-id']); ?></div></div><br>


        <div class="form-row">
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>' Mobile Number']);?></div>
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Alternate Moble Number']); ?></div>
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Landline Number']); ?></div></div><br>

        <div class="form-row">
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>' Aadhar Number']); ?></div>
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>' Pan Number']); ?></div>
        <div class="col">  
            <?php echo form_input(['class'=>'form-control','placeholder'=>' UAN Number']); ?></div></div><br>
        <div class="form-row">
        <div class="col">
        <?php echo form_dropdown(['class'=>'form-control','selected'=>'fff','options'=>[' Nationality','Indian','Other']]);?>
           </div>
           <div class="col">
           <?php echo form_dropdown(['class'=>'form-control','selected'=>'fff','options'=>[' community','hindus' ,'muslims','sikhs','christians']]);?>
           </div>
           <div class="col">
           <?php echo form_input(['class'=>'form-control','placeholder'=>'Cast']); ?>
           </div></div><br>
           <div class="form-row">
           <div class="col-sm-4">
           <?php echo form_dropdown(['class'=>'form-control','selected'=>'fff','options'=>['Gender','Male' ,'Female']]);?></div>
           <div class="col-sm-4">
           <?php echo form_dropdown(['class'=>'form-control','selected'=>'fff','options'=>['Merital Status','Married' ,'Unmarried']]);?></div>
          <div class="col-sm-4">
              <fieldset class=" form-group border border-light" style="width:90%;border: 1px solid #e0e0e0;margin-left:10px;">
              <legend class="the-legend"  style="border-style: none;
    border-width: 0;
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 0;
    width: auto;
    margin-left:10px;
    ">FAMILY</legend>
  <input class="form-control col-10"style="margin-left:10px;" type="text" placeholder="Spouse Name"><br>
  <input class="form-control col-10 "style="margin-left:10px" type="text"placeholder="Spouse Occupation"><br>
  <input class="form-control col-10"style="margin-left:10px;" type="text" placeholder="No of Child"><br>
  
 </fieldset>
                  
</div></div></div> <br>
<div class="col-sm-12">
              <fieldset class=" form-group border border-light" style="width:100%;border: 1px solid #e0e0e0;">
              <legend class="the-legend"  style="border-style: none;
              border-width: 0;
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 5px;
    width: auto;
    margin-left:10px;">CURRENT ADDRESS</legend>
    <div style="margin-left:15px;">
<div class="form-row" >
<div class=" w">
<?php echo form_input(['class'=>'form-control ','placeholder'=>'Door no']);?>
</div>
<div class="w ">
<?php echo form_input(['class'=>'form-control  ','placeholder'=>'Street Name']);?>
</div>
<div class="w">
<?php echo form_input(['class'=>'form-control  ','placeholder'=>'Landmark/Extension']);?>
</div></div><br>

<div class="form-row">
<div class="w ">
<?php echo form_input(['class'=>'form-control  ','placeholder'=>'Village/city']);?>
</div>
<div class="w ">
<?php echo form_input(['class'=>'form-control  ','placeholder'=>'Distric']);?>
</div>
<div class="w ">
<?php echo form_input(['class'=>'form-control  ','placeholder'=>'State']);?>
</div>
</div><br>

<div class="form-row ">
<div class="w">
<?php echo form_input(['class'=>'form-control  ','placeholder'=>'Pincode']);?>
</div>
</div></div><br>
</fieldset>
</div>

<?php echo  form_checkbox(['class'=>'','style'=>"float:left;margin-left:305px;margin-top:5px"]);?>
<h4 style="margin-left:330px;margin-top:75px">Same As Current Address</h4>
<br>
<div class="col-sm-12">
              <fieldset class=" form-group border border-light" style="width:100%;border: 1px solid #e0e0e0;">
              <legend class="the-legend"  style="border-style: none;
              border-width: 0;
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 5px;
    width: auto;
    margin-left:10px;">PERMANENT ADDRESS</legend>
    <div style="margin-left:15px;">
<div class="form-row">
<div class="w">
<?php echo form_input(['class'=>'form-control','placeholder'=>'Door no']);?>
</div>
<div class="w">
<?php echo form_input(['class'=>'form-control','placeholder'=>'Street Name']);?>
</div>
<div class="w">
<?php echo form_input(['class'=>'form-control','placeholder'=>'Landmark/Extension']);?>
</div>
</div><br>

<div class="form-row">
<div class="w">
<?php echo form_input(['class'=>'form-control','placeholder'=>'village/city']);?>
</div>
<div class="w">
<?php echo form_input(['class'=>'form-control','placeholder'=>'District']);?>
</div>
<div class="w">
<?php echo form_input(['class'=>'form-control','placeholder'=>'State']);?>
</div>
</div><br>

<div class="form-row">
<div class="w">
<?php echo form_input(['class'=>'form-control','placeholder'=>'pincode']);?>
</div>
</div>
<div><br>
</fieldset>
       </div>
</div>
</form>
 </div>
</div>
</body>
</html>