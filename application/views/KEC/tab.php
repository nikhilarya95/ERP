<!DOCTYPE html>
<html>
    <head>
        <title>tab</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
.tablinks{
    padding-right:0px;
    padding-left:0px;
    width:-10%;
    padding-top:-50px;
}
.nav-tabs.nav-justified > li{
    width:0px;
    padding-top:0px;
}
ul{
    background-color:#4281a7
}
a
{
    color:black;
    padding-top:20px;
}


    


</style>
</head>
<body>






      <div class="row">
        <div class=" nav-tab-holder">
        <ul class="nav nav-tabs row nav-justified bg-#4281a7" role="tablist">
          <li role="presentation" class="active col-sm-2"><a href="welcome.php" aria-controls="person" role="tab" data-toggle="tab">person</a></li>
          
          <li role="presentation" class="col-sm-2"><a href="#" aria-controls="Academic" role="tab" data-toggle="tab">Academic</a></li>
          <li role="presentation" class=" col-sm-2"><a href="#Experience" aria-controls="Experience" role="tab" data-toggle="tab">Experience</a></li>
          <li role="presentation" class="col-sm-2"><a href="#Conference" aria-controls="Conference" role="tab" data-toggle="tab">Conference</a></li>
          <li role="presentation" class="col-sm-2"><a href="#Books" aria-controls="Books" role="tab" data-toggle="tab">Books</a></li>
</ul>
      </div>

      <div class=" bg-info tab"role="tablist">
  <button role="presentation" class=" active tablinks"data-toggle="tab"role="tab" onclick="openCity(event, 'Personal')" id="defaultOpen">Personal</button>
  <button role="presentation" class="tablinks"data-toggle="tab"role="tab" onclick="openCity(event, 'Academic')">Academic</button>
  <button class="tablinks" role="presentation"data-toggle="tab"role="tab" onclick="openCity(event, 'Experience')">Experience</button>
  <button class="tablinks"role="presentation" data-toggle="tab"role="tab" onclick="openCity(event, 'Conference')">Conference</button>
  <button class="tablinks"role="presentation" data-toggle="tab"role="tab" onclick="openCity(event, 'Journal')">Journal</button>
  <button class="tablinks"role="presentation" data-toggle="tab"role="tab" onclick="openCity(event, 'Book')">Book</button>
</div>
 <!--<div class="container">
  <ul class="nav nav-tab nav-justified"style >
        <li class="active"><a href="#person" data-toggle="tab">person</a></li>
        <li class=""><a href="#Academic" data-toggle="tab">Academic</a></li>
        <li class=""><a href="#Experience" data-toggle="tab">Experience</a></li>
        <li class=""><a href="#person" data-toggle="tab">Conference</a></li>
        <li class=""><a href="#person" data-toggle="tab">Books</li>
</ul>-->






<div class="tab-content">
    <div class="tab-pane fade in active " id="person">
    
</div>

<div id="Academic" class="tab-pane fade">
       <p>jjjjjjj</p>
</div>

<div id="Experience" class="tab-pane fade">
        <p>h</p>
</div>

 <div id="Conference" class="tab-pane fade">
        <p>h</p>
</div>

<div id="Books" class="tab-pane fade">
        <p>h</p>
</div>



</body>
</html>