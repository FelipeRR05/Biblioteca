<html>
    <body>
    <?php
session_start();

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
    // Obter os valores do nome e CPF da página anterior
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    // Consulta para selecionar o usuário com base no nome e CPF fornecidos
    $sql = "SELECT * FROM usuario WHERE nome = '$nome' AND cpf = '$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Armazenar os valores do usuário na sessão
        $row = $result->fetch_assoc();
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['cpf'] = $row['cpf'];
        $_SESSION['email'] = $row['email'];

        // Redirecionar para a página de atualização de perfil
        header("Location: atualizarEmail.php");
        exit();
    } else {
        echo "Nenhum usuário encontrado.";
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
    </body>
</html>
