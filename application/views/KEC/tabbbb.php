<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
 
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;

  border: none;
  outline: none;
  cursor: pointer;
  text-align:center;
  transition: 0.3s;
font-size:18px;
  width: 16%;
}


/* Change background color of buttons on hover */
.tab button:hover {
  background-color: white;
  border:0px;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: white;
  border:0px;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}
</style>
</head>
<body>



<div style="margin-left:20px;border-radius:6px;border:none"class=" bg-info tab">
  <button class="tablinks btn " onclick="openCity(event, 'Personal')" id="defaultOpen">Personal</button>
  <button class="tablinks btn " onclick="openCity(event, 'Academic')">Academic</button>
  <button class="tablinks btn" onclick="openCity(event, 'Experience')">Experience</button>
  <button class="tablinks btn" onclick="openCity(event, 'Conference')">Conference</button>
  <button class="tablinks btn" onclick="openCity(event, 'Journal')">Journal</button>
  <button class="tablinks btn " onclick="openCity(event, 'Book')">Book</button>
</div>

<div style="margin-left:0px;border:none;"id="Personal" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
 <?php include('form.php');?> 
</div>

<div  style="margin-left:70px;margin-top:15px;border:none;"id="Academic" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  <?php include('edu.php');?>
</div>

<div  style="margin-left:70px;margin-top:15px;border:none;"id="Experience" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  <?php include('experience.php');?>
</div>
<div  style="margin-left:70px;margin-top:15px;border:none;"id="Conference" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  <?php include('conference.php');?>
</div>
<div  style="margin-left:70px;margin-top:15px;border:none;"id="Journal" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  <?php include('journal.php');?>
</div>
<div  style="margin-left:70px;margin-top:15px;border:none;"id="Book" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  <?php include('book.php');?>
</div>
<div class="container"style="margin-left:45%;margin-bottom:2%;width:50%;">
<div class="col">
       <input style="margin-right:30px "class=" btn btn-info" type=button onClick="" value='Save'>
        <input class="  btn btn-info" type=button onClick="location.href='book.php'" value='Next'>
        
</div></div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
