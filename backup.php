<!DOCTYPE html>
<html>
<head>
  <title>Calendar | Educado</title>
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

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
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
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 12px;
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
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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


<div id="mySidenav" class="sidenav">
  <img src="Images/UserIcon.png" style="width: 200px; margin-left: 15px;">
  <p style="margin-left: 10px; font-family: Helvetica;font-size: 18px; color: #FF943F  ;font-weight: bold;letter-spacing: 0.5px;margin-bottom: 0;  ">Dela Cruz, Juan D.</p>
  <p style="margin-left: 10px; font-family: Helvetica;font-size: 10px;  ;font-weight: bold;letter-spacing: 0.5px;margin-top: 0;  ">Juan.Delacruz@gmail.com.</p>   
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <hr style="width: 90%;">
  <p style="margin-left: 10px; font-family: Helvetica;font-size: 12px;font-weight: bold;letter-spacing: 0.5px;  ">Enrolled</p>
  <a href="#">Classes</a>
  <a href="#">Calendar</a>
  <hr style="width: 90%;">
  <a href="#">Settings</a>
  <a href="#">Contact</a>

</div>

<span style="font-size:20px;cursor:pointer;float: left;margin-top:15px;margin-left: 20pt; " onclick="openNav()" >&#9776;</span>

<div id="main">


<img src="Images/EducadoLogo.png" style=" width: 45px;margin-left: 5pt;margin-right: 5px; margin-top: 10px; float: left;">
<h1 style="float: left;" > Educado</h1>

<a href="LoginPage.html" style="font-family:Helvetica; font-size: 14px;font-weight: bolder;color:#17202A;float: right; margin-right: 50px;margin-top: 24px; text-decoration: none;">Log out</a>

<div class="dropdown">

  <button onclick="myFunction()" class="dropbtn">+</button>

  <div id="myDropdown" class="dropdown-content">
    <a href="#" id="myBtn">Join Class</a>
    <a href="#">Create Class</a>
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

</div>

</div>

<div style="float: left;width: 100%;"><hr></div>

<div style="float: left;width: 100% ; ">
<h1 style="font-size: 20pt; font-weight: normal; margin-left: 30px;">Classes</h1>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-image: url('Images/cl1.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;">ITE 314 Advance Database</p>
      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;">3BSIT - 03</p>

    </li>

    <li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li>
    

  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-image: url('Images/cl2.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;">ITE 309 Capstone Project</p>
      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;">3BSIT - 03</p>
    </li>
     <li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li>
    

  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-image: url('Images/cl3.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;">ITE 306</p>
      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;">3BSIT - 03</p>

    </li>
   <li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li>
    

  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-image: url('Images/cl4.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;">ITE 307 Quantitative Methods</p>
      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;">3BSIT - 03</p>

    </li>
   <li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li>
    

  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-image: url('Images/cl1.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;">ITE 301 Application Development </p>
      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;">3BSIT - 03</p>

    </li>
    <li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;color: #FF943F;"> Open </li>
    

  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-image: url('Images/cl4.png');"><p style="text-align: left;font-size: 15pt; font-family: Helvetica ; font-weight: bolder;">ITE 308 Web System Technologies </p>
      <p style="text-align: left;font-size: 9pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px;">3BSIT - 03</p>

    </li>
    <li style="text-align: center;font-size: 10pt; font-family: Helvetica ; font-weight: normal; margin-top: 0px; color: #FF943F;"> Open </li>
    

  </ul>
</div>

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

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
</body>
</html>