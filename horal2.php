<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="https://imagensemoldes.com.br/wp-content/uploads/2020/04/Livro-Aberto-PNG.png">
    <meta charset="utf-8">
    <title>Magic Book Library | Catálogo</title>
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
        <a href="menuAdm.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img height="150" src="img/Logo.png"></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="menuAdm.php" class="nav-item nav-link ">Catálogo</a>
                <a href="horal2.php" class="nav-item nav-link active">Empréstimo</a>
                <a href="acervo.php" class="nav-item nav-link ">Acervo</a>
                <a href="usuarios.php" class="nav-item nav-link ">Usuários</a>
                <a href="turma.php" class="nav-item nav-link ">Turmas</a>
                <a href="relatorio.php" class="nav-item nav-link ">Empréstimos</a>
                <a href="clube.php" class="nav-item nav-link ">Clube do Livro</a>
                <a href="hora.php" class="nav-item nav-link ">Hora da Leitura</a>
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
                    <h1 class="display-3 text-white animated slideInDown">Empréstimo</h1>
                    <nav aria-label="breadcrumb"></ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
<!-- About Start -->
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Empréstimo</h6>
                <h1 class="mb-5">Empréstimo do Livro</h1>
            </div>
            <div class="row g-4">
            <?php
date_default_timezone_set('America/Sao_Paulo');


// Conexão com o banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "projeto_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se foi passado um ID de livro válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $livroId = $_GET['id'];

    // Consulta para obter os detalhes do livro com base no ID
    $sql = "SELECT * FROM acervo WHERE id = $livroId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $livro = $result->fetch_assoc();
        $titulo = $livro['nome'];
        $capaLivro = $livro['capaLivro'];


        if ($result->num_rows > 0) {
            // Exibir as informações do usuário
            $row = $result->fetch_assoc();
            $nome = $row["nome"];
            $turma = $row["turma"];

            echo '<div style="display: flex; flex-direction: column; align-items: center; text-align: center;">';
            echo '<h2>' . $titulo . '</h2>';
            echo '<img src="img/' . $capaLivro . '" alt="Capa do livro" style="width: 200px;">';
            echo '</div>';

            // Exibir os detalhes do livro
            echo '<div style="display: flex; justify-content: center; align-items: center;">
            <div class="container" style="padding: 50px; background-color: #f7f7f7; box-shadow: 0px 0px 15px #666; width: 55%; border-radius: 15px;">
                <form action="registroHora2.php" method="POST">
                    <div style="display: flex; justify-content: center;">
                        <h2 style="color: rgba(17, 27, 88, 0.7);">Registro de Empréstimo</h2>
                    </div>
                    <div style="width: 100%; padding-bottom: 12px;">
                        <label style="float: left; padding-bottom: 5px;" for="titulo">Livro</label><br>
                        <input style="display: block; border: 2px solid #333; background-color: #eee; color: #333; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="text" id="titulo" name="titulo" value="' . $titulo . '" readonly>
                    </div>
                    <div style="width: 100%; padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px;" for="nome">Usuário</label><br>
                    <select style="flex: 1; width: calc(100% - 0px); border: 2px solid #ccc; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" id="nome" name="nome" required>';
                    ?>
                    <?php
                    // Consulta para selecionar todos os nomes de usuário, ordenados pelo nome
                    $sql_usuarios = "SELECT * FROM usuario ORDER BY nome";
                    $result_usuarios = $conn->query($sql_usuarios);
            
                    if ($result_usuarios->num_rows > 0) {
                        while ($usuario_row = $result_usuarios->fetch_assoc()) {
                            echo '<option value="' . $usuario_row['nome'] . '">' . $usuario_row['nome'] . '</option>';
                        }
                    }
                    ?>
                    <?php
                echo '</select>                    
                                </div>
                    <div style="width: 100%; padding-bottom: 12px;">
                        <label style="float: left; padding-bottom: 5px;" for="turma">Turma</label><br>
                        <select style="flex: 1; width: calc(100% - 0px); border: 2px solid #ccc; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" id="turma" name="turma" required>';
                        ?>
                        <?php
                        // Consulta para selecionar todos os nomes de usuário, ordenados pelo nome
                        $sql_turmas = "SELECT * FROM turma ORDER BY turma";
                        $result_turmas = $conn->query($sql_turmas);
                
                        if ($result_turmas->num_rows > 0) {
                            while ($turma_row = $result_turmas->fetch_assoc()) {
                                echo '<option value="' . $turma_row['turma'] . '">' . $turma_row['turma'] . '</option>';
                            }
                        }
                        ?>
                        <?php
                    echo '</select>                    
                                    </div>                    
                    <div style="display: flex; justify-content: flex-end;">
                        <button type="submit" style="text-align: center; padding: 10px;">Registrar Empréstimo</button>
                    </div>
                </form>
            </div>
        </div>';

    } else {
        echo 'Usuário não encontrado.';
    }

} else {
    echo 'Livro não encontrado.';
}

} else {
echo 'ID de livro inválido.';
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