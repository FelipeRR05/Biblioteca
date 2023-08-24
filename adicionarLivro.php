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
    $nome = $_POST["nome"];
    $autor = $_POST["autor"];
    $genero = $_POST["genero"];
    $anoPublicado = $_POST["anoPublicado"];
    $sinopse = $_POST["sinopse"];
    $capaLivro = $_POST["capaLivro"];
    $rua = $_POST["rua"];
    $prateleira = $_POST["prateleira"];
    $fileira = $_POST["fileira"];
    $isbn = $_POST["isbn"];
    $editora = $_POST["editora"];
    $paginas = $_POST["paginas"];
    $estoque = $_POST["estoque"];

    // Preparar a instrução SQL para inserção do novo livro
    $sql = "INSERT INTO acervo (nome, autor, genero, anoPublicado, sinopse, capaLivro, rua, prateleira, fileira, isbn, editora, paginas, estoque) 
    VALUES ('$nome', '$autor', '$genero', '$anoPublicado', '$sinopse', '$capaLivro', '$rua', '$prateleira', '$fileira', '$isbn', '$editora', '$paginas', '$estoque')";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar para a mesma página
        header("Location: acervo.php");
    } else {
        echo "Erro ao adicionar livro: " . $conn->error;
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
