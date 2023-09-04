const anteBtn=document.querySelectorAll(".btn-prev");
const proxBtn=document.querySelectorAll(".btn-next");
const progresso=document.getElementById("progresso");
const formPasso=document.querySelectorAll(".form-step");
const passoProgresso=document.querySelectorAll(".passo-progredido")

let formnum = 0;

proxBtn.forEach((btn) => {
    btn.addEventListener("click", () =>  {
        formnum++;
        atualizaPasso();
        atualizaProgresso();
    });
});

anteBtn.forEach((btn) => {
    btn.addEventListener("click", () =>  {
        formnum--;
        atualizaPasso();
        atualizaProgresso();
    });
});

function atualizaPasso() {
    
    formPasso.forEach(formPasso => {
        formPasso.classList.contains("form-step-active") &&
        formPasso.classList.remove("form-step-active");
    } )


    formPasso[formnum].classList.add("form-step-active");
}
function atualizaProgresso() {
    passoProgresso.forEach((passo_progresso, index) => {
        if (index < formnum + 1) {
            passo_progresso.classList.add('passo-progredido-active')
        }else{
            passo_progresso.classList.remove('passo-progredido-active')
        }

    })    


}
function validar() {
    var senha = formuser.senha.value;
    var confSenha = formuser.confSenha.value;
    if (senha != confSenha) {
        alert("Senhas Diferentes");
        formuser.senha.focus();
        return false;
    }
}