<html>
    <body>
        <?php
        $hostname = "127.0.0.1";
        $user = "root";
        $password = "root";
        $database = "projeto_biblioteca";

        $conexao = new mysqli($hostname, $user, $password, $database);

        if ($conexao->connect_errno) {
            echo "Failed to connect to MySQL: " . $conexao->connect_error;
            exit();
        } else {
            // Evita caracteres especiais (SQL Injection)
            $nome = $conexao->real_escape_string($_POST['nome']);
            $email = $conexao->real_escape_string($_POST['email']);
            $telefone = $conexao->real_escape_string($_POST['telefone']);
            $endereco = $conexao->real_escape_string($_POST['endereco']);
            $cpf = $conexao->real_escape_string($_POST['cpf']);
            $senha = $conexao->real_escape_string($_POST['senha']);
            $confirmarSenha = $conexao->real_escape_string($_POST['confirmar_senha']);
            $turma = $conexao->real_escape_string($_POST['turma']);
            $idade = $conexao->real_escape_string($_POST['idade']);
            $matricula = $conexao->real_escape_string($_POST['matricula']);
            $serie = $conexao->real_escape_string($_POST['serie']);
            $emp = $conexao->real_escape_string($_POST['emp']);
            $clube = $conexao->real_escape_string($_POST['clube']);
            $hora = $conexao->real_escape_string($_POST['hora']);

            // Verifica se a senha e confirmar senha são iguais
            if ($senha !== $confirmarSenha) {
                header('Location: cadastro.php', true, 301);
                exit();
            }

            // Verifica se o usuário já existe no banco de dados
            $sqlVerificaUsuario = "SELECT id FROM usuario WHERE email = '".$email."'";
            $resultadoVerificaUsuario = $conexao->query($sqlVerificaUsuario);

            if ($resultadoVerificaUsuario->num_rows > 0) {
                // Usuário já existe, você pode redirecionar para uma página de erro ou exibir uma mensagem
                echo "Email já cadastrado.";
                echo '<p>Já possui cadastro? <a href="login.php">ENTRAR</a></p>';
                echo '<p>Novo na Magic Book Library? <a href="cadastro.php">CADASTRE-SE</a></p>';
                exit();
            }

            // Insere o novo usuário no banco de dados
            $sqlInserirUsuario = "INSERT INTO `projeto_biblioteca`.`usuario`
                                    (`nome`, `email`, `telefone`, `endereco`, `cpf`, `senha`, `ativo`, `turma`, `idade`, `matricula`, `serie`, `emp`, `clube`, `hora`)
                                VALUES
                                    ('".$nome."', '".$email."', '".$telefone."', '".$endereco."', '".$cpf."', '".$senha."', 's', '".$turma."', '".$idade."', '".$matricula."', '".$serie."', '5', '1', '1')";

            if ($conexao->query($sqlInserirUsuario) === TRUE) {
                // Obtém o ID do usuário recém-cadastrado
                $idUsuario = $conexao->insert_id;

                // Fecha a conexão com o banco de dados
                $conexao->close();

                // Inicia a sessão e armazena o ID do usuário
                session_start();
                $_SESSION['id'] = $idUsuario;

                // Redireciona para a página de menu (livros.php)
                header('Location: livros.php', true, 301);
                exit();
            } else {
                echo "Erro ao cadastrar o usuário: " . $conexao->error;
            }

            $conexao->close();
        }
        ?>
    </body>
</html>
