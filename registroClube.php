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
            $titulo = $conexao->real_escape_string($_POST['titulo']);
            $nome = $conexao->real_escape_string($_POST['nome']);
            $turma = $conexao->real_escape_string($_POST['turma']);
            $pagina = $conexao->real_escape_string($_POST['pagina']);

            // Insere o novo empréstimo no banco de dados
            $sqlInserirEmprestimo = "INSERT INTO `clube`
                                        (`titulo`, `nome`, `turma`, `pagina`)
                                    VALUES
                                        ('$titulo', '$nome', '$turma', '0')";

            if ($conexao->query($sqlInserirEmprestimo) === true) {
                // Registro de empréstimo inserido com sucesso
        
                // Agora atualizaremos o estoque na tabela acervo
                $sqlAtualizarEstoque = "UPDATE `acervo`
                                        SET `estoque` = `estoque` - 1
                                        WHERE `nome` = '$titulo'";
        
        if ($conexao->query($sqlAtualizarEstoque) === true) {
            // Atualiza a coluna "emp" na tabela "usuario"
            $sqlAtualizarEmpColuna = "UPDATE `usuario`
                                    SET `clube` = `clube` - 1
                                    WHERE `nome` = '$nome'";

            if ($conexao->query($sqlAtualizarEmpColuna) === true) {
                echo "Empréstimo registrado com sucesso. Estoque atualizado. Coluna 'emp' na tabela 'usuario' atualizada.";
            } else {
                echo "Erro ao atualizar a coluna 'emp' na tabela 'usuario': " . $conexao->error;
            }
        } else {
            echo "Erro ao atualizar o estoque: " . $conexao->error;
        }

        // Redireciona para a página de menu
        header('Location: meusEmp.php');
        exit();
    } else {
        // Ocorreu um erro ao registrar o empréstimo
        echo "Erro ao registrar empréstimo: " . $conexao->error;
    }

            // Fecha a conexão com o banco de dados
            $conexao->close();
        }
        ?>
    </body>
</html>
