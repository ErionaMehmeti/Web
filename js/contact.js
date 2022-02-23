function contactbtn(){ 
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    const regexUsername =  /^[A-Z]{1}.{2,15}$/;
    const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const regexMessage = /^.{1,100}$/;

      if(!regexUsername.test(username)){
        alert("Write another name!");
        return false;
    }
    else if(!regexEmail.test(email)){
        alert("Write another email!");
        return false;
    }
    else if(!regexMessage.test(message)){
        alert("Write another message!");
        return false;
    }
    else{
        alert("Mesazhi u dergua!");
        return true;
    }
}