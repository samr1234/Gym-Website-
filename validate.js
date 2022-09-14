function seterror(id,error){

}
function validateForm(){
  var name=document.forms['myform']["name"];
  var email = document.forms["myform"]["email"];
  var password = document.forms["myform"]["password"];
  var confirmpassword = document.forms["myform"]["confirmpassword"];

  if (name.value == "") {
    window.alert("Please enter your name.");
    name.focus();
    return false;
}
if (email.value == "") {
    window.alert(
      "Please enter a valid e-mail address.");
    email.focus();
    return false;
}

if (password.value.length <= 8) {
    window.alert("password must be greater than 8 characters");
    password.focus();
    return false;
}
if (password.value.length >= 14) {
    window.alert("password must be less than 15 characters");
    password.focus();
    return false;
}


}

function validateLoginForm(){
  var email = document.forms["loginform"]["email"];
  var password = document.forms["loginform"]["password"];

  if (email.value == "") {
    window.alert(
      "Please enter a valid e-mail address.");
    email.focus();
    return false;
}

if (password.value.length =="") {
    window.alert("please enter valid password");
    password.focus();
    return false;
} 
}