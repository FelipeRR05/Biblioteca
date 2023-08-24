<?php
date_default_timezone_set('America/Sao_Paulo');

$hostname = "127.0.0.1";
$user = "root";
$password = "root";
$database = "projeto_biblioteca";

// Cria a conexão com o banco de dados
$conexao = new mysqli($hostname, $user, $password, $database);

// Verifica a conexão
if ($conexao->connect_errno) {
    echo "Falha na conexão com o MySQL: " . $conexao->connect_error;
    exit();
}

// Verifica se o parâmetro 'id' foi passado via GET
if (isset($_GET['id'])) {
    $empId = $_GET['id'];

    // Obtém informações do empréstimo antes de excluir
    $sqlGetEmprestimo = "SELECT * FROM emprestimo WHERE id='$empId'";
    $resultadoEmprestimo = $conexao->query($sqlGetEmprestimo);

    if ($resultadoEmprestimo->num_rows === 1) {
        $emprestimo = $resultadoEmprestimo->fetch_assoc();
        $titulo = $emprestimo['titulo'];
        $nome = $emprestimo['nome'];
        $fimEmp = $emprestimo['fimEmp'];

        // Calcula a multa, se aplicável
        $fimEmpTimestamp = strtotime($fimEmp);
        $dataDevolucaoTimestamp = time();
        $diasAtraso = max(0, floor(($dataDevolucaoTimestamp - $fimEmpTimestamp) / (60 * 60 * 24)));
        $valorMulta = $diasAtraso * 1.0;

        // Exibe um alerta sobre a multa
        echo "<script>";
        if ($valorMulta > 0) {
            echo "alert('Devolução atrasada. Multa: R$ $valorMulta');";
        } else {
            echo "alert('Devolução feita dentro do prazo. Sem multa.');";
        }
        echo "window.location.href = 'relatorio.php';";
        echo "</script>";

        // Deleta o empréstimo da tabela emprestimo
        $sqlDeletarEmprestimo = "DELETE FROM emprestimo WHERE id='$empId'";
        if ($conexao->query($sqlDeletarEmprestimo) === true) {
            // Atualiza o estoque na tabela acervo
            $sqlAtualizarEstoque = "UPDATE acervo
                                    SET estoque = estoque + 1
                                    WHERE nome = '$titulo'";
            if ($conexao->query($sqlAtualizarEstoque) === true) {
                // Incrementa a coluna 'emprestimo' na tabela 'usuario'
                $sqlIncrementarEmprestimo = "UPDATE usuario
                                            SET emp = emp + 1
                                            WHERE nome = '$nome'";
                if ($conexao->query($sqlIncrementarEmprestimo) !== true) {
                    echo "Erro ao incrementar a coluna 'emprestimo' na tabela 'usuario': " . $conexao->error;
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
} else {
    echo "ID do empréstimo não especificado.";
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>