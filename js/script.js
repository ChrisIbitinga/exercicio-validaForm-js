'use strict'

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('frm_envio').addEventListener('submit', function(event) {
        let dados = criarObj();

        if (!validarCampos(dados))
            event.preventDefault();


    });
});

function criarObj() {
    let dadosCampos = {
        nome: document.getElementById('txt_nome').value,
        email: document.getElementById('txt_email').value,
        telefone: document.getElementById('txt_telefone').value,
        assunto: document.getElementById('slc_assunto').value,
        mensagem: document.getElementById('txa_mensagem').value,

    };

    return dadosCampos;
};

//VALIDAR OS CAMPOS


function validarCampos(dados) {
    var testeEmail = /\w+@\w+\.+[a-z]/;
    var testeTelefone = /(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})/
    var result = [];

    if (dados.nome.length < 4 || dados.nome.length > 100) {
        document.getElementById("txt_nome").className = 'error';
        var result = alert('Nome inválido!')

    } else {
        document.getElementById("txt_nome").className = 'success';
    }
    if (!testeEmail.test(dados.email)) {
        document.getElementById("txt_email").className = 'error';
        var result = alert('Email inválido!')
    } else {
        document.getElementById("txt_email").className = 'success';
    }
    if (!testeTelefone.test(dados.telefone)) {
        document.getElementById("txt_telefone").className = 'error';
        var result = alert('Telefone inválido!')
    } else {
        document.getElementById("txt_telefone").className = 'success';
    }
    return result == 0;
}







// FUNÇÃO PARA ABRIR O MENU MOBILE
function openSide() {
    let abrir = 'open';
    let classe = document.getElementById("menu-mobile")
    classe.className += " open";

}
// FUNÇÃO PARA FECHAR O MENU MOBILE
function closeSide() {
    let abrir = 'open';
    let classe = document.getElementById("menu-mobile")
    classe.className = " menu-mobile";
}