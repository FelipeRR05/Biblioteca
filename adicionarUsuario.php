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
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $turma = $_POST['turma'];
    $idade = $_POST['idade'];
    $matricula = $_POST['matricula'];
    $serie = $_POST['serie'];
    $emp = $_POST['emp'];
    $clube = $_POST['clube'];
    $hora = $_POST['hora'];

    // Preparar a instrução SQL para inserção do novo livro
    
    $sql = "INSERT INTO `projeto_biblioteca`.`usuario`
    (`nome`, `email`, `telefone`, `endereco`, `cpf`, `senha`, `ativo`, `turma`, `idade`, `matricula`, `serie`, `emp`, `clube`, `hora`)
VALUES
    ('".$nome."', '".$email."', '".$telefone."', '".$endereco."', '".$cpf."', '".$senha."', 's', '".$turma."', '".$idade."', '".$matricula."', '".$serie."', '5', '1', '1')";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar para a mesma página
        header("Location: usuarios.php");
    } else {
        echo "Erro ao adicionar usuário: " . $conn->error;
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
