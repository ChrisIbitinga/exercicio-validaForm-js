'use strict'

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('frm_cadastro').addEventListener('submit', function(event) {
        let dados = criarObjeto();

        if (!validar(dados))
            event.preventDefault();
    })
});

//FUNÇÃO PARA VALIDAR
function validar(dados) {
    var testeEmail = /\w+@\w+\.+[a-z]/;
    var testeData = /^(0?[1-9]|[12]\d|3[01])\/(0?[1-9]|1[0-2])\/(19|20)?\d{2}$/;
    var msg = [];

    if (dados.nome.length < 3 || dados.nome.length > 50) {
        msg.push('Nome Inválido');
        document.getElementById("name").className = 'danger';

    } else {
        document.getElementById("name").className = 'success';
    }
    if ((dados.email.length < 5 || dados.email.length > 100) || !testeEmail.test(dados.email)) {
        msg.push('E-mail Inválido');
        document.getElementById("email").className = 'danger';
    } else {
        document.getElementById("email").className = 'success';
    }
    if (dados.pass.length < 6 || dados.pass.length > 20) {
        msg.push('Senha Inválida');
        document.getElementById("pass").className = 'danger';
    } else {
        document.getElementById("pass").className = 'success';
    }
    if (dados.pass_conf.length < 1) {
        msg.push('As senhas não podem ser vazias.');
        document.getElementById("pass_conf").className = 'danger';
    } else if (dados.pass_conf != dados.pass) {
        msg.push('As senhas não conferem.');
        document.getElementById("pass_conf").className = 'danger';
    } else {
        document.getElementById("pass_conf").className = 'success';
    }
    if (dados.sexo != "F" && dados.sexo != "M") {
        msg.push('Genero não aceito.');
        document.getElementById("sexo").className = 'danger';
    } else {
        document.getElementById("sexo").className = 'success';
    }
    if (!testeData.test(dados.data)) {
        msg.push('Formato da data inválido.');
        document.getElementById("data").className = 'danger';
    } else {
        document.getElementById("data").className = 'success';
    }

    exibirMensagem(msg);
    return msg.length == 0;

}

//EXIBIR AS MENSAGENS DE STATUS
function exibirMensagem(msg) {
    let msgStatus = document.getElementById("msgText");
    msgStatus.innerHTML = '';

    var ul = document.createElement('ul');
    ul.className = 'msg-retorno';

    for (let i = 0; i < msg.length; i++) {
        var li = document.createElement('li');
        li.innerText = msg[i];

        ul.appendChild(li);

    }
    msgStatus.appendChild(ul);
}

//obj literal com os valores do input
function criarObjeto() {
    let obj = {
        nome: document.getElementById("name").value,
        email: document.getElementById("email").value,
        pass: document.getElementById("pass").value,
        pass_conf: document.getElementById("pass_conf").value,
        sexo: document.getElementById("sexo").value,
        data: document.getElementById("data").value,
        mensagem: document.getElementById("txt-area").value

    };

    return obj;

    console.log(obj);
}