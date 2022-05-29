function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

let emailForm = document.getElementById('email-form');
emailForm.querySelector('input').addEventListener("keyup", ()=>{
    let email = emailForm.querySelector('input').value;
    if(isEmail(email)){
        emailForm.querySelector('button').classList.remove("black");
        emailForm.querySelector('button').classList.add("secondary");
        emailForm.querySelector('button').disabled = false;
        emailForm.querySelector('button img').style.width = "30px";
        emailForm.querySelector('button').style.padding = "14px 28px 14px 32px";
    } else {
        emailForm.querySelector('button').classList.remove("secondary");
        emailForm.querySelector('button').classList.add("black");
        emailForm.querySelector('button').disabled = true;
        emailForm.querySelector('button img').style.width = "0";
        emailForm.querySelector('button').style.padding = "14px 28px";
    }
});
emailForm.querySelector('button').addEventListener("mousedown", ()=>{
    if(emailForm.querySelector('button').disabled){
        emailForm.querySelector('input').style.animation = "shake .5s cubic-bezier(.36,.07,.19,.97)";
        setTimeout(()=>{emailForm.querySelector('input').style.animation = "none";}, 500);
    }
});