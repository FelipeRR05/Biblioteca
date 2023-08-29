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
                <a href="livros.php" class="nav-item nav-link active">Catálogo</a>
                <a href="meusEmp.php" class="nav-item nav-link">Meus Empréstimos</a>
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
                    <h1 class="display-3 text-white animated slideInDown">Catálogo</h1>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Livros</h6>
            </div>
            <div class="row g-4">
            <?php
// Conexão com o banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "projeto_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se o formulário de pesquisa foi enviado
if (isset($_GET['pesquisa'])) {
    $pesquisa = $_GET['pesquisa'];

    // Consulta para selecionar itens do acervo com base na pesquisa
    $sql = "SELECT * FROM acervo WHERE nome LIKE '%$pesquisa%' OR genero LIKE '%$pesquisa%' OR autor LIKE '%$pesquisa%' OR isbn LIKE '%$pesquisa%' ORDER BY nome";
} else if (isset($_GET['genero'])) {
    $generoSelecionado = $_GET['genero'];

    if ($generoSelecionado != '') {
        if ($generoSelecionado == 'Todos') {
            // Consulta para selecionar todos os itens do acervo, ordenados pelo nome
            $sql = "SELECT * FROM acervo ORDER BY nome";
        } else {
            // Consulta para selecionar itens do acervo com base no gênero selecionado, ordenados pelo nome
            $sql = "SELECT * FROM acervo WHERE genero LIKE '$generoSelecionado' ORDER BY nome";
        }
    } else {
        // Consulta para selecionar todos os itens do acervo, ordenados pelo nome
        $sql = "SELECT * FROM acervo ORDER BY nome";
    }
} else {
    // Consulta para selecionar todos os itens do acervo, ordenados pelo nome
    $sql = "SELECT * FROM acervo ORDER BY nome";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir os itens do acervo

    // Formulário de pesquisa
    echo '<form method="GET" action="livros.php">';
    echo '<div style="display: flex; align-items: center;">';
    echo '<input type="text" name="pesquisa" placeholder="Pesquisar livro">';
    echo '<button type="submit" style="background-color: #565d88; border: none; cursor: pointer; padding:10px; margin-left: 0px;"><i class="fas fa-search" style="color: white;"></i></button>';
    echo '</div>';
    echo '</form>';

    // Botões de filtro por gênero
    echo '<div style="margin-top: 20px; display: flex; justify-content: center;">';
    echo '<form method="GET" action="livros.php">';
    echo '<button type="submit" name="genero" value="Todos" style="background-color: #5a5c87; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px; margin-right: 10px; color: white;">Todos</button>';
    echo '<button type="submit" name="genero" value="Educacional" style="background-color: #5a5c87; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px; margin-right: 10px;">Educacional</button>';
    echo '<button type="submit" name="genero" value="Biografia" style="background-color: #5a5c87; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px; margin-right: 10px;">Biografia</button>';
    echo '<button type="submit" name="genero" value="Romance" style="background-color: #5a5c87; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px; margin-right: 10px;">Romance</button>';
    echo '<button type="submit" name="genero" value="Fantasia" style="background-color: #5a5c87; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px; margin-right: 10px;">Fantasia</button>';
    echo '<button type="submit" name="genero" value="Aventura" style="background-color: #5a5c87; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px; margin-right: 10px;">Aventura</button>';
    echo '<button type="submit" name="genero" value="Ficção Científica" style="background-color: #5a5c87; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px; margin-right: 10px;">Ficção</button>';
    echo '<button type="submit" name="genero" value="Suspense" style="background-color: #5a5c87; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px; margin-right: 10px;">Suspense</button>';
    echo '<button type="submit" name="genero" value="Drama" style="background-color: #5a5c87; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px; margin-right: 10px;">Drama</button>';
    echo '<button type="submit" name="genero" value="Terror" style="background-color: #5a5c87; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px; margin-right: 10px;">Terror</button>';
    echo '<button type="submit" name="genero" value="Literatura Infantil" style="background-color: #5a5c87; border: 1px solid #ccc; border-radius: 5px; padding: 5px 10px; margin-right: 10px;">Infantil</button>';
    // Adicione mais botões de acordo com os gêneros desejados
    echo '</form>';
    echo '</div>';

    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $nome = $row["nome"];
        $autor = $row["autor"];
        $anoPublicado = $row["anoPublicado"];
        $capaLivro = $row["capaLivro"];

        echo '<div class="col-lg-3 col-md-6 wow fadeInUp d-flex justify-content-center" data-wow-delay="0.3s">';
        echo '<div class="bg-light" style="width: 250px;">';
        echo '<div class="position-relative overflow-hidden">';
        echo '<img class="img-fluid mx-auto d-block" src="img/' . $capaLivro . '" alt="" style="width: 100%;">';
        echo '</div>';
        echo '<div class="text-center p-4 pb-0">';
        echo '<h3 class="mb-0"></h3>';
        echo '<h5 class="mb-4">' . $nome . '</h5>';
        echo '</div>';
        echo '<div class="d-flex justify-content-center" style="padding-bottom: 10px;">';
        echo '<a href="alugar.php?id=' . $id . '" class="flex-shrink-0 btn btn-sm btn-primary" style="border-radius: 30px;">Mais Detalhes</a>';
        echo '</div>';
        echo '<div class="d-flex border-top">';
        echo '<small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>' . $autor . '</small>';
        echo '<small class="flex-fill text-center py-2"><i class="fa-solid fa-calendar-days text-primary me-2"></i>' . $anoPublicado . '</small>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "Nenhum item encontrado no acervo.";
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