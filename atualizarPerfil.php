<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "projeto_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se o usuário está logado
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php', true, 301);
    exit();
}

// Obtém o ID do usuário logado da sessão
$idUsuarioLogado = $_SESSION['id'];

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados atualizados do formulário
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $turma = $_POST["turma"];
    $idade = $_POST["idade"];
    $senha = $_POST["senha"];
    $matricula = $_POST["matricula"];
    $serie = $_POST["serie"];

    // Atualiza os dados no banco de dados
    $sql = "UPDATE usuario SET email = '$email', telefone = '$telefone', endereco = '$endereco', senha = '$senha' , turma = '$turma' , idade = '$idade' , matricula = '$matricula' , serie = '$serie' WHERE id = $idUsuarioLogado";
    if ($conn->query($sql) === true) {
        echo "Informações atualizadas com sucesso.";
        header("Location: perfil.php");
        exit();
    } else {
        echo "Erro ao atualizar informações: " . $conn->error;
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
