<?php include ('header.php');?>
<html>
    <head>
      <script>
        fuction back()
        {
          window.history.back();
        }
        </script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    </head>
    <body>
        <div class="row">
          <div class="col-lg-4">
             </div>
            <div class="col-lg-4">
            <?php echo form_open('User/repass');?>

        <?php echo form_open('admin/login','id="form" style="margin-top:5%;margin-bottom:104px;"');?>
  <fieldset>
 <div class="form-group">
      <label for="InputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
     
    </div>
    <div class="form-group">
      <label for="InputPassword1">Security Quetion</label>
      <select class="form-control" id="sel1" >
        <option>Select One</option>
        <option value="m">what is your pet name?</option>
        <option value="p">what is your favorate city name?</option>
        <option value="c">what is your first teacher name?</option>
        <option value="q">what is your favorate colour name?</option>
        <option value="r" >what is your favorate book name?</option>
      </select>
      <input type="text"class="form-control" placeholder="Answer..."> <br>
      <select class="form-control" id="sel1" >
        <option>Select One</option>
        <option value="m">what is your pet name?</option>
        <option value="p">what is your favorate city name?</option>
        <option value="c">what is your first teacher name?</option>
        <option value="q">what is your favorate colour name?</option>
        <option value="r" >what is your favorate book name?</option>
      </select>
      
      <input type="text"class="form-control" placeholder="Answer..."> 
    </div>
   
    </fieldset>
    
    <button type="submit" class="btn btn-info">Submit</button>
    <button type="button" class="btn btn-info"onclick="<?php base_url();?>User/index" >Back</button>
 

</div>
<div class="col-lg-4">
             </div>
</div>
<?php include('footer.php');?>
</body>
</html>
