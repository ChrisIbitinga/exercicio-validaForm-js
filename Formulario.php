<?php 

class Formulario{
    private $nome;
    private $email;
    private $telefone;
    private $assunto;
    private $mensagem;

  public function __construct($nome, $email, $telefone, $assunto, $mensagem ){
      $this->nome = $nome;
      $this->email = $email;
      $this->telefone = $telefone;
      $this->assunto = $assunto;
      $this->mensagem = $mensagem;
  }

  public function  getNome(){
      return $this->nome;
  }

  public function getEmail()
    {
        return $this->email;
    }

   public function getTelefone()
      {
            return $this->telefone;
      }

      public function getAssunto()
      {
            return $this->assunto;
      }


      public function getMensagem()
      {
            return $this->mensagem;
      }
}






?>