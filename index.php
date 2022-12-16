<?php
session_start();

include_once "controller/UsuarioController.php";
include_once "controller/HomeController.php";

define('URL','http://localhost/treino/');

if(isset($_GET['url']))
{
    $url = explode('/', $_GET['url']);
    switch($url[0])
    {
        //rotas para categoria

      case 'home':
       $home = new HomeController();
       $home->abrirhome();
       break;

       case 'cadastro':
        $usu = new UsuarioController();
        $usu->abrircadastro();
        break; 
      
        case'dadosusu':
        $usu = new UsuarioController();
        $usu->cadastrar();
        break;

        case'consulta':
         $usu = new UsuarioController();
         $usu->abrirconsulta();
         break;

         case'excluir':
          $not = new UsuarioController();
          $not->excluir($url[1]);
          break;

          case 'editar' :
            $usu = new UsuarioController();
            $usu->editar($url[1]);
            break;

        case 'atualizar' :
            $usu = new UsuarioController();
            $usu->atualiza();
            break;

        default:
           echo"página não encontrada<br>
           verificar se existe a rota criada<br>
           Tentando acessar a rota: $url[0]";
        break;

        
    }
}