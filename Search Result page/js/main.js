const openModal= document.querySelector(".btn-sort-filter");
const modal=document.querySelector(".modal");
const closeModal= document.querySelector(".btn-close");
const btnDone=document.querySelector(".btn-done");
const overlay=document.querySelector(".overlay");

function openModalF(){
    modal.classList.remove("display-none");
    overlay.classList.remove("display-none");
}

function closeModalF(){
    modal.classList.add("display-none");
    overlay.classList.add("display-none");
}

openModal.addEventListener("click",openModalF);
closeModal.addEventListener("click",closeModalF);
btnDone.addEventListener("click",closeModalF);

overlay.addEventListener("click",closeModalF);