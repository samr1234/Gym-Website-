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