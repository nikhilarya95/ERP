<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
           body {
            background-color:rgba(0, 148, 143, 1);}
            .mar{
               margin-top:2px;}</style>
<title>registraton form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>‌
</head>
<body>

<script>
$(document).ready(function () {
    toggleField(); // call this first so we start out with the correct visibility depending on the selected form values
    // this will call our toggleFields function every time the selection value of our other field changes
    $("#dbTy").change(function () {
        toggleField();
    });

});
// this toggles the visibility of other server
function toggleField() {
    if ($("#dbTy").val() === "other")
        $("#otherSer").show();
    else
        $("#otherSer").hide();
        if ($("#dbTy").val() === "sql")
        $("#oth").show();
    else
        $("#oth").hide();

}</script>
  <div class="container ">
     <div class="col-md-10 py-2 ">
     <p style="color:red;font-size:12px;">*(Upload newspaper in jpge/pdf file)</p>
        <form   method="POST">
            <div style="margin-left:0px;"class="form-group "  >
               <div class="form-row">
                  <div class="col-sm-3">
                     <?php echo form_input(['class'=>'form-control','placeholder'=>'Paper title']); ?>
                  </div>
                  <div class="col-sm-2">
                      <?php echo form_input(['class'=>'form-control','placeholder'=>'No of author']); ?>
                 </div>
                  <div class="col-sm-2">
                      <select class="form-control"style="height:34px;" id="dbTy" name="dbType">
                         <option>Choose Faculty type</option>
                        <option value="other">Internal</option>
                        <option value="sql">External</option>
                      </select>
                  </div>
                   <div class="col-sm-3">
                       <?php echo form_input(['class'=>'form-control','placeholder'=>'Conference Name']); ?>
                  </div>
                  
            </div><br>
      <div class="form-row">
           <div style="margin-left:393px;"id="otherSer"class="col-sm-1">
           <?php echo form_input(['class'=>'form-control','placeholder'=>'F_id']); ?>
           </div>
           </div>

           <div class="form-row" style="margin-left:2px;margin-bottom:10px; width:100%">
           <div style=""id="oth" class="border">
      
           <div  style="margin-left:9px;margin-right:9px;">
              <div class="form-row">
                   <div class="col-sm-3">
                       <?php echo form_input(['class'=>'form-control mar','placeholder'=>'E_id']); ?>
                  </div>
         
                    <div class="col-sm-3">
                      <?php echo form_input(['class'=>'form-control mar','placeholder'=>'First Name']); ?>
                  </div>
           
        
                <div class="col-sm-3">
                     <?php echo form_input(['class'=>'form-control mar','placeholder'=>'Last Name']); ?>
              </div>
           <div class="col-sm-3">
               <?php echo form_input(['class'=>'form-control mar','placeholder'=>'Department']); ?>
           </div>
           </div>
           <div class="form-row">
              <div class="col-sm-3">
                  <?php echo form_input(['class'=>'form-control mar','placeholder'=>'College Name']); ?>
             </div>
           
          
             <div class="col-sm-3">
                  <?php echo form_input(['class'=>'form-control mar','placeholder'=>'City']); ?>
           </div>
          
         
           <div class="col-sm-3">
            <?php echo form_input(['class'=>'form-control mar','placeholder'=>'Mobile_no']); ?>
           
           </div>
          
                 <div class="col-sm-3">
                    <?php echo form_input(['class'=>'form-control mar','placeholder'=>'Email_id']); ?>
                </div>
           </div>
           <br>
           </div>
           </div>
           </div>
         
           <div style="margin-left:5px;"class="form-row">
           
        <div  class="form-row">
             <p style="float:left;margin-top:13px;">Type of Conference</p>
                 <div style="margin-left:4px;" >
       
                    <div   class="form-row ">
                       <div class="col-sm-3">
                           <?php echo form_input(['name'=>'issue','type'=>'radio','value'=>'special']); ?>
                        </div>
                          <p style="margin-left:5px;">National</p>
                        <br>
                        </div>
                     <div class="form-row">
                      <div class="col-sm-3">
        <?php echo form_input(['name'=>'issue','type'=>'radio','value'=>'Regular']);?>
        </div>
        <p style="margin-left:5px;">International</p>
        </div>
        
       </div>
                  
                  <div  style="margin-left:px;"class="col-sm-2">
           <?php echo form_input(['class'=>'form-control','type'=>'text','placeholder'=>'publisher month']); ?>
           </div>
           <div class="col-sm-2">
            <?php echo form_input(['class'=>'form-control','type'=>'text','placeholder'=>'publisher year']); ?>
           </div>

        
        <div class="col-sm-2"style="width:184px;">
            <?php echo form_input(['class'=>'form-control','placeholder'=>'Citation']); ?>
           </div>
           <div class="col-sm-3">
                     <?php echo form_input(['class'=>'form-control','placeholder'=>'ISSN No']); ?>
                 </div>
                 </div>
                 <div class="form-row">
                 <div style="margin-left:315px;" class="col-sm-4">
                  <div class="upload-btn-wrapper">
                      <button class="btn1">Upload </button>
                      <input type="file" name="myfile" />
                 </div>
           </div></div>
        
      </div>
    
</div>
        </form>
        </div>
        </div>
        </body>
        </html>