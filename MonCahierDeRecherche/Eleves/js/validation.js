// validation du formulaire d'enregistrement

let formSignUp = document.getElementById("signup");
let error = document.querySelectorAll(".valid");

formSignUp.addEventListener("submit",function(e){
    let userName = formSignUp.username.value;
    let email = formSignUp.email.value;
    let pass = formSignUp.pass.value;
    let conPass = formSignUp.conPass.value;


    function validName(Name){
        let userNameReg = /^([A-Za-z]{4,10})$/;
        if(userNameReg.test(Name)){
            error[0].innerHTML = "";
        }
        else{
            error[0].innerHTML = "nom d'utilisteur invalide";
            e.preventDefault();
        }
    }
    function validEmail(Email){
        let emailReg = /^(^[a-z][a-zA-Z0-9-_.]+@(gmail|outlook).(com|fr))$/;
        if(emailReg.test(Email)){
            error[1].innerHTML = "";
        }
        else{
            error[1].innerHTML = "email invalide";
            e.preventDefault();
        }
    }
    function validPass(Pass){
        let passReg = /^([A-Za-z0-9]{8,16})$/;
        if(passReg.test(Pass)){
            error[2].innerHTML = "";
        }
        else{     
            error[2].innerHTML = " mot de passe invalide";
            e.preventDefault();
        }
    }
    validName(userName);
    validEmail(email);
    validPass(pass);
    if(!(pass == conPass)){
        error[3].innerHTML = "confirmation de mot de passe invalide";
        e.preventDefault();
    }
    else{
        error[3].innerHTML = "";
    }
});