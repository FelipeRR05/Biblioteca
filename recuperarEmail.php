<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['nome']) || !isset($_SESSION['cpf']) || !isset($_SESSION['email'])) {
    header("Location: verificarEmail.php");
    exit();
}

// Conexão com o banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "projeto_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
} else {
    // Obter os valores atualizados do formulário
    $nome = $_SESSION['nome'];
    $cpf = $_SESSION['cpf'];
    $email = $_POST['email'];

    // Atualizar o perfil do usuário no banco de dados
    $sql = "UPDATE usuario SET email = '$email' WHERE nome = '$nome' AND cpf = '$cpf'";

    if ($conn->query($sql) === TRUE) {
        echo "Perfil atualizado com sucesso!";
        header("Location: login.php");
    } else {
        echo "Erro ao atualizar o perfil: " . $conn->error;
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
