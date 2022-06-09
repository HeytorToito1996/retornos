<?php include_once("operacoes/conexao.php");?>
<html>
    <head>
        <title>Meus Retornos</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
           $objDB = new db();
           $conexao = $objDB->conectaBanco();
           $sql = "SELECT * FROM meusretornos"; 
           $consulta = mysqli_query($conexao,$sql);
           $rowCount = mysqli_num_rows($consulta);
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome do Cliente</th>
                    <th scope="col">Código da Tela</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Horário</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <?php
                if($rowCount == 0){
                    $idRetorno = "";
                    $nomeCliente = "";
                    $codigoCliente = "";
                    $telefoneCliente = "";
                    $horario = "";
                }

                while ($linha = mysqli_fetch_assoc($consulta)){
                    $idRetorno = $linha['idRetorno'];
                    $nomeCliente = $linha['nomeCliente'];
                    $codigoCliente = $linha['codigoCliente'];
                    $telefoneCliente = $linha['telefoneCliente'];
                    $horario = $linha['horario'];  
            ?>
            <tr>
                <td><?php echo $nomeCliente ?></td>
                <td><?php echo $codigoCliente ?></td>
                <td><?php echo $telefoneCliente ?></td>
                <td><?php echo $horario ?></td>
                <td><a class="btn btn-warning" href="atualizar.php?id=<?php echo $idRetorno;?>">Alterar</a>||<a class="btn btn-danger" href="operacoes/deletar.php?id=<?php echo $idRetorno;?>"> Excluir</a></td>
            </tr>
             <?php
                }
             ?>
        </table>
    </body>
</html>