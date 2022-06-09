<?php include_once('conexao.php'); ?>
<?php
$nomeCliente = $_POST['nomeCliente'];
$codigoTela = $_POST['codigoTela'];
$telefone = $_POST['telefone'];
$horario = $_POST['horario'];

$objDB = new db();
$link = $objDB->conectaBanco();

$query = "INSERT INTO meusretornos(nomeCliente,telefoneCliente,codigoCliente,horario) VALUES ('$nomeCliente','$telefone','$codigoTela','$horario')";

$cadastro = mysqli_query($link,$query);

if($cadastro){
    echo '<script>alert("Usuário Cadastrado com Sucesso");</script>'; 
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>