<?php include_once('conexao.php'); ?>

<?php
$idRetorno = $_GET['id'];
$objDB = new db();
$conexao = $objDB -> conectaBanco();
$sql = "DELETE FROM meusretornos WHERE idRetorno = '$idRetorno'";
$consulta = mysqli_query($conexao,$sql);

if(empty($idRetorno)){
    echo '<script>alert("Não há parâmetros para exclusão");</script>'; 
    echo "<meta http-equiv='refresh' content='0;url=../listar.php'>";
}

else if($consulta){
    echo '<script>alert("Retorno Excluído com Sucesso");</script>'; 
    echo "<meta http-equiv='refresh' content='0;url=../listar.php'>";
}
?>