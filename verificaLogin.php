<html>
    <body>
		
		<?php
			// iniciar uma sessão
			session_start();
			
			$hostname = "127.0.0.1";
			$user = "root";
			$password = "root";
			$database = "projeto_biblioteca";
		
			$conexao = new mysqli($hostname,$user,$password,$database);

			if ($conexao -> connect_errno) {
				echo "Failed to connect to MySQL: " . $conexao -> connect_error;
				exit();
			} else {
				// Evita caracteres epsciais (SQL Inject)
				$nome = $conexao -> real_escape_string($_POST['nome']);
				$senha = $conexao -> real_escape_string($_POST['senha']);

				$sql="SELECT `id`, `nome` FROM `usuario`
					WHERE `nome` = '".$nome."'
					AND `senha` = '".$senha."'
					AND ativo = 's';";

				$resultado = $conexao->query($sql);
				
				if($resultado->num_rows != 0)
				{
					$row = $resultado -> fetch_array();
					$_SESSION['id'] = $row[0];
					$_SESSION['nome'] = $row[1];
					$conexao -> close();
					
					header('Location: catalogo.php', true, 301);
					exit();
				} else {
					
					$conexao -> close();
					header('Location: index.php', true, 301);
				}
			}
		?>
	</body>
</html>