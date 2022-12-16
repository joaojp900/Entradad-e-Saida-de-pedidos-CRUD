<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FontAwesome CSS -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EtecNews - Usuários</title>
</head>
<body>
    <br>
    <br>

    <div class="container">
          <div class="mb-3">
         <div class="row mt-4 px-5">
               <div class="col-md  border border-4 border  mx-auto p-3 shadow" >
                <h5 class="text-center">Atualizar dados de usuário</h5>
                <form action="<?php echo URL;?>atualizar-servico" method="post">
                    <div class="form-group">
                        <label for="codusuario">Código</label>
                        <input type="text" name="idservicot" id="idservicot" class="form-control" value="<?php echo $dadosUsuario->idservicot;?>" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Informe o nome completo" class="form-control" value="<?php echo $dadosUsuario->nome;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Data de Pedido</label>
                        <input type="date" name="datapedido" id="datapedido" placeholder="Informe o e-mail" class="form-control" value="<?php echo $dadosUsuario->datapedido;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Data de Entrega</label>
                        <input type="date" name="dataentrega" id="dataentrega" placeholder="Informe o e-mail" class="form-control" value="<?php echo $dadosUsuario->dataentrega;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Valor do Serviço</label>
                        <input type="number" name="valorservico" id="valorservico" placeholder="Informe o e-mail" class="form-control" value="<?php echo $dadosUsuario->valorservico;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Descrição</label>
                        <input type="text" name="descricao" id="descricao" placeholder="Informe o e-mail" class="form-control" value="<?php echo $dadosUsuario->descricao;?>" required>
                    </div>
                   

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success mt-3">Gravar</button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>