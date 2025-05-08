var botao_yes = document.getElementById('yes');
var botao_cadastrar = document.getElementById('cadastrar');
var modal = document.getElementById('modal');
var botao_nao = document.getElementById('nao')
var ok = document.getElementById('ok')
var modalok = document.getElementById('modal_ok');

function chamaModalok(){
    modal.classList.remove('oculta_ok')
    modal.classList.add('chama_ok')
}
function fechaModalok(){
    modal.classList.remove('chama_ok')
    modal.classList.add('oculta_ok')
}
function chamaModal(){
    modal.classList.remove('oculta')
    modal.classList.add('chama')
}
function fechaModal(){
    modal.classList.remove('chama')
    modal.classList.add('oculta')
}

botao_cadastrar.addEventListener('click',function(event){

    event.preventDefault();
    chamaModal()
    botao_nao.addEventListener('click', function(){
        fechaModal()
    })
    let formulario = document.getElementById('formulario');

    botao_yes.addEventListener('click',async function(event){

        let forms = new FormData(formulario);

        let dados_php = await fetch('./actions/cadastra_prod.php',{
            method:'POST',
            body: forms
        });
        let response = await dados_php.json();

        if(response.status == 200){
            chamaModalok()
        }
    })
})

