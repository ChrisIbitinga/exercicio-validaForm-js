<?php
require_once 'Formulario.php';


$nome = filter_var($_POST['txt_nome'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['txt_email'], FILTER_VALIDATE_EMAIL);
$telefone = filter_var($_POST['txt_telefone'], FILTER_SANITIZE_STRING);
$assunto = filter_var($_POST['slc_assunto'], FILTER_SANITIZE_STRING);
$mensagem = filter_var($_POST['txa_mensagem'], FILTER_SANITIZE_STRING);


if(strlen($nome) < 4 || strlen($nome) > 100 ){
    echo 'Nome iválido';
    die();
}else{
    $nome = $nome;
}
    
if(!preg_match('/(\w+@\w+\.+[a-z])/', $email)){
    echo "Email inváildo.";
    die();
}else{
    $email = $email;
}
    
if(!preg_match('/(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})/', $telefone)){
    echo "Telefone inváildo.";
    die();
}else{
    $telefone = $telefone;
}
if($assunto == 1){
    $assunto = 'Suporte';
 }else if($assunto == 2){
    $assunto = 'Agendamento';
 }else if($assunto == 3){
    $assunto = 'Comercial';
 }else if($assunto == 4){
    $assunto = 'Financeiro';
 }else{
    $assunto = '';
 }

 $Formulario = new Formulario($nome, $email, $telefone, $assunto, $mensagem );

 ?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
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
        <div class="grid-container">
            <div class="grid-100">
                <div class="row">
                    <h1> <i class="material-icons">mail</i>Confirmação de contato</h1>
                    <p> Olá <?php echo $Formulario->getNome();?>, seu e-mail foi recebido e entraremos em contato em até
                        24 horas.
                    </p>

                    <div class="grid-100">
                        <div class="grid-50">
                            <p><i class="material-icons frm">person</i> Nome:</p>
                        </div>
                        <div class="grid-50">
                            <p><span><?php echo $Formulario->getNome();?></span></p>
                        </div>
                    </div>



                    <div class="grid-100">
                        <div class="grid-50">
                            <p><i class="material-icons frm">mail</i> Email:</p>
                        </div>
                        <div class="grid-50">
                            <p><span><?php echo $Formulario->getEmail();?></span></p>
                        </div>

                    </div>

                    <div class="grid-100">
                        <div class="grid-50">
                            <p><i class="material-icons frm">phone</i> Telefone:</p>
                        </div>
                        <div class="grid-50">
                            <p><span><?php echo $Formulario->getTelefone();?></span></p>
                        </div>
                    </div>

                    <div class="grid-100">
                        <div class="grid-50">
                            <p><i class="material-icons frm">error_outline</i> Assunto:</p>
                        </div>
                        <div class="grid-50">
                            <p><span><?php echo $Formulario->getAssunto();?></span></h3>
                            </p>
                        </div>
                    </div>


                    <div class="box-mensagem">
                        <div class="grid-100">
                            <div class="grid-50">
                                <p> <i class="material-icons frm">edit</i> Mensagem:</p>
                            </div>
                            <div class="grid-50">
                                <p><span><?php echo $Formulario->getMensagem();?></span></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="js/script.js"></script>

</body>

</html>