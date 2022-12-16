<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    

 
<div class="container">
    <div class="row mt-4 px-5">
        <div class="col-md  border border-4 border  mx-auto p-3 shadow" >
            <h5 class="text-center">Consulta de Servico</h5>
                <table class="table table-bordered border-danger" id="tabela" class="border border-5">


                    <tbody>
                        
                    <thead>
                        <tr>
                        <th scope="col">Nome Cliente</th>
                        <th scope="col">Data do Pedido</th>
                        <th scope="col">Data de Entrega</th>
                        <th scope="col">Valor do Serviço</th>
                        <th scope="col">Descrição</th>
                        </tr>
                    </thead>

                        <?php 

                        
                        foreach($dados as $value) {
                        //caso não tenha imagem irá buscar uma imagem padrão    
                       
                        echo "<tr>
                                
                                <td>$value->nome</td>
                                <td>". date("d/m/Y",strtotime($value->dataped)) . "</td>
                                <td>". date("d/m/Y",strtotime($value->dataen)) . "</td>
                                <td>$value->valor
                                <td>$value->descricao

                                 
                               
                               
                                </td>
                                </td>
                                </td>
                                </td>

                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>













</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>