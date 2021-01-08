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
  firebaseio.analytics();

document.getElementById("form").addEventListener("submit",(e)=>{
    e.preventDefault();

    var x = document.getElementById("studentNumber");
    var con = firebase.database().ref('/potato/'+x.value);

    var userInfo = con.push();
    userInfo.set({
      contactNumber: getId("contactNumber"),
      email: getId("email"),
      fname: getId("fname"),
      lname: getId("lname"),
      password: getId("password"),
      studentNumber: getId("studentNumber")
     
    });

      alert("sent");
      console.log("Sucessfully singed up");

      document.getElementById("form").reset();

    });
function getId(id){
  return document.getElementById(id).value;
}



// document.getElementById("form2").addEventListener("submit",(e)=>{
//     e.preventDefault();


//     var userInfo = con.push();
//     userInfo.set({
//       contactNumber: getId("contactNumber"),
//       email: getId("email"),
//       fname: getId("fname"),
//       lname: getId("lname"),
//       password: getId("password"),
//       studentNumber: getId("studentNumber")

//     });

//     alert("sent");
//     console.log("sent");
//     document.getElementById("form2").reset();
// });
// function getId(id){
//   return document.getElementById(id).value;
// }

//   