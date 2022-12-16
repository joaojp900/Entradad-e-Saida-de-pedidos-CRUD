<?php
class sla 
{
    public $nome;
    public $dataped;
    public $dataen;
    public $valor;
    public $descricao;
    public $idpedido;
     


public function __construct()
{
    include_once "Conexao.php";

}

public function cadastrar()
{
    $con = Conexao::conectar();//CONECTAR NO BD 
    //COMANDO SQL PARA CADASTRAR (INSERT)
    $cmd = $con->prepare("INSERT INTO usuario(nome,dataped,dataen,valor,descricao)
    
    VALUES(:nome, :dataped, :dataen, :valor, :descricao)");

    $cmd->bindParam(":nome",$this->nome);
    $cmd->bindParam(":dataped",$this->dataped);
    $cmd->bindParam(":dataen",$this->dataen);
    $cmd->bindParam(":valor",$this->valor);
    $cmd->bindParam(":descricao",$this->descricao);
    $cmd->bindParam(":idpedido",$this->idpedido);
    $cmd->execute();

}

public function consultar()
{
$con = Conexao::conectar();
$cmd = $con->prepare("SELECT *  FROM usuario");
$cmd->execute();
return $cmd->fetchAll(PDO::FETCH_OBJ);
}

public function excluir()
{
    $con = Conexao::conectar();
    $cmd = $con->prepare("DELETE FROM usuario WHERE idpedido = :idpedido");
    $cmd->bindParam(":idpedido", $this->idpedido);
    $cmd->execute();
    return $cmd->fetchAll(PDO::FETCH_OBJ);
}

public function retornar()
{
    $con = Conexao::conectar();
    $cmd = $con->prepare("SELECT * FROM usuario
    WHERE idpedido = :idpedido");
    $cmd->bindParam(":idpedido", $this->idpedido);
    $cmd->execute();
    return $cmd->fetchAll(PDO::FETCH_OBJ);
}

public function atualizar()
{
    $con = Conexao::conectar();
    $cmd = $con->prepare("UPDATE usuario SET nome = :nome,
     datape = :dataped,
     dataen = :dataen,
     valor = :valor,
     descricao = :descricao
     WHERE idpedido = :idpedido");
     //ENVIANDO O VALOR DOS PARAMETROS
     $cmd->bindParam(":idpedido", $idpedido);
     $cmd->bindParam(":nome", $this->nome);
     $cmd->bindParam("dataped", $this->dataped);
     $cmd->bindParam("dataen", $this->dataen);
     $cmd->bindParam("valor", $this->valor);
     $cmd->bindParam("descicao", $this->descricao);

     $cmd->execute();

}



















}