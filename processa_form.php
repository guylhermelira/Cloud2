<?php
// Dados do banco de dados
$host = "seu_host_mysql_azure";
$usuario = "seu_usuario_mysql";
$senha = "sua_senha_mysql";
$banco = "seu_banco_de_dados_mysql";

// Conectar ao banco de dados
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Pegar os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_checkin = $_POST['data_checkin'];
$data_checkout = $_POST['data_checkout'];

// Preparar e executar a query SQL
$sql = "INSERT INTO reservas (nome, email, telefone, data_checkin, data_checkout)
VALUES ('$nome', '$email', '$telefone', '$data_checkin', '$data_checkout')";

if ($conn->query($sql) === TRUE) {
    echo "Reserva feita com sucesso!";
} else {
    echo "Erro ao fazer a reserva: " . $conn->error;
}

// Fechar conexão
$conn->close();
?>
