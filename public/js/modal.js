
var buybtn = document.getElementById('modal-btn');
var modalbg = document.getElementById("modal-bg");
var modalbg1 = document.getElementById("modal1-bg");
var closebtn = document.getElementById("closebtn");
var closemodl = document.getElementById("cancel");
var cancelbtn = document.getElementById("cancelmodal");


buybtn.addEventListener('click', openModal);
closebtn.addEventListener('click', closeModal);
//closemodl.addEventListener('click', modalcancel);
window.addEventListener('click', windowclick);
cancelbtn.addEventListener('click', cancelmodal);

function openModal() {
    modalbg.style.display = 'block';
}

function closeModal() {
    modalbg.style.display = 'none';
    modalbg1.style.display = 'none';
    
}
function modalcancel() {
    modalbg1.style.display = 'none';
}

function windowclick(a) {
    if (a.target == modalbg) {
        modalbg.style.display = 'none';
    }
}

function cancelmodal() {
    modalbg.style.display = 'none';
}


