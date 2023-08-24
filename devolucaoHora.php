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
            // Verifica se foi passado o parâmetro 'id' via GET
            if (isset($_GET['id'])) {
                $horaId = $_GET['id'];

                // Obter informações do empréstimo antes de excluir
                $sqlGetEmprestimo = "SELECT * FROM hora WHERE id='$horaId'";
                $resultadoEmprestimo = $conexao->query($sqlGetEmprestimo);

                if ($resultadoEmprestimo->num_rows === 1) {
                    $emprestimo = $resultadoEmprestimo->fetch_assoc();
                    $titulo = $emprestimo['titulo'];
                    $nome = $emprestimo['nome'];

                    // Deleta o empréstimo da tabela hora
                    $sqlDeletarEmprestimo = "DELETE FROM hora WHERE id='$horaId'";
                    if ($conexao->query($sqlDeletarEmprestimo) === true) {
                        // Atualiza o estoque na tabela acervo
                        $sqlAtualizarEstoque = "UPDATE `acervo`
                                                SET `estoque` = `estoque` + 1
                                                WHERE `nome` = '$titulo'";
                        if ($conexao->query($sqlAtualizarEstoque) === true) {
                            // Incrementa a coluna 'hora' na tabela 'usuario'
                            $sqlIncrementarhora = "UPDATE `usuario`
                                                    SET `hora` = `hora` + 1
                                                    WHERE `nome` = '$nome'";
                            if ($conexao->query($sqlIncrementarhora) === true) {
                                echo "Empréstimo removido com sucesso. Estoque atualizado. Coluna 'hora' na tabela 'usuario' incrementada.";
                            } else {
                                echo "Erro ao incrementar a coluna 'hora' na tabela 'usuario': " . $conexao->error;
                            }
                        } else {
                            echo "Erro ao atualizar o estoque: " . $conexao->error;
                        }
                    } else {
                        echo "Erro ao remover empréstimo: " . $conexao->error;
                    }
                } else {
                    echo "Empréstimo não encontrado.";
                }

                // Redireciona para a página de menu
                header('Location: hora.php');
                exit();
            } else {
                // Não foi passado o parâmetro 'id'
                echo "ID do empréstimo não especificado.";
            }
            
            // Fecha a conexão com o banco de dados
            $conexao->close();
        }
        ?>
    </body>
</html>
