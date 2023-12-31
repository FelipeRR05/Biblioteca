<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="https://imagensemoldes.com.br/wp-content/uploads/2020/04/Livro-Aberto-PNG.png">
    <meta charset="utf-8">
    <title>Magic Book Library</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
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
                <a href="acervo.php" class="nav-item nav-link ">Acervo</a>
                <a href="usuarios.php" class="nav-item nav-link ">Usuários</a>
                <a href="turma.php" class="nav-item nav-link ">Turmas</a>
                <a href="relatorio.php" class="nav-item nav-link ">Empréstimos</a>
                <a href="clube.php" class="nav-item nav-link ">Clube do Livro</a>
                <a href="hora.php" class="nav-item nav-link active ">Hora da Leitura</a>
                <a href="index.php" class="nav-item nav-link">Acessos</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative top-0 start-0 w-100 h-30 d-flex align-items-center">
                <img class="img-fluid" src="img/tela.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(23, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">on
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown"></h5>
                                <h1 class="display-3 text-white animated slideInDown">Magic Book Library</h1>
                                <p class="fs-5 text-white mb-4 pb-2">SEJA BEM VINDO A LIBRARY! onde a curiosidade é incentivada e o conhecimento é valorizado.
                                    .
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Tela de livros</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Ir para tela de cadastro</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/tela.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(14, 16, 31, 0.7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown"></h5>
                                <h1 class="display-3 text-white animated slideInDown">Magic Book Library</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Descubra novas aventuras a cada página na Libery Store - sua biblioteca de leitura.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Tela de Livros</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Ir para tela de cadastro</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <!-- Service End -->


    <!-- About Start -->
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Hora da Leitura</h6>
                <h1 class="mb-5">Gerenciar Hora da Leitura</h1>
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

// Verificar se a pesquisa foi enviada
if (isset($_GET['search'])) {
    $search = $_GET['search'];

    // Consulta para selecionar os livros do acervo que correspondem à pesquisa
    $sql = "SELECT * FROM hora WHERE nome LIKE '%$search%' OR titulo LIKE '%$search%' ORDER BY nome";
} else {
    // Consulta para selecionar todos os livros do acervo
    $sql = "SELECT * FROM hora ORDER BY titulo";
}

$result = $conn->query($sql);

echo '
<div class="container">
    <h2 style="margin-bottom: 20px;">Lista de ' . $result->num_rows . ' Livros da Hora da Leitura</h2>

    <!-- Barra de pesquisa com ícone de lupa -->
    <form method="GET" action="hora.php">
        <div style="display: flex; align-items: center;">
            <input type="text" name="search" placeholder="Pesquisar livro">
            <button type="submit" style="background-color: #565d88; border: none; cursor: pointer; padding:10px; margin-left: 0px;">
                <i class="fas fa-search" style="color: white;"></i>
            </button>
        </div>
    </form>

    <!-- Espaço entre a barra de pesquisa e a lista de empréstimos -->
    <div style="margin-top: 20px;"></div>

    <ul>';
        if ($result->num_rows > 0) {
            while ($livro = $result->fetch_assoc()) {
                $horaId = $livro["id"]; // Corrigido de $row para $livro
                $titulo = $livro['titulo'];
                $nome = $livro['nome'];
                $turma = $livro['turma'];
                $pagina = $livro['pagina'];

                echo '<li>';
                echo '<span style="margin-right: 10px;">Livro: ' . $titulo . '</span>';
                echo '<span style="margin-right: 10px;">- Usuário: ' . $nome . '</span>';
                echo '<span style="margin-right: 10px;">- Turma: ' . $turma . '</span>';
                echo '<span style="margin-right: 10px;">- Páginas lidas: ' . $pagina . '</span>';
                echo '<a href="atualizarHora.php?id=' . $horaId . '"><i class="fas fa-edit"></i></a>';
                echo '<a href="devolucaoHora.php?id=' . $horaId . '" onclick="return confirm(\'Tem certeza de que deseja confirmar a devolução do livro?\')" style="margin-left: 10px;"><i class="fas fa-check-circle"></i></a>';
                echo '<a href="deletarHora.php?id=' . $horaId . '" onclick="return confirm(\'Tem certeza de que deseja deletar o empréstimo?\')" style="margin-left: 10px;"><i class="fas fa-trash"></i></a>';
                echo '</li>';
            }
        } else {
            echo "<li>Nenhum livro encontrado.</li>";
        }
        ?>
    </ul>
</div>

<title>Formulário de Registro</title>
<link rel="stylesheet" type="text/css" href="style.css">
<div style="display: flex; justify-content: center; padding-bottom: 20px; padding-top: 15;">
    <form style="background-color: #f7f7f7; box-shadow: 0px 0px 15px #666; width: 55%; border-radius: 15px;" method="post" action="adicionarHora.php" id="formlogin" name="formlogin">
        <div style="padding: 50px; display: flex; flex-wrap: wrap;">
            <div style="padding-bottom: 25px; width: 100%; display: block;">
                <h2 style="display: flex; justify-content: center; color: rgba(17, 27, 88, 0.7);">Adicionar Nova Hora do Livro</h2>
            </div>
            <div style="width: 100%; padding-bottom: 12px;">
    <label style="float: left; padding-bottom: 5px; width: 100px;" for="livro">Livro</label><br>
    <select style="flex: 1; width: calc(100% - 0px); border: 2px solid #ccc; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" id="titulo" name="titulo" required>
        <?php
        // Consulta para selecionar todos os livros do acervo, ordenados pelo nome
        $sql_livros = "SELECT * FROM acervo ORDER BY nome";
        $result_livros = $conn->query($sql_livros);

        if ($result_livros->num_rows > 0) {
            while ($livro_row = $result_livros->fetch_assoc()) {
                echo '<option value="' . $livro_row['nome'] . '">' . $livro_row['nome'] . '</option>';
            }
        }
        ?>
    </select>
</div>
<div style="width: 100%; padding-bottom: 12px;">
    <label style="float: left; padding-bottom: 5px; width: 100px;" for="usuario">Usuário</label><br>
    <select style="flex: 1; width: calc(100% - 0px); border: 2px solid #ccc; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" id="nome" name="nome" required>
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
    </select>
</div>
            <div style="width: 100%; padding-bottom: 12px; display: flex;">
                <div style="flex: 1;">
                        <label style="float: left; padding-bottom: 5px;" for="turma">Turma</label><br>
                        <select style="flex: 1; width: calc(100% - 0px); border: 2px solid #ccc; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" id="turma" name="turma" required>
                       
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
                    </select>                    
                                    </div> 
                <div style="flex: 1; margin-left: 20px;">
                    <label style="float: left; padding-bottom: 5px;" for="pagina">Páginas Lidas</label><br>
                    <input style="width: 100%; border: 2px solid #ccc; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="number" id="pagina" name="pagina" required>
                </div>
            </div>
            <div style="width: 100%; display: flex; justify-content: flex-end; align-items: center;">
                <button type="submit">Adicionar</button>
            </div>
        </div>
    </form>
</div>

<?php
// Fechar a conexão com o banco de dados
$conn->close();
?>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    
    <!-- Courses End -->

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