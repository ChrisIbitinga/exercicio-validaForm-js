<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Contato-Validação JS e PHP</title>
    <meta charset="UTF-8">
      <!--
    Formatted for readability
  -->
  <meta
    name="viewport"
    content="
      width=device-width,
      initial-scale=1,
      minimum-scale=1,
      maximum-scale=1
    "
  />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/grid.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav>
            <div class="brand">
                <img class="width-100" src="img/logo.png" alt="">
            </div>
            <div class="menu mobile-none">
                <ul>

                    <li> <a href="#">Inicio</a> </li>
                    <li> <a href="#">Sobre Nós</a> </li>
                    <li> <a href="#">Serviços</a> </li>
                    <li><a class="active" href="#">Contato</a> </li>

                </ul>
            </div>
            <div class="toggle wide-none">
                <i onclick="openSide()" class="material-icons">menu</i>
            </div>
            <div class="menu-mobile" id="menu-mobile">
                <ul class="">
                    <li class="close"><i class="material-icons" onclick="closeSide()">close</i></li>
                    <li> <a href="#">Inicio</a> </li>
                    <li> <a href="#">Sobre Nós</a> </li>
                    <li> <a href="#">Serviços</a> </li>
                    <li><a class="active" href="#">Contato</a> </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="box-form">
        <div class="row">
            <h1> <i class="material-icons">assignment</i>Cadastro de contato</h1>
        </div>
        <div class="row">
            <form action="testarFormulario.php" id="frm_envio" method="post">
                <div class="grid-50">
                    <i class="material-icons frm">person</i><label for="txt_nome">Nome</label>
                    <input type="text" id="txt_nome" name="txt_nome" placeholder="Ex: Dino da Silva Saiuro">
                </div>
                <div class="grid-50">
                    <i class="material-icons frm">mail</i><label for="txt_email">E-mail</label>
                    <input class="" type="text" id="txt_email" name="txt_email" placeholder="Ex: joao.sauro@textt.com">
                </div>
                <div class="grid-50">
                    <i class="material-icons frm">phone</i><label for="txt_telefone">Telefone</label>
                    <input class="" type="text" id="txt_telefone" name="txt_telefone" placeholder="(16) 3333-3333">
                </div>
                <div class="grid-50">
                    <i class="material-icons frm">error_outline</i><label for="slq_assunto">Assunto</label>
                    <select id="slc_assunto" name="slc_assunto">
                        <option value="1">Suporte</option>
                        <option value="2">Agendamento</option>
                        <option value="3">Comercial</option>
                        <option value="4">Financeiro</option>
                    </select>
                </div>
                <div class="grid-100">
                    <i class="material-icons frm">edit</i><label for="txa_mensagem">Mensagem</label>
                    <textarea name="txa_mensagem" id="txa_mensagem">

                    </textarea>
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>



    <script src="js/script.js"></script>
</body>

</html>