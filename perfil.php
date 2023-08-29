<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="https://imagensemoldes.com.br/wp-content/uploads/2020/04/Livro-Aberto-PNG.png">
    <meta charset="utf-8">
    <title>Magic Book Library</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://kit.fontawesome.com/be77d4a767.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="livros.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img height="150" src="img/Logo.png"></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="livros.php" class="nav-item nav-link">Catálogo</a>
                <a href="meusEmp.php" class="nav-item nav-link">Meus Empréstimos</a>
                <a href="perfil.php" class="nav-item nav-link active">Perfil</a>
                <a href="index.php" class="nav-item nav-link">Acessos</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Perfil</h1>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Meu Perfil</h6>
                <h1 class="mb-5">Atualizar Dados do Perfil</h1>
            </div>
            <div class="row g-4">
<?php
session_start();

include_once('funcoesJS.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header('Location: login.php', true, 301);
    exit();
}

// Obtém o ID do usuário logado da sessão
$idUsuarioLogado = $_SESSION['id'];

// Conexão com o banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "projeto_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta para selecionar todos os itens do acervo
$sql = "SELECT * FROM usuario WHERE id = $idUsuarioLogado"; // Substitua o "1" pelo ID do usuário atualmente logado
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir as informações do usuário
    $row = $result->fetch_assoc();
    $nome = $row["nome"];
    $email = $row["email"];
    $telefone = $row["telefone"];
    $endereco = $row["endereco"];
    $turma = $row["turma"];
    $idade = $row["idade"];
    $senha = $row["senha"];
    $matricula = $row["matricula"];
    $serie = $row["serie"];
    // ... adicione mais campos conforme necessário

    echo '
    <div style="display: flex; justify-content: center; align-items: center;">
        <div class="container" style="padding: 50px; background-color: #f7f7f7; box-shadow: 0px 0px 15px #666; width: 55%; border-radius: 15px;">
            <form action="atualizarPerfil.php" method="POST">
                <div style=" display: flex; justify-content: center;">
                    <h2 style="color: rgba(17, 27, 88, 0.7);">Atualizar Perfil</h2>
                </div>
                <div style="padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px;" for="nome">Nome</label><br>
                    <input style="display: block; border: 2px solid #333; background-color: #eee; color: #333; width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="text" id="nome" name="nome" value="' . $nome . '" readonly>
                </div>
                <div style="padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px;" for="email">Email</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="email" id="email" name="email" value="' . $email . '">
                </div>
                <div style="padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px;" for="telefone">Telefone</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="tel" id="telefone" name="telefone" value="' . $telefone . '">
                </div>
                <div style="padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px;" for="endereco">Endereço</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="text" id="endereco" name="endereco" value="' . $endereco . '">
                </div>
                <div style="padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px;" for="serie">Série</label><br>
                    <select style="display: block; border: 2px solid #ccc; width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" id="serie" name="serie" value="' . $serie . '">
                    <option value="" disabled selected>Selecione sua série</option>
                    <option value="1º Ano - EF">1º Ano - EF</option>
                    <option value="2º Ano - EF">2º Ano - EF</option>
                    <option value="3º Ano - EF">3º Ano - EF</option>
                    <option value="4º Ano - EF">4º Ano - EF</option>
                    <option value="5º Ano - EF">5º Ano - EF</option>
                    <option value="6º Ano - EF">6º Ano - EF</option>
                    <option value="7º Ano - EF">7º Ano - EF</option>
                    <option value="8º Ano - EF">8º Ano - EF</option>
                    <option value="9º Ano - EF">9º Ano - EF</option>
                    <option value="1º Ano - EM">1º Ano - EM</option>
                    <option value="2º Ano - EM">2º Ano - EM</option>
                    <option value="3º Ano - EM">3º Ano - EM</option>
                </select>   
                                </div>
                <div style="padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px;" for="turma">Turma</label><br>
                    <select style="display: block; border: 2px solid #ccc; width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" id="turma" name="turma" required>';
                
                    ?>
                                    <?php
                    // Consulta para selecionar todos os nomes de turma, ordenados pelo nome
                    $sql_turma = "SELECT * FROM turma ORDER BY turma";
                    $result_turma = $conn->query($sql_turma);
                    
                    if ($result_turma->num_rows > 0) {
                        while ($turma_row = $result_turma->fetch_assoc()) {
                            echo '<option value="' . $turma_row['turma'] . '">' . $turma_row['turma'] . '</option>';
                        }
                    }
                    
                    // Fechar o resultado do cursor
                    $result_turma->free_result();
                    
                    ?>
                    <?php            
                    echo '    </select>
                    </div>  
                <div style="padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px;" for="matricula">Matrícula</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="number" id="matricula" name="matricula" value="' . $matricula . '">
                </div>
                <div style="padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px;" for="idade">Idade</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="number" id="idade" name="idade" value="' . $idade . '">
                </div>
                <div style="padding-bottom: 12px;">
                <label style="float: left; padding-bottom: 5px;" for="senha">Senha</label><br>
                <div style="position: relative;">
                    <input style="display: block; border: 2px solid #ccc; width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="password" id="senha" name="senha" value="' . $senha . '">
                    <span style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye" id="icone-senha" style="padding-right: 10px; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"></i>
                    </span>
                </div>
            </div>
                <div style="padding-bottom: 12px;">
                    <div style="width: 100%; display: flex; justify-content: space-between; align-items: center;">
                        <label style="position: relative; top: 10px;"></label>
                        <div style="display: flex; justify-content: flex-end;">
                            <button type="submit">Atualizar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>';

    echo '
    <div style="padding-top: 25px; display: flex; justify-content: center; align-items: center;">
        <form action="logout.php" method="POST">
            <button type="submit">Sair</button>
        </form>
    </div>';
} else {
    echo "Nenhum usuário encontrado.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-4">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6 text-start">
                <h4 class="text-white mb-3">Obrigado!</h4>
                <p class="mb-2"><i class=""></i>Agradecemos por nos visitar! Esperamos que você retorne sempre à Magic Book Library para explorar novos livros e continuar desfrutando da nossa vasta seleção. Estamos aqui para acompanhá-lo em sua jornada de leitura.</p>
                <p class="mb-2"><i class=""></i>Volte sempre!</p>
            </div>
            <div class="col-lg-3 col-md-6 text-start">
                <h4 class="text-white mb-3"></h4>
                <p class="mb-2"><i class=""></i></p>
                <p class="mb-2"><i class=""></i></p>
                <p class="mb-2"><i class=""></i></p>
            </div>
            
            <div class="col-lg-3 col-md-6 text-end ">
                <h4 class="text-white mb-3">Contatos</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Av. Ver. Abrahão João Francisco, 3655 - Ressacda, Itajaí-SC</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+55 (47) 99999-9999</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>estudante@sesisenai.org.br</p>
            </div>
        </div>
    </div>
</div>
    <!-- Footer End -->


    <!-- Back to Top -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>