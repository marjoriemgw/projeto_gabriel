<?php 
include_once('cad.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$tel = $_POST['tel'];
$senha = $_POST['senha'];

$sql = "INSERT INTO info
(nome, email, cpf, telefone, senha) VALUES
('$nome', '$email', '$cpf', '$tel', '$senha')";
$query= mysqli_query($conexao, $sql);

?>

<script>
    window.alert("Dados enviados com sucesso!");
    window.location.href = 'index.html';
</script>