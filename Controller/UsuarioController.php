<?php
include_once "model/Usuario.php";

class UsuarioController
{
    public function abrircadastro()
    {
        include_once "view/cadastro.php";
    }

    public function abrirconsulta()
    {
        $usu= new sla();
        $dados = $usu->consultar();
        include_once "view/consulta.php";
    }

    public function cadastrar()
    {
      $usu = new sla();
      $usu->nome = $_POST['nome'];
      $usu->dataped = $_POST['datapedido'];
      $usu->dataen = $_POST['dataentrega'];
      $usu->valor = $_POST['valorservico'];
      $usu->descricao = $_POST['descricao'];
      $usu->cadastrar();

      echo "<script>
      alert('Dados gravados com sucesso!');
      window.location='".URL."home';
  </script>";
    }

    public function excluir($idpedido)
    {
        $usu = new sla();
        $usu->idpedido = $idpedido;
        $usu->excluir();
        header("location:".URL."consulta");

    }

    public function editar($idpedido)
    {
        $usu = new sla();
        $usu->idpedido = $idpedido;
        $dados = $usu->retornar();
        include_once "view/editar.php";
     }

     public function atualiza()
     {
        $usu = new sla();//colocar a classe em uso
        //enviar valores do formulário para a classe
        $usu->idservicot        = $_POST["idpedido"];
        $usu->nome              = $_POST["nome"];
        $usu->datapedido       = $_POST["dataped"];
        $usu->dataentrega             = $_POST["dataen"];
        $usu->valorservico            = $_POST["valor"];
        $usu->descricao            = $_POST["descricao"];
        $usu->atualizar(); //executar o método que atualizar
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados atualizados com sucesso!');
                window.location='".URL."consulta-servico';
            </script>";
    }
 }


    
