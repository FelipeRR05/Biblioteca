<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "projeto_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $turma = $_POST["turma"];
    $serie = $_POST["serie"];
    $turno = $_POST["turno"];

    // Preparar a instrução SQL para inserção do novo livro
    $sql = "INSERT INTO turma (turma, serie, turno) 
    VALUES ('$turma', '$serie', '$turno')";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar para a mesma página
        header("Location: turma.php");
    } else {
        echo "Erro ao adicionar turma: " . $conn->error;
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
