
<html>	
    <body>
		<?php
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
				$dataN = $conexao -> real_escape_string($_POST['dataN']);
				$cpf = $conexao -> real_escape_string($_POST['cpf']);
				$telefone = $conexao -> real_escape_string($_POST['telefone']);
				$endereco = $conexao -> real_escape_string($_POST['endereco']);
				$email = $conexao -> real_escape_string($_POST['email']);
				$senha = $conexao -> real_escape_string($_POST['senha']);

				$sql = "INSERT INTO `projeto_biblioteca`.`usuario`
							(`nome`, `dataN`, `cpf`, `telefone`, `endereco`, `email`, `senha`, `ativo`)
						VALUES
							('".$nome."', '".$dataN. "', '".$cpf."', '".$telefone."', '".$endereco."', '".$email."', '".$senha."', 's');";

				$resultado = $conexao->query($sql);
				
				$conexao -> close();
				header('Location: index.php', true, 301);
			}
			
		?>
	</body>
</html>