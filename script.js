let buttonNo = document.querySelector('#buttonNo');
buttonNo.onmouseover = trocarLugar;
buttonNo.onclick = trocarLugar;

let buttonYes = document.querySelector('#buttonYes');
buttonYes.onclick = alegrarSe;

function trocarLugar(){
    buttonNo.style.left = Math.floor(Math.random() * 75) + '%';
    buttonNo.style.top = Math.floor(Math.random() * 90) + '%';
    console.log(buttonNo.style.left);
    console.log(buttonNo.style.top);
}

function alegrarSe(){
    alert('Te Amo! ❤️')
}
