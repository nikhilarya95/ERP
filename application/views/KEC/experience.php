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
    .f{
        margin-left:0px;
    }
    .fa-plus-circle{color:#398add;
font-size:25px;
margin-left:5px;}
.fa-minus-circle{color:#dc3545;;
  font-size:25px;
margin-left:5px;}
    </style>
   <script>
      function newadd(n) {   
   var tr =  n.parentNode.parentNode.cloneNode(true);
   document.getElementById('tbl').appendChild(tr);
 document.getElementByClass("add-row").style.visibility = 'hidden';
}
       </script>
</head>
<body>

    
<div class="container " >


   
<p style="color:red;font-size:12px;">*(Please Mention Higher to Lower)</p>
<p style="color:red;font-size:12px;">**(Upload (1) Offer letter (2) Relising letter)</p>

<form action="" method="POST">
<table id="tbl">
    <tr>
    <div class="form-group">
    <td style="width:70px;"> <?php echo form_dropdown(['class'=>' form-control','selected'=>'fff','options'=>['Experience type','Industry' ,'Academic']]);?>
    </td>
    <td>
       
       <?php echo form_input(['class'=>'form-control','placeholder'=>'ORGANIGATION NAME']); ?></td>
        
            <td>
       <?php echo form_input(['name'=>'agg','placeholder'=>'ADDRESS','class'=>'form-control','type'=>'text']); ?></td>
        <td> 
        <?php echo form_input(['class'=>'form-control','placeholder'=>'DESIGNATION']);?></td>
         <td>
        <?php echo form_input(['class'=>'form-control','type'=>'date']); ?></td>
         <td>
        <?php echo form_input(['class'=>'form-control','type'=>'date']); ?></td>
       
        <td>
        <?php echo form_input(['id'=>'ag','name'=>'agg','placeholder'=>'YEAR OF EXPERENCE','class'=>'form-control','type'=>'text']); ?></td>
        <td>
  <div class="upload-btn-wrapper">
  <button  class="btn1 ">Upload (1)</button>
  <input type="file" name="myfile" />
</div>

<div class="upload-btn-wrapper">
  <button class="btn1">Upload (2)</button>
  <input type="file" name="myfile" />
</div>
</td>
<td id ="last"><i onclick="newadd(this);"class="fa fa-plus-circle" aria-hidden="true"></i>
   </td>
   <td id ="last"><i onclick="newadd(this);"class="fa fa-minus-circle" aria-hidden="true"></i>
   </td>
  
 
</tr>

</form>

</table>

</div>



</body>
</html>
