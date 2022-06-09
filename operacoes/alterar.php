<?php include_once ('conexao.php'); ?>

<?php
$idRetorno = $_POST['idRetorno'];
$nomeCliente = $_POST['nomeCliente'];
$codigoTela = $_POST['codigoCliente'];
$telefone = $_POST['telefoneCliente'];
$horario = $_POST['horario'];


$objDB = new db();
$conexao = $objDB -> conectaBanco();
$sql = "UPDATE meusretornos SET nomeCliente = '$nomeCliente', codigoCliente = '$codigoTela',telefoneCliente = '$telefone',horario = '$horario' WHERE idRetorno = '$idRetorno'";

$consulta = mysqli_query($conexao,$sql);

if($consulta){
    echo '<script>alert("Atualização Realizada com Sucesso");</script>'; 
    echo "<meta http-equiv='refresh' content='0;url=../listar.php'>";
}
?>