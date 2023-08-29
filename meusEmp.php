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
                <a href="meusEmp.php" class="nav-item nav-link active">Meus Empréstimos</a>
                <a href="perfil.php" class="nav-item nav-link">Perfil</a>
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
                    <h1 class="display-3 text-white animated slideInDown">Meus Empréstimos</h1>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Empréstimos</h6>
                <h1 class="mb-5">Meus Empréstimos</h1>
            </div>
            <div class="row g-4">
            <?php
date_default_timezone_set('America/Sao_Paulo');

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "projeto_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se o login foi feito e obter o ID do usuário logado
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header('Location: login.php', true, 301);
    exit();
}

// Obtém o ID do usuário logado da sessão
$idUsuario = $_SESSION['id'];

// Consultar o nome do usuário na tabela "usuario"
$sqlNomeUsuario = "SELECT nome FROM usuario WHERE id = '$idUsuario'";
$resultNomeUsuario = $conn->query($sqlNomeUsuario);

if ($resultNomeUsuario->num_rows > 0) {
    $rowNomeUsuario = $resultNomeUsuario->fetch_assoc();
    $nomeUsuario = $rowNomeUsuario["nome"];

    // Consulta para selecionar os empréstimos do usuário com base no nome
    $sqlLivrosUsuario = "SELECT e.*, a.capaLivro, a.autor, a.anoPublicado FROM emprestimo e JOIN acervo a ON e.titulo = a.nome WHERE e.nome = '$nomeUsuario' ORDER BY e.titulo";
    $resultLivrosUsuario = $conn->query($sqlLivrosUsuario);

    if ($resultLivrosUsuario->num_rows > 0) {
        echo '<div class="container">';
        echo '<h2 style="margin-bottom: 20px;">Lista de Empréstimos do Usuário: ' . $nomeUsuario . '</h2>';

        echo '<div class="row">';

        while ($livro = $resultLivrosUsuario->fetch_assoc()) {
            $empId = $livro["id"];
            $titulo = $livro['titulo'];
            $nome = $livro['nome'];
            $inicioEmp = date('d/m/Y', strtotime($livro['inicioEmp'])); // Converter para dia/mês/ano
            $fimEmp = date('d/m/Y', strtotime($livro['fimEmp'])); // Converter para dia/mês/ano
            $capaLivro = $livro['capaLivro'];
            $autor = $livro['autor'];
            $anoPublicado = $livro['anoPublicado'];
            $renovado = $livro['renovado'];

            echo '<div class="col-lg-3 col-md-6 wow fadeInUp d-flex justify-content-center" data-wow-delay="0.3s">';
            echo '<div class="bg-light" style="width: 250px;">';
            echo '<div class="position-relative overflow-hidden">';
            echo '<img class="img-fluid mx-auto d-block" src="img/' . $capaLivro . '" alt="" style="width: 100%;">';
            echo '</div>';
            echo '<div class="text-center p-4 pb-0">';
            echo '<h3 class="mb-0"></h3>';
            echo '<h5 class="mb-4">' . $titulo . '</h5>';
            echo '</div>';
            if ($renovado === '0') {

                echo '<div class="d-flex justify-content-center" style="padding-bottom: 10px;">';
                echo '<a href="renovar.php?id=' . $empId . '" class="flex-shrink-0 btn btn-sm btn-primary" style="border-radius: 30px;">Renovar</a>';
                echo '</div>';
                        } else {
                            
                echo '<div class="d-flex justify-content-center" style="padding-bottom: 10px;">';
                echo '<button class="flex-shrink-0 btn btn-sm btn-danger" style="border-radius: 30px;" disabled>Renovar</button>';
                echo '</div>';
            }
        
            echo '<div class="d-flex border-top">';
            echo '<small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>' . $autor . '</small>';
            echo '<small class="flex-fill text-center py-2"><i class="fa-solid fa-calendar-days text-primary me-2"></i>' . $anoPublicado . '</small>';
            echo '</div>';
            echo '<div class="text-center p-2">';
            echo '<small class="text-muted" style="color: black;">Prazo de Devolução: ' . $fimEmp . '</small>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        echo '</div>';
        echo '</div>';
    } else {
        echo "Nenhum livro emprestado pelo usuário " . $nomeUsuario. ". ";
    }
    $sqlClubesUsuario = "SELECT c.*, a.capaLivro, a.autor, a.anoPublicado FROM clube c JOIN acervo a ON c.titulo = a.nome WHERE c.nome = '$nomeUsuario' ORDER BY c.titulo"; 
    $resultClubesUsuario = $conn->query($sqlClubesUsuario);

    if ($resultClubesUsuario->num_rows > 0) {
        echo '<div class="container">';
        echo '<h2 style="margin-bottom: 20px;">Clube do Livro do Usuário: ' . $nomeUsuario . '</h2>';
    
        echo '<div class="row">';
    
        while ($clube = $resultClubesUsuario->fetch_assoc()) {
            $clubeId = $clube["id"];
            $titulo = $clube['titulo'];
            $nome = $clube['nome'];
            $capaLivro = $clube['capaLivro'];
            $autor = $clube['autor'];
            $anoPublicado = $clube['anoPublicado'];
            $pagina = $clube['pagina'];

            echo '<div class="col-lg-3 col-md-6 wow fadeInUp d-flex justify-content-center" data-wow-delay="0.3s">';
            echo '<div class="bg-light" style="width: 250px;">';
            echo '<div class="position-relative overflow-hidden">';
            echo '<img class="img-fluid mx-auto d-block" src="img/' . $capaLivro . '" alt="" style="width: 100%;">';
            echo '</div>';
            echo '<div class="text-center p-4 pb-0">';
            echo '<h3 class="mb-0"></h3>';
            echo '<h5 class="mb-4">' . $titulo . '</h5>';
            echo '</div>';
            echo '<div class="d-flex justify-content-center align-items-center" style="padding-bottom: 10px;">';
            echo '<a href="devolverClube.php?id=' . $clubeId . '" onclick="return confirm(\'Tem certeza de que deseja confirmar a devolução do livro?\')" class="flex-shrink-0 btn btn-sm btn-primary me-2" style="border-radius: 30px;">Devolver</a>';
            echo '<a href="editarClube.php?id=' . $clubeId . '" class="flex-shrink-0 btn btn-sm btn-primary" style="border-radius: 30px;">Editar</a>';
            echo '</div>';
            echo '<div class="d-flex border-top">';
            echo '<small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>' . $autor . '</small>';
            echo '<small class="flex-fill text-center py-2"><i class="fa-solid fa-calendar-days text-primary me-2"></i>' . $anoPublicado . '</small>';
            echo '</div>';
            echo '<div class="text-center p-2">';
            echo '<small class="text-muted" style="color: black;">Páginas lidas: ' . $pagina . '</small>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        echo '</div>';
        echo '</div>';
    } else {
        echo "O usuário " . $nomeUsuario . " não participa de nenhum clube do livro. ";
    }

    // ... Código para listagem do clube do livro ...

    // Consulta para selecionar as horas da leitura do usuário
    $sqlHorasLeitura = "SELECT h.*, a.capaLivro, a.autor, a.anoPublicado FROM hora h JOIN acervo a ON h.titulo = a.nome WHERE h.nome = '$nomeUsuario' ORDER BY h.titulo";
    $resultHorasLeitura = $conn->query($sqlHorasLeitura);

    if ($resultHorasLeitura->num_rows > 0) {
        echo '<div class="container">';
        echo '<h2 style="margin-bottom: 20px;">Hora da Leitura do Usuário: ' . $nomeUsuario . '</h2>';
    
        echo '<div class="row">';
    
        while ($horaLeitura = $resultHorasLeitura->fetch_assoc()) {
            $horaId = $horaLeitura["id"];
            $titulo = $horaLeitura['titulo'];
            $nome = $horaLeitura['nome'];
            $capaLivro = $horaLeitura['capaLivro'];
            $autor = $horaLeitura['autor'];
            $anoPublicado = $horaLeitura['anoPublicado'];
            $pagina = $horaLeitura['pagina'];

            echo '<div class="col-lg-3 col-md-6 wow fadeInUp d-flex justify-content-center" data-wow-delay="0.3s">';
    echo '<div class="bg-light" style="width: 250px;">';
    echo '<div class="position-relative overflow-hidden">';
    echo '<img class="img-fluid mx-auto d-block" src="img/' . $capaLivro . '" alt="" style="width: 100%;">';
    echo '</div>';
    echo '<div class="text-center p-4 pb-0">';
    echo '<h5 class="mb-4">' . $titulo . '</h5>';
    echo '</div>';
    echo '<div class="d-flex justify-content-center align-items-center" style="padding-bottom: 10px;">';
    echo '<a href="devolverHora.php?id=' . $horaId . '" onclick="return confirm(\'Tem certeza de que deseja confirmar a devolução do livro?\')" class="flex-shrink-0 btn btn-sm btn-primary me-2" style="border-radius: 30px;">Devolver</a>';
    echo '<a href="editarHora.php?id=' . $horaId . '" class="flex-shrink-0 btn btn-sm btn-primary" style="border-radius: 30px;">Editar</a>';
    echo '</div>';
    echo '<div class="d-flex border-top">';
    echo '<small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>' . $autor . '</small>';
    echo '<small class="flex-fill text-center py-2"><i class="fa-solid fa-calendar-days text-primary me-2"></i>' . $anoPublicado . '</small>';
    echo '</div>';
    echo '<div class="text-center p-2">';
    echo '<small class="text-muted" style="color: black;">Páginas lidas: ' . $pagina . '</small>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
        }

        echo '</div>';
        echo '</div>';
    } else {
        echo "O usuário " . $nomeUsuario . " não possui nenhum livro na hora da leitura registrado. ";
    }

    // ... Código para listagem das horas de leitura ...

} else {
    echo "Usuário não encontrado.";
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