<!DOCTYPE html>
<html>
<head>
	<title>Home | Educado</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="shortcut icon" href=" Images/EducadoLogo.png" type="image/x-icon">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">


	body {
	   margin: 0;}

	h1 {
	  font-family: Helvetica;
	  font-size: 35px;
	  background: -webkit-linear-gradient(#17202A, #17202A);
	  -webkit-background-clip: text;
	  -webkit-text-fill-color: transparent;
	  font-weight: bolder;
	  margin: 0;
	  margin-top: 10px;}

	input {
	  padding: 0.5rem;
	  color: gray;
	  border:1px solid gray;
	  border-radius: 10px;
	  background-origin: border-box;
	  background-clip: padding-box, border-box;
	  outline: none;
	  -webkit-transition: 0.3s;
	  transition: 0.3s;
	  width: 50%;}
	.create{
		width: 90%;
	}

	input[type=text]:focus {
	  border: 1px solid #FF943F;
	}


	.columns {
	  float: left;
	  position: relative;
	  margin-left: 30px;
	  width:   370px;
	  padding: 5px;
	  padding-top: 20px;
	  
	}

	.price {
	  list-style-type: none;
	  border: 1px solid #eee;
	  margin: 0;
	  padding: 0;
	  -webkit-transition: 0.3s;
	  transition: 0.3s;
	  border-radius: 20px;
	}

	.price:hover {
	  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
	}

	.price .header {
	  background-color: #111;
	  color: white;
	  border-radius: 20px 20px 0px 0px;
	  font-size: 25px;
	}

	.price li {
	  border-bottom: 1px solid #eee;
	  padding: 20px;
	  text-align: center;
	}

	.price .grey {
	  background-color: #eee;
	  font-size: 20px;
	}


	@media only screen and (max-width: 600px) {
	  .columns {
	    width: 100%;
	  }
	}
	.responsive {
	  width: 100%;
	  height: auto;
	}
	.sidenav {
	  height: 100%;
	  width: 0;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 5px;
	  background-color:#FAFAFA   ;
	  overflow-x: hidden;
	  transition: 0.3s;

	}

	.sidenav a {
	  padding: 20px 20px 20px 30px;
	  text-decoration: none;
	  font-size: 15px;
	  letter-spacing: 0.5px;
	  color:  #FF943F;
	  display: block;
	  transition: 0.3s;
	  font-family: Helvetica;
	}

	.sidenav a:hover {
	  color: black;}

	.sidenav .closebtn {
	  position: absolute;
	  top: 0;
	  right: 25px;
	  font-size: 36px;
	  margin-left: 50px;}

	#main {
	  transition: margin-left .5s;}

	/* The Modal (background) */
	.modal {
	  display: none; /* Hidden by default */
	  position: fixed; /* Stay in place */
	  z-index: 1; /* Sit on top */
	  left: 0;
	  top: 0;
	  width: 100%; /* Full width */
	  height: 100%; /* Full height */
	  overflow: auto; /* Enable scroll if needed */
	  background-color: rgb(0,0,0); /* Fallback color */
	  background-color: rgba(0,0,0,0.4); 
	 /* Black w/ opacity */
	}

	/* Modal Content/Box */
	.modal-content {
	  background-color: #fefefe;
	  margin: 15% auto; /* 15% from the top and centered */
	  padding: 20px;
	  border: 1px solid #888;
	  width: 25%; /* Could be more or less, depending on screen size */
	  border-radius: 10px;
	}

	/* The Close Button */
	.close {
	  color: #aaa;
	  float: right;
	  font-size: 28px;
	  font-weight: bold;
	  display: inline-block;

	}

	.close:hover,
	.close:focus {
	  color: black;
	  text-decoration: none;
	  cursor: pointer;
	}

	/* The Modal (background) create modal */
	.modal1 {
	  display: none; /* Hidden by default */
	  position: fixed; /* Stay in place */
	  z-index: 1; /* Sit on top */
	  left: 0;
	  top: 0;
	  width: 100%; /* Full width */
	  height: 100%; /* Full height */
	  overflow: auto; /* Enable scroll if needed */
	  background-color: rgb(0,0,0); /* Fallback color */
	  background-color: rgba(0,0,0,0.4); 
	 
	}

	/* Modal Content */
	.modal-content1 {
	 background-color: #fefefe;
	  margin: 15% auto; /* 15% from the top and centered */
	  padding: 20px;
	  border: 1px solid #888;
	  width: 25%; /* Could be more or less, depending on screen size */
	  border-radius: 10px;
	}

	/* The Close Button */
	.close1 {
	  color: #aaa;
	  float: right;
	  font-size: 28px;
	  font-weight: bold;
	  display: inline-block;
	}

	.close1:hover,
	.close1:focus {
	  color: #000;
	  text-decoration: none;
	  cursor: pointer;
	}

	.button {
	  background-color: #FF943F; /*orange*/
	  border: none;
	  color: white;
	  padding: 8px 20px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  transition-duration: 0.4s;
	  cursor: pointer;
	  border-radius: 10px;
	  font-family:  Helvetica;
	  outline: none;

	}


	.button1 {
	  background-color: white; 
	  color: #FF943F; 
	  border: 1px solid #FF943F;
	  font-size: 10pt;
	  font-weight: bold;
	}

	.button1:hover {
	  background-color: #FF943F;
	  color: white;
	}


	/* Dropdown Button */
	.dropbtn {
	  background-color: white;
	  color: #17202A;
	  font-size: 30px;
	  border: none;
	  cursor: pointer;
	  outline: none;
	  margin-top: 15px;
	  margin-right: 15px;
	}

	/* The container <div> - needed to position the dropdown content */
	.dropdown {
		float: right;
	  position: relative;
	  display: inline-block;

	}

	/* Dropdown Content (Hidden by Default) */
	.dropdown-content {
		background-color: #F6F6F6;
	  display: none;
	  position: absolute;
	  min-width: 120px;
	  border: none;
	  overflow: auto;
	  z-index: 1;
	  right: 0;
	  margin-right:15px; 
	  border-radius: 5px;

	}

	/* Links inside the dropdown */
	.dropdown-content a {
	  color: #17202A;
	  padding: 8px 12px;
	  text-decoration: none;
	  display: block;
	    border: none;
	    font-family:Helvetica;
	    font-size:13px;
	    font-weight: bolder;
	}

	/* Change color of dropdown links on hover */
	.dropdown-content a:hover {background-color: #ddd}

	/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
	.show {display:block;}
	@media (max-width: 600px) {
	  button,body,img {
	    width: 100%;
	    height: auto;
	  }
	}

	select{
		width: 100%;
		height: auto;
		padding: 8px;
		border-radius: 10px;
		margin-top: 8px;
		margin-left: 9px;
	}

</style>	
</head>

<body>

<?php include ('app/oop/actionsCreateClass3.php');

	$obj = new Actions();


	$result12 = $obj->select('Classrooms/3rd Year/BSIT 01');
	$result13 = $obj->select('Classrooms/3rd Year/BSIT 02');
	$result14 = $obj->select('Classrooms/3rd Year/BSIT 03');
	$result15 = $obj->select('Classrooms/3rd Year/BSIT 04');
	$result16 = $obj->select('Classrooms/3rd Year/BSIT 05');
	$result17 = $obj->select('Classrooms/3rd Year/BSIT 06');

 ?>

<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
  	<form method="post" action="app/oop/functionsCreateClass3.php">
    <span class="close1">&times;</span>
    <p style="font-family: Helvetica; font-weight: bold; margin: 0 ;color: #FF943F; letter-spacing: 1px;"  >Create Class</p>
    <input class="create" type="text" name="subjectTitle" id="subjectTitle" placeholder="Subject Title" style="margin-top: 10px;" required="" autocomplete="off">
    <input class="create" type="text" name="subjectCode" id="subjectCode" placeholder="Subject Code"style="margin-top: 10px;" required="" autocomplete="off">
 
    <select class="create" name="subjectYear" type="text" id="subjectYear" required="" class="form-control" required="" autocomplete="off">
			<option disabled="true" selected="true">Subject Year</option>
			<option>1st Year</option>
			<option>2nd Year</option>
			<option>3rd Year</option>
			<option>4th Year</option>
	</select>

     <select class="create" name="subjectSection" type="text" id="subjectSection" required="" class="form-control" required="" autocomplete="off">
			<option disabled="true" selected="true">Subject Section</option>
			<option>BSIT 01</option>
			<option>BSIT 02</option>
			<option>BSIT 03</option>
			<option>BSIT 04</option>
			<option>BSIT 05</option>
			<option>BSIT 06</option>
	</select>

    <br>
    <button class="button" name="create" id="createClassroom" style="margin-top: 10px;">Create</button>
	 </form>
  </div>

</div>



<div id="mySidenav" class="sidenav">
  <img src="Images/UserIcon.png" style="width: 80px; margin-left: 15px; margin-top: 20px;">
  <p style="margin-left: 10px; font-family: Helvetica;font-size: 18px; color: #FF943F  ;font-weight: bold;letter-spacing: 0.5px;margin-bottom: 0;  ">Dela Cruz, Juan D.</p>
  <p style="margin-left: 10px; font-family: Helvetica;font-size: 10px;  ;font-weight: bold;letter-spacing: 0.5px;margin-top: 0;  ">Juan.Delacruz@gmail.com.</p>		
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <hr style="width: 90%;">
  <a href=""><img src="Images/class.png" style="width: 20px;margin-right: 10px;float: left;">Classes</a>
  <a href="Calendar.php"><img src="Images/calendar.png" style="width: 20px;margin-right: 10px;float: left;">Calendar</a>
  <a href="Settings.php" ><img src="Images/settings.png" style="width: 20px;margin-right: 10px;float: left;">Settings</a>


</div>

<span style="font-size:20px;cursor:pointer;float: left;margin-top:15px;margin-left: 20pt; " onclick="openNav()" >&#9776;</span>

<div id="main">

<div style="width: 100%; position: relative;">

<img src="Images/Getstarted.png" style=" width: 45px;margin-left: 5pt;margin-right: 5px; margin-top: 10px; float: left;">
<h1 style="float: left;" > Educado</h1>

<a href="logout.php" style="font-family:Helvetica; font-size: 14px;font-weight: bolder;color:#17202A;float: right; margin-right: 50px;margin-top: 24px; text-decoration: none;" onclick="javascript:confirmationLogout($(this));return false;">Log out</a>
<script type="text/javascript">
            function confirmationLogout(anchor){
              var conf = confirm('Are you sure want to LogOut?');
            if(conf)
              window.location=anchor.attr("href");
              }
</script>

</div>
	



<div class="dropdown">

  <button onclick="myFunction()" class="dropbtn">+</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#" id="myBtn"></a>
    <a id="myBtn1">Create Class</a>
  </div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->

  <div class="modal-content">
    <span class="close">&times;</span>
    <p style="font-family: Helvetica; font-weight: bold; margin: 0 ;color: #FF943F; letter-spacing: 1px;"  >Enter Class Code </p>
    <p style="font-family: Helvetica; font-size: 8pt;margin-top: 2px;letter-spacing: 0.8px; word-spacing: 0.5px;"> Ask your teacher for the class code, then enter it here.</p>
    <input type="text" placeholder="Class Code . .">
    <button class="button button1">Join</button>
  </div>

</div>

<!-- The Modal  create class-->

</div>

</div>

<div style="float: left;width: 100%;"><hr></div>



<!------------------------------------------------------------THIRD YEAR-------------------------------------------------------------------------------------->
<div style="float: left;width: 100%">
<div>
	<center>
	<table>
		<tr>
		<th><a href="Home.php"><button style="background: #fff;border-radius: 5px;"><h1>First Year</h1></button></a></th>
		<th><a href="Home2.php"><button style="background: #fff; border-radius: 5px;"><h1>Second Year</h1></button></a></th>
		<th><a href="Home3.php"><button style="background: #ffb87a; border-style: none;border-radius: 5px;"><h1>Third Year</h1></button></a></th>
		<th><a href="Home4.php"><button style="background: #fff;border-radius: 5px;"><h1>Fourth Year</h1></button></a></th>
		</tr>
	</table>
	</center>
	</div>

<div style="color: #fff;">	
<?php foreach($result12 as $key => $data): if($data):?> 

<div class="row col-12" id=<?=$key?>>
	<div class="columns">
	  <ul class="price">
	    <li class="header" style="background-image: url('Images/cl1.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;"><?=$data['subjectTitle']?></p>
	      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;"><?=$data['subjectSection']?></p>

	    </li>
	    <a type="button" name="del" href="app/oop/functionsCreateClass3.php?delete13=<?=$key?>"><button style="background-color: #f5f5f5; border-style: none; border-radius: 5px; padding: 5px;">DELETE</button></a>
	    <a href="class3_01.php" style="text-decoration: none;"><li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li></a>
	    

	  </ul>
	</div>
</div>

<?php endif; endforeach; ?>
</div>
<!-------------------------------------------------------------->
<div style="color: #fff;">
<?php foreach($result13 as $key => $data): if($data):?> 

<div class="row col-12" id=<?=$key?>>
	<div class="columns">
	  <ul class="price">
	    <li class="header" style="background-image: url('Images/cl1.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;"><?=$data['subjectTitle']?></p>
	      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;"><?=$data['subjectSection']?></p>

	    </li>
	    <a type="button" name="del" href="app/oop/functionsCreateClass3.php?delete14=<?=$key?>"><button style="background-color: #f5f5f5; border-style: none; border-radius: 5px; padding: 5px;">DELETE</button></a>
	    <a href="class3_02.php" style="text-decoration: none;"><li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li></a>
	    

	  </ul>
	</div>
</div>

<?php endif; endforeach; ?>
</div>
<!-------------------------------------------------------------->
<div style="color: #fff;">	
<?php foreach($result14 as $key => $data): if($data):?> 

<div class="row col-12" id=<?=$key?>>
	<div class="columns">
	  <ul class="price">
	    <li class="header" style="background-image: url('Images/cl1.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;"><?=$data['subjectTitle']?></p>
	      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;"><?=$data['subjectSection']?></p>

	    </li>
	    <a type="button" name="del" href="app/oop/functionsCreateClass3.php?delete15=<?=$key?>"><button style="background-color: #f5f5f5; border-style: none; border-radius: 5px; padding: 5px;">DELETE</button></a>
	    <a href="class3_03.php" style="text-decoration: none;"><li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li></a>
	    

	  </ul>
	</div>
</div>

<?php endif; endforeach; ?>
</div>
<!-------------------------------------------------------------->
<div style="color: #fff;">	
<?php foreach($result15 as $key => $data): if($data):?> 

<div class="row col-12" id=<?=$key?>>
	<div class="columns">
	  <ul class="price">
	    <li class="header" style="background-image: url('Images/cl1.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;"><?=$data['subjectTitle']?></p>
	      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;"><?=$data['subjectSection']?></p>

	    </li>
	    <a type="button" name="del" href="app/oop/functionsCreateClass3.php?delete16=<?=$key?>"><button style="background-color: #f5f5f5; border-style: none; border-radius: 5px; padding: 5px;">DELETE</button></a>
	    <a href="class3_04.php" style="text-decoration: none;"><li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li></a>
	    

	  </ul>
	</div>
</div>

<?php endif; endforeach; ?>
</div>
<!-------------------------------------------------------------->
<div style="color: #fff;">	
<?php foreach($result16 as $key => $data): if($data):?> 

<div class="row col-12" id=<?=$key?>>
	<div class="columns">
	  <ul class="price">
	    <li class="header" style="background-image: url('Images/cl1.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;"><?=$data['subjectTitle']?></p>
	      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;"><?=$data['subjectSection']?></p>

	    </li>
	    <a type="button" name="del" href="app/oop/functionsCreateClass3.php?delete17=<?=$key?>"><button style="background-color: #f5f5f5; border-style: none; border-radius: 5px; padding: 5px;">DELETE</button></a>
	    <a href="class3_05.php" style="text-decoration: none;"><li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li></a>
	    

	  </ul>
	</div>
</div>

<?php endif; endforeach; ?>
</div>
<!-------------------------------------------------------------->

<div style="color: #fff;">		

<?php foreach($result17 as $key => $data): if($data):?> 

<div class="row col-12" id=<?=$key?>>
	<div class="columns">
	  <ul class="price">
	    <li class="header" style="background-image: url('Images/cl1.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;"><?=$data['subjectTitle']?></p>
	      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;"><?=$data['subjectSection']?></p>

	    </li>
	    <a type="button" name="del" href="app/oop/functionsCreateClass3.php?delete18=<?=$key?>"><button style="background-color: #f5f5f5; border-style: none; border-radius: 5px; padding: 5px;">DELETE</button></a>
	    <a href="class3_06.php" style="text-decoration: none;"><li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li></a>
	    

	  </ul>
	</div>
</div>

<?php endif; endforeach; ?>

</div>

</div>
<!------------------END--------------------->



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// Get the modal create
var modal2 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

</script>

<script type="text/javascript">
  
const createClassroom = document.getElementById("createClassroom");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

createClassroom.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});

</script>


</body>
</html>