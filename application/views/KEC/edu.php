<!DOCTYPE html>
<html>
    <head>
        <style>
           body {
            background-color:rgba(0, 148, 143, 1);}</style>
<title>registraton form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<style>
    .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}
''
.tbl tr td{margin:2%;}

.btn1 {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 4px 5px;
  border-radius: 8px;
  font-size: 14px;
  font-weight: bold;
}
.fa-plus-circle{color:#398add;
font-size:25px;
margin-left:5px;}
.fa-minus-circle{color:#dc3545;;
  font-size:25px;
margin-left:5px;}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
    </style>
   <script>
      /*function newadd(n) {   
   var tr =  n.parentNode.parentNode.cloneNode(true);
   document.getElementById('tbl').appendChild(tr);
 document.getElementByClass("add-row").style.visibility = 'hidden';
}*/
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;});
	});


       </script>
</head>
<body>

    



  <div class="container">
  <p style="color:red;font-size:12px;">*(Please Mention Higher to Lower)</p>
  <p style="color:red;font-size:12px;">**(Upload (1) Degree Certificate (2) marksheet)</p>
<form action="" method="POST">
<table id="dynamic_field">
     <tr>
        <td>
             <?php echo form_input(['name'=>'name[]' ,'class'=>'form-control','placeholder'=>'DEGREE']); ?>
        </td>
          <td>
            <?php echo form_input(['name'=>'agg','placeholder'=>'SPECIALIZATION/MEDIUM','class'=>'form-control','type'=>'text']); ?>
          </td>
        <td> 
            <?php echo form_input(['class'=>'form-control','placeholder'=>'UNIVERSITY/SCHOOL']);?>
        </td>
         <td>
          <?php echo form_input(['class'=>'form-control','type'=>"date",'placeholder'=>'FROM MM/YYYY']); ?>
        </td>
          <td>
             <?php echo form_input(['class'=>'form-control','type'=>"date",'placeholder'=>'TO MM/YYYY']); ?>
        </td>
         <td>
        <?php echo form_input(['id'=>'ag','name'=>'agg','class'=>'form-control','placeholder'=>'PERCENTAGE/CGPA','type'=>'text']); ?>
    </td>
       
       <td>  
           
       <div class="upload-btn-wrapper">
  <button class="btn1">Upload (1)</button>
  <input type="file" name="myfile" />
</div>


<div class="upload-btn-wrapper">
  <button class="btn1">Upload (2)</button>
  <input type="file" name="myfile" />

</td>

   <td id ="last"><i name="add"  id="add"class="fa fa-plus-circle" aria-hidden="true"></i>
   </td>
   <td id ="last"><i onclick="newadd(this);"class="fa fa-minus-circle" aria-hidden="true"></i>
   </td>
   
</tr>


</table>

</form>
</div>
</div>




</body>
</html>
