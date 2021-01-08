<!DOCTYPE html>
<html>
<head>
  <title>Login | Educado</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="shortcut icon" href=" Images/EducadoLogo.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<style type="text/css">
    
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,800");

    * {
      box-sizing: border-box;
    }

    body {
      background-image: url('Images/bg.png');
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      font-family: "Montserrat", sans-serif;
      height: 100vh;
      margin: -20px 0 20px;
    }

    h1 {
      font-weight: bold;
      margin: 0;
    }

    h2 {
      text-align: center;
    }

    p {
      font-size: 14px;
      font-weight: 100;
      line-height: 20px;
      letter-spacing: 0.5px;
      margin: 20px 0 30px;
    }

    span {
      font-size: 12px;
    }

    a {
      color: #333;
      font-size: 14px;
      text-decoration: none;
      margin: 15px 0;
    }

    button {
      border-radius: 20px;
      border: 1px solid#FF943F;
      background-color: #FF943F;
      color: #ffffff;
      font-size: 12px;
      font-weight: bold;
      padding: 12px 45px;
      letter-spacing: 1px;
      text-transform: uppercase;
      transition: transform 80ms ease-in;
    }

    button:active {
      transform: scale(0.95);
    }

    button:focus {
      outline: none;
    }

    button.ghost {
      background-color: transparent;
      border-color: #ffffff;
    }

    form {
      background-color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 50px;
      height: 100%;
      text-align: center;
    }

    input {
      background-color: #eee;
      border: none;
      padding: 5px;
      margin: 4px 0;
      width: 100%;
    }

    .container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
      position: relative;
      overflow: hidden;
      width: 768px;
      max-width: 100%;
      min-height: 480px;
    }

    .form-container {
      position: absolute;
      top: 0;
      height: 100%;
      transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
      left: 0;
      width: 50%;
      z-index: 2;
    }

    .container.right-panel-active .sign-in-container {
      transform: translateX(100%);
    }

    .sign-up-container {
      left: 0;
      width: 50%;
      opacity: 0;
      z-index: 1;
    }

    .container.right-panel-active .sign-up-container {
      transform: translateX(100%);
      opacity: 1;
      z-index: 5;
      animation: show 0.6s;
    }

    @keyframes show {
      0%,
      49.99% {
        opacity: 0;
        z-index: 1;
      }

      50%,
      100% {
        opacity: 1;
        z-index: 5;
      }
    }

    .overlay-container {
      position: absolute;
      top: 0;
      left: 50%;
      width: 50%;
      height: 100%;
      overflow: hidden;
      transition: transform 0.6s ease-in-out;
      z-index: 100;
    }

    .container.right-panel-active .overlay-container {
      transform: translateX(-100%);
    }

    .overlay {
      background: #ff416c;
      background: -webkit-linear-gradient(to right, #ff4b2b, #FF943F);
      background: linear-gradient(to right, #ff4b2b, #FF943F);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: 0 0;
      color: #ffffff;
      position: relative;
      left: -100%;
      height: 100%;
      width: 200%;
      transform: translateX(0);
      transition: transform 0.6s ease-in-out;
    }

    .container.right-panel-active .overlay {
      transform: translateX(50%);
    }

    .overlay-panel {
      position: absolute;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 0 40px;
      text-align: center;
      top: 0;
      height: 100%;
      width: 50%;
      transform: translateX(0);
      transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
      transform: translateX(-20%);
    }

    .container.right-panel-active .overlay-left {
      transform: translateX(0);
    }

    .overlay-right {
      right: 0;
      transform: translateX(0);
    }

    .container.right-panel-active .overlay-right {
      transform: translateX(20%);
    }


  </style>
</head>
<body>


    <div class="container" id="container">
      <div class="form-container sign-up-container">

        <form method="post" action="app/oop/functionsSignUp.php">
           <div class="col-12">
          <h1>Create Account</h1>
   
          <span>or use your email for registration</span>

         
            <div class="row">
                <div class="col-12"><input type="text" placeholder="ContactNumber" name="mobileNumber" id="contactNumber" required="" autocomplete="off" /></div>
                <div class="col-12"><input type="email" placeholder="Email" name="emailAdd" id="email" required="" autocomplete="off" /></div>
                <div class="col-6"><input type="text" placeholder="First Name" name="fName" id="fname" required="" autocomplete="off"/></div>
                <div class="col-6"><input type="text" placeholder="Last Name" name="lName" id="lname" required="" autocomplete="off"/></div>
                <div class="col-12"><input type="text" placeholder="Student Number:" name="userName" id="userName" required="" autocomplete="off"/></div>
                <div class="col-6"><input type="password" placeholder="Password" name="password" id="password" required="" autocomplete="off"/></div>      
               
                <div class="col-6">
                  <select name="year" required="" class="form-control">
                      <option disabled="true" selected="true">Year</option>
                      <option>1st Year</option>
                      <option>2nd Year</option>
                      <option>3rd Year</option>
                      <option>4th Year</option>
                  </select>
                </div>

                <div class="col-6">
                  <select name="section" required="" class="form-control">
                      <option disabled="true" selected="true">Section</option>
                      <option>BSIT 01</option>
                      <option>BSIT 02</option>
                      <option>BSIT 03</option>
                      <option>BSIT 04</option>
                      <option>BSIT 05</option>
                      <option>BSIT 06</option>
                  </select>
                </div>
                <div class="col-6">
                  <select name="userType" required="" class="form-control">
                      <option disabled="true" selected="true">User</option>
                      <option>Student</option>
                  </select>
                </div>
            </div>
          </div>
          
        <button type="submit" name="signup">Sign Up</button>
        </form>
      </div>

<?php include 'app/oop/signIn.php'?>

      <div class="form-container sign-in-container">
        <form method="post">
          <h3>Sign in</h1>
    
          <span>or use your account</span>
          <input type="text" name="userName" placeholder="Username" id="userName" required="" autocomplete="off" />
          <input type="password" name="password" placeholder="Password" id="password" required="" autocomplete="off" />
          <a href="#">Forgot your password?</a> 
          <button  type="submit" name="signIn">Sign In</button>
        </form>
      </div>

      <div class="overlay-container">

        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <img src="Images/educadoWhite.png" style="width: 100px;">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>

          <div class="overlay-panel overlay-right">
            <img src="Images/educadoWhite.png" style="width: 100px;">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>

    </div>




<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-database.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-analytics.js"></script>

<script src="LoginPage.js"></script>
<script type="text/javascript">
  
const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});

</script>


</body>
</html>