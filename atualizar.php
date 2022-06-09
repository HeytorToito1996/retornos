<?php include_once("operacoes/conexao.php");?>
<html>
    <head>
        <title>Meus Retornos</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
           $id = $_GET['id'];
           if(empty($id)){
               echo '<script>alert("Não há parâmetros para exclusão");</script>'; 
               echo "<meta http-equiv='refresh' content='0;url=listar.php'>";
           }
           else {
            $objDB = new db();
            $conexao = $objDB->conectaBanco();
            $sql = "SELECT * FROM meusretornos WHERE idRetorno = '$id'"; 
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

                else{

                    while ($linha = mysqli_fetch_assoc($consulta)){
                        $idRetorno = $linha['idRetorno'];
                        $nomeCliente = $linha['nomeCliente'];
                        $codigoCliente = $linha['codigoCliente'];
                        $telefoneCliente = $linha['telefoneCliente'];
                        $horario = $linha['horario'];
                    }
                } 
            ?>
            <tr> 
                <form action="operacoes/alterar.php" method="POST">   
                    <td><input type="text" name="nomeCliente" value="<?php echo $nomeCliente ?>"></td>
                    <td><input type="text" name="codigoCliente" value="<?php echo $codigoCliente ?>"></td>
                    <td><input type="text" name="telefoneCliente" value="<?php echo $telefoneCliente ?>"></td>
                    <td><input type="text" name="horario" value="<?php echo $horario ?>"></td>
                    <input type="hidden" name="idRetorno" value="<?php echo $idRetorno;?>">
                    <td><input type="submit" value="Atualizar" class="btn btn-success"></td>
                </form>   
            </tr>
        </table>
        <?php
           }
        ?>
    </body>
</html>