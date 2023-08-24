<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "projeto_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

if (isset($_GET["id"])) {
    $turmaId = $_GET["id"];

    // Deletar o livro do banco de dados
    $sql = "DELETE FROM turma WHERE id = '$turmaId'";

    if ($conn->query($sql) === true) {
        // Redirecionar o usuário de volta para a página anterior
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;
    } else {
        echo "Erro ao deletar a turma: " . $conn->error;
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>