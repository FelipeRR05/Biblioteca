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
    $clubeId = $_GET["id"];

    // Deletar o livro do banco de dados
    $sql = "DELETE FROM clube WHERE id = '$clubeId'";

    if ($conn->query($sql) === true) {
        // Redirecionar o usuário de volta para a página anterior
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;
    } else {
        echo "Erro ao deletar o empréstimo: " . $conn->error;
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>