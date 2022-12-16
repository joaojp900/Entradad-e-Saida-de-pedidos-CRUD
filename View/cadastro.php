<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include_once "home.php";?>
    <br><br>
<form action="<?php echo URL;?>dadosusu" method="POST">

<div class="mb-3">
    <label for="nome" class="form-label">Nome do Cliente</label>
    <input type="name" class="form-control" id="nome" aria-describedby="emailHelp" name="nome">
    
<br>

    <label for="datapedido" class="form-label">Data do pedido</label>
    <input type="date" class="form-control" id="datapedido" name="datapedido">
<br>


    <label for="dataentrega" class="form-label">Data de entrega</label>
    <input type="date" class="form-control" id="dataentrega" name="dataentrega" aria-describedby="emailHelp">

    <br> 

    
    <label for="valorservico" class="form-label">Valor do serviço $$</label>
    <input type="number" class="form-control" name="valorservico" id="valorservico" aria-describedby="emailHelp"  step="00.01" min="00.01">



    <br>

    <label for="descricao" class="form-label">Descriçao do serviço</label>
  <textarea class="form-control" id="descricao" name="descricao" rows="2"></textarea>


 <br>
 
 
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  
  </div>











</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>