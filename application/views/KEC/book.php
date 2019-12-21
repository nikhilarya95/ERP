<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
           body {
            background-color:rgba(0, 148, 143, 1);}
            .mar{
               margin-top:10px;}
               .check{ margin-top:5px;
              
                }</style>
<title>registraton form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>

<script>
$(document).ready(function () {
    toggleFiel(); // call this first so we start out with the correct visibility depending on the selected form values
    // this will call our toggleFields function every time the selection value of our other field changes
    $("#dbTyp").change(function () {
        toggleFiel();
    });

});
// this toggles the visibility of other server
function toggleFiel() {
    if ($("#dbTyp").val() === "other")
        $("#otherServe").show();
    else
        $("#otherServe").hide();
        if ($("#dbTyp").val() === "sql")
        $("#othe").show();
    else
        $("#othe").hide();

}


$(function() {
    $('#bradio').click(function() {
        $('.txbx').attr('hidden',false);
    });           
    $('#aradio').click(function() {
        $('.txbx').attr('hidden',true);
    });
});



$(document).ready(function () {
    toggleFie(); // call this first so we start out with the correct visibility depending on the selected form values
    // this will call our toggleFields function every time the selection value of our other field changes
    $("#ra").change(function () {
        toggleFie();
    });

});
// this toggles the visibility of other server
function toggleFie() {
    if ($("#ra").val() === "special")
        $("#b").show();
    else
        $("#b").hide();

}








</script>
<div class="container ">
<div class="col-md-10 py-2 ">
<form   method="POST">
    <div class="form-group">
        <div class="form-row">
            <div class="col-sm-2">
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Book title']); ?>
            </div>
            <div class="col-sm-2">
               <?php echo form_input(['class'=>'form-control','placeholder'=>'No of author']); ?>
            </div>
            <div class="col-sm-2">
                <select class="form-control"style="height:34px;" id="dbTyp" name="dbTyp">
                   <option>Choose Faculty type</option>
                   <option value="other">Internal</option>
                   <option value="sql">External</option>
                </select>
            </div>
          <div style="margin-left:5px;"class=col-sm-5>
                     <div class="form-row">
                         <div class="col-sm-3">
                           <p style="margin-top:5px;margin-left:10px;">Published type</p>
                         </div>
                     <div class="col-sm-1">
                           <p class="check" >Book</p>
                     </div>
                    <div class=" col-sm-1">
                           <?php echo form_input(['name'=>'issue','id'=>'aradio','class'=>'check','type'=>'radio','value'=>'book']); ?>
                    </div>
                    <div style="margin:0px;padding:0px;width:80px;" >
                         <p  style="margin-left:8px;" class="check" >Book chapter</p> 
                    </div>
                    <div style="margin-right:10px;padding-left:0px;" class="col-sm-1">
                          <?php echo form_input(['name'=>'issue','id'=>'bradio','style'=>'margin-left:0px;','class'=>'mar','type'=>'radio','value'=>'book chapter']);?>
                    </div>
                 </div>
               </div>
           </div>
       <br>
          
           <div class="form-row">
               <div style="margin-left:305px;"id="otherServe"class="col-sm-1">
                      <?php echo form_input(['class'=>'form-control','placeholder'=>'F_id']); ?>
               </div>
               <div class="txbx" hidden="true",style="margin-left:225px;" class="col-sm-1">
                   <?php echo form_input(['class'=>'form-control','placeholder'=>'Chapter Title']); ?>
              </div>
                <div class="txbx" hidden="true"style="margin-left:5px;" class="col-sm-1">
                    <?php echo form_input(['class'=>'form-control','placeholder'=>'c_page no']); ?>
                </div>
           </div>

           <div class="form-row" style="width:90%">
               <div style="margin-left:7px;"id="othe" class="border">
       
                    <div  style="margin:3px 10px 2px 10px;">
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
 </div> <br>
             <div class="form-row">
                 <div class="col-sm-2">
                    <?php echo form_input(['class'=>'form-control','placeholder'=>'Publication']); ?>
              </div>
                 <div class="col-sm-2">
                       <?php echo form_input(['class'=>'form-control','placeholder'=>'Month(mm)']); ?>
              </div>
                  <div class="col-sm-2">
                     <?php echo form_input(['class'=>'form-control','type'=>'text','placeholder'=>'Year']); ?>
                 </div>
                  <div class="col-sm-2">
                       <?php echo form_input(['class'=>'form-control','type'=>'text','placeholder'=>'Edition']); ?>
                 </div>
                  
               <div style="width:110px;">
                  <?php echo form_input(['class'=>'form-control','placeholder'=>'ISBN']); ?>
                  </div>
               
            
</div>
          
        </div>
      
        </div>

        </form>
        </div>
      
        </body>
        </html>