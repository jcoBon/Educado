
	function signOut(){
		firebase.auth().signOut().then(function() {
  			location.href = "LoginPage.html";
            
		}).catch(function(error) {
  // An error happened.
		});}



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

document.getElementById("form").addEventListener("submit",(e)=>{
    e.preventDefault();

    var year = document.getElementById("subjectYear");
    var section = document.getElementById("subjectSection");
    var subcode = document.getElementById("subjectCode");
    var con = firebase.database().ref('/Classrooms/'+year.value+'/'+section.value+'/'+subcode.value);

    var userInfo = con;
    userInfo.set({
      subjectCode: getId("subjectCode"),
      subjectSection: getId("subjectSection"),
      subjectTitle: getId("subjectTitle"),
      subjectYear: getId("subjectYear"),
   
    });

      alert("sent");
      console.log("Sucessfully singed up");

      document.getElementById("form").reset();

    });
function getId(id){
  return document.getElementById(id).value;




  
}


