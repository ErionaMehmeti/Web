var LoginForm=document.getElementById("LoginForm");
var RegForm=document.getElementById("RegForm");
var Indicator=document.getElementById("Indicator");

    

function Loginbtn(){
    var name = document.getElementById('username-login').value;
    var passwordL = document.getElementById('password-login').value;
   
    const regexName =  /^[A-Z]{1}.{2,15}$/;
    const regexPasswordLogin = /^[A-Z]{1}[a-zA-Z]{2,15}([0-9]{3}$)/;
  
       if(!regexName.test(name)){
        alert("Write another name!");
        return false;
    }
    else if(!regexPasswordLogin.test(passwordL)){
        alert("Write another password!");
        return false;
    }
    else{
        alert("Login successfully!");
        return true;
    }
}
function Registerbtn(){ 
    var username = document.getElementById('Username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('pass-reg').value;

    const regexUsername = /^[A-Z]{1}.{2,15}$/;
    const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const regexPassword = /^[A-Z]{1}[a-zA-Z]{2,15}([0-9]{3}$)/;

      if(!regexUsername.test(username)){
        alert("Write another username!");
        return false;
    }
    else if(!regexEmail.test(email)){
        alert("Write another email!");
        return false;
    }
    else if(!regexPassword.test(password)){
        alert("Write another password!");
        return false;
    }
    else{
        alert("Register successfully!");
        return true;
    }
}