<!DOCTYPE html>
<html>
<head>
	<title>Home | Educado</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="shortcut icon" href=" Images/EducadoLogo.png" type="image/x-icon">
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
	  margin-left: 40px;
	  width:   180px;
	  padding-top: 10px;
	  
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
	  padding: 15px;
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
</style>	
</head>

<body>
<?php include ('app/oop/actionsJoinClass.php');

	$obj = new Actions();

	// $reference = $ref && "/" && $subjectYear && "/" && $subjectSection && "/" && $subjectCode
	$result1 = $obj->select('potato/1st year/BSIT 01');
	
 ?>

<div id="mySidenav" class="sidenav">
  <img src="Images/UserIcon.png" style="width: 80px; margin-left: 15px; margin-top: 20px;">
  <p style="margin-left: 10px; font-family: Helvetica;font-size: 18px; color: #FF943F  ;font-weight: bold;letter-spacing: 0.5px;margin-bottom: 0;  ">Dela Cruz, Juan D.</p>
  <p style="margin-left: 10px; font-family: Helvetica;font-size: 10px;  ;font-weight: bold;letter-spacing: 0.5px;margin-top: 0;  ">Juan.Delacruz@gmail.com.</p>		
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <hr style="width: 90%;">
  <p style="margin-left: 10px; font-family: Helvetica;font-size: 15px;font-weight: bold;letter-spacing: 0.5px;  ">Enrolled</p>
  <a href="Class.html" style="font-size: 11px;"><img src="Images/cr1.png" style="width: 20px;margin-right: 10px;float: left;">ITE 314 - Advance Database System</a>
  <a href="Class2.html" style="font-size: 11px;"><img src="Images/cr2.png" style="width: 20px;margin-right: 10px;float: left;">ITE 309 - Capstone Project</a>
  <a href="Class3.html" style="font-size: 11px;"><img src="Images/cr3.png" style="width: 20px;margin-right: 10px;float: left;">ITE 306 - Integrative Programming</a>
  <a href="#" style="font-size: 11px;"><img src="Images/cr4.png" style="width: 20px;margin-right: 10px;float: left;">ITE 307 - Quantitative Methods</a>
  <a href="#" style="font-size: 11px;"><img src="Images/cr1.png" style="width: 20px;margin-right: 10px;float: left;">ITE 301 - Application Development</a>
  <a href="#" style="font-size: 11px;"><img src="Images/cr4.png" style="width: 20px;margin-right: 10px;float: left;">ITE 308 - Web System & Technologies</a>

  <hr style="width: 90%;">
  <a href="Home.html"><img src="Images/class.png" style="width: 20px;margin-right: 10px;float: left;">Classes</a>
  <a href="Calendar.html"><img src="Images/calendar.png" style="width: 20px;margin-right: 10px;float: left;">Calendar</a>
  <a href="Settings.html" ><img src="Images/settings.png" style="width: 20px;margin-right: 10px;float: left;">Settings</a>


</div>

<span style="font-size:20px;cursor:pointer;float: left;margin-top:15px;margin-left: 20pt; " onclick="openNav()" >&#9776;</span>

<div id="main">

<div style="width: 100%; position: relative;">


<a href="#" style="font-family:Helvetica; font-size: 14px;font-weight: bolder;color:#17202A;float: right; margin-right: 50px;margin-top: 24px; text-decoration: none;" onclick="signOut()">Log out</a>
</div>

</div>

<div style="float: left;width: 100%;"><hr></div>

<div style="width: 900px; height: 100px; float: left;border-radius: 10px; margin-left: 500px;margin-top: 20px; border: 1px; border-style: solid ; border-color: #E5E7E9;padding-left: 20px;padding-top: 20px;background-image: url('Images/cl1.png'); background-size: cover;">
<a href="Home.php"><button style="padding: 10px;">BACK</button></a>
</div>


<div style="width: 920px; float: left;border-radius: 10px; margin-left: 500px;margin-top: 20px; border: 1px; border-style: solid ; border-color: #E5E7E9;">

  <input type="text" placeholder="    Announce Something in your class . . . " style="width: 880px;padding: 20px;">


</div>

<div style="width: 910px;padding: 5px ; float: left;border-radius: 10px; margin-left: 500px;margin-top: 10px; border: 1px; border-style: solid ; border-color: #E5E7E9;">

<h1 style="margin-left: 30px;">Modules</h1>
<!-- <div>
	<table>
	<form method="post" action="app/oop/functionsCLASS.php">
		<th style="width: 40%;">
			<label>Year</label>
			<input type="" name="subjectYear">
		</th>
			<th style="width: 40%;">
			<label>Section</label>
			<input type="" name="subjectSection">
		</th>
		<th style="width: 30%;">
			<label>Subject Code</label>
			<input type="" name="subjectCode">
		</th>
		<th><button style="padding: 10px; background-color: lightblue; border-style: none; border-radius: 5px;" name="view">VIEW</button></th>
	</form>
	</table>


</div> -->

<?php foreach($result1 as $key => $data): if($data):?> 
<div class="columns">
  <ul class="price">

    <li class="header" style="background-image: url('Images/cl1.png');"><p style="text-align: center;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;"><?=$data['subjectTitle']?> </p>
    </li>
    <li><?=$data['studentNumber']?></li>
    <li><?=$data['subjectSection']?></li>
    <a  target='_blank' href="<?=$data['pdf']?>" style="text-decoration: none;"><li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li></a>

  </ul>
</div>
<?php endif; endforeach; ?>



</div>

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


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-auth.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyA91h_BV9PXcMe1GIKQxj326K3CA6bMZR8",
    authDomain: "educado-be26c.firebaseapp.com",
    databaseURL: "https://educado-be26c.firebaseio.com",
    projectId: "educado-be26c",
    storageBucket: "educado-be26c.appspot.com",
    messagingSenderId: "604571406234",
    appId: "1:604571406234:web:1b0d1a4085678961c8f423",
    measurementId: "G-S927CPH1Y1"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>


<script src="Home.js"></script>

</body>
</html>