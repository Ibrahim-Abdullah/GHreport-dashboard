function signUp(email,password){
	firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  	var errorCode = error.code;
  	var errorMessage = error.message;
   alert("User sign up error :" + errorMessage);
});
}

function signIn(email,password){
	firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  	var errorCode = error.code;
  	var errorMessage = error.message;
  	alert("User log in error" + errorMessage);
  // ...
});
}