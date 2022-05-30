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







document.querySelectorAll('section.interface nav input').forEach(radio => {
    radio.addEventListener("click", ()=>{
        let rgb = getAverageRGB(document.querySelector('section.interface nav label[for="'+radio.id+'"] .icon img'));
        if(!rgb.r && !rgb.g && !rgb.b){rgb.r = 0; rgb.g = 133; rgb.b = 255;}
        else {document.querySelector('section.interface label[for="'+radio.id+'"] .label-bg').style.background = 'rgb('+rgb.r+','+rgb.g+','+rgb.b+')';}
        document.querySelectorAll('section.interface .label-bg').forEach(item => {item.style.background = 'none';});
        document.querySelector('section.interface .bg').style.background = 'rgb('+rgb.r+','+rgb.g+','+rgb.b+')';
        document.querySelectorAll('section.interface article div').forEach(item => {item.style.display = 'none';});
        document.querySelector('section.interface article div#d'+radio.id).style.display = 'block';
        document.querySelectorAll('section.interface article div#d'+radio.id+' .chb').forEach(item => {item.style.display = 'block';});
        document.querySelectorAll('section.interface article img').forEach(item => {item.src = "style/images/icons/"+radio.id+".svg";});
        document.querySelector('section.interface article h3 span').innerText = radio['title'];
    });
    if(radio.checked){
        let rgb = getAverageRGB(document.querySelector('section.interface nav label[for="'+radio.id+'"] .icon img'));
        document.querySelector('section.interface .bg').style.background = 'rgb('+rgb.r+','+rgb.g+','+rgb.b+')';
        document.querySelector('section.interface label[for="'+radio.id+'"] .label-bg').style.background = 'rgb('+rgb.r+','+rgb.g+','+rgb.b+')';
        document.querySelector('section.interface article div#d'+radio.id+'').style.display = 'block';
    } else {
        document.querySelector('section.interface label[for="'+radio.id+'"] .label-bg').style.background = 'none';
        document.querySelector('section.interface article div#d'+radio.id).style.display = 'none';
    }
});

function getAverageRGB(imgEl) {
    var blockSize = 1, // only visit every 1 pixels
    defaultRGB = {r:0,g:0,b:0}, // for non-supporting envs
    canvas = document.createElement('canvas'),
    context = canvas.getContext && canvas.getContext('2d'),
    data, width, height,
    i = -4,
    length,
    rgb = {r:0,g:0,b:0},
    count = 0;
        
    if (!context) {
        return defaultRGB;
    }

    height = canvas.height = imgEl.naturalHeight || imgEl.offsetHeight || imgEl.height;
    width = canvas.width = imgEl.naturalWidth || imgEl.offsetWidth || imgEl.width;

    context.drawImage(imgEl, 0, 0);

    try {
        data = context.getImageData(0, 0, width, height);
    } catch(e) {
        /* security error, img on diff domain */alert('x');
        return defaultRGB;
    }

    length = data.data.length;

    while ( (i += blockSize * 4) < length ) {
        ++count;
        rgb.r += data.data[i];
        rgb.g += data.data[i+1];
        rgb.b += data.data[i+2];
    }

    // ~~ used to floor values
    rgb.r = ~~(rgb.r/count);
    rgb.g = ~~(rgb.g/count);
    rgb.b = ~~(rgb.b/count);

    return rgb;
}
