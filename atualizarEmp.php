<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="https://imagensemoldes.com.br/wp-content/uploads/2020/04/Livro-Aberto-PNG.png">
    <meta charset="utf-8">
    <title>Library Store</title>
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
                <a href="atualizarEmp.php" class="nav-item nav-link active">Atualizar Empréstimo</a>
                <a href="clube.php" class="nav-item nav-link ">Clube do Livro</a>
                <a href="hora.php" class="nav-item nav-link ">Hora da Leitura</a>
                <a href="index.php" class="nav-item nav-link">Acessos</a>
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
                                <h1 class="display-3 text-white animated slideInDown">LIBRARY STORE</h1>
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
                                <h1 class="display-3 text-white animated slideInDown">LIBRARY STORE</h1>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Empréstimos</h6>
                <h1 class="mb-5">Atualizar Empréstimo</h1>
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $empId = $_POST["empId"];
    $titulo = $_POST['titulo'];
    $nome = $_POST['nome'];
    $inicioEmp = date('Y-m-d', strtotime($_POST['inicioEmp'])); // Converter para ano-mês-dia
    $fimEmp = date('Y-m-d', strtotime($_POST['fimEmp'])); // Converter para ano-mês-dia

    // Atualizar as informações do livro no banco de dados
    $sql = "UPDATE emprestimo SET titulo='$titulo', nome='$nome', inicioEmp='$inicioEmp', fimEmp='$fimEmp' WHERE id='$empId'";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar o usuário de volta à página de gerenciamento de livros
        echo "<script>window.location.href = 'relatorio.php';</script>";
        exit(); // Certifique-se de sair do script após o redirecionamento
    } else {
        echo "Erro ao atualizar o empréstimo: " . $conn->error;
    }
}

// Consulta para obter as informações do livro a ser atualizado
if (isset($_GET['id'])) {
    $empId = $_GET['id'];
    $sql = "SELECT * FROM emprestimo WHERE id = '$empId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $empId = $row['id'];
        $titulo = $row['titulo'];
        $nome = $row['nome'];
        $inicioEmp = date('Y-m-d', strtotime($row['inicioEmp'])); // Converter para ano-mês-dia
        $fimEmp = date('Y-m-d', strtotime($row['fimEmp'])); // Converter para ano-mês-dia
    
    } else {
        echo "Empréstimo não encontrado.";
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>

<title>Formulário de Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    

<div style="display: flex; justify-content: center; align-items: center;">
    <div class="container" style="padding: 50px; background-color: #f7f7f7; box-shadow: 0px 0px 15px #666; width: 55%; border-radius: 15px;">
    <form action="atualizarEmp.php" method="POST">
            <div style="padding: 50px; display: flex; flex-wrap: wrap;">
            <div style="padding-bottom: 25px; width: 100%;">
                <h2 style="display: flex; justify-content: center; color: rgba(17, 27, 88, 0.7);">Atualizar Empréstimo</h2>
            </div>
            <input type="hidden" name="empId" value="<?php echo $empId; ?>">
            <div style="width: 100%; padding-bottom: 12px;">
                <label style="float: left; padding-bottom: 5px; width: 100px;" for="titulo">Livro</label><br>
                <input style="flex: 1; border: 2px solid #ccc; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>">
            </div>
            <div style="width: 100%; padding-bottom: 12px;">
                <label style="float: left; padding-bottom: 5px; width: 100px;" for="nome">Usuário</label><br>
                <input style="flex: 1; border: 2px solid #ccc; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
            </div>
            <div style="width: 100%; padding-bottom: 12px; display: flex;">
                <div style="flex: 1;">
                    <label style="float: left; padding-bottom: 5px;" for="inicioEmp">Início do Empréstimo</label><br>
                    <input style="width: 100%; border: 2px solid #ccc; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="date" id="inicioEmp" name="inicioEmp" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+0 days')); ?>" value="<?php echo $inicioEmp; ?>">
                </div>
                <div style="flex: 1; margin-left: 20px;">
                    <label style="float: left; padding-bottom: 5px;" for="fimEmp">Fim do Empréstimo</label><br>
                    <input style="width: 100%; border: 2px solid #ccc; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="date" id="fimEmp" name="fimEmp" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+15 days')); ?>" value="<?php echo $fimEmp; ?>">
                </div>
            </div>
            <div style="width: 100%; display: flex; justify-content: flex-end; align-items: center;">
                <button type="submit">Atualizar</button>
            </div>
        </div>
    </form>
</div>
</div>

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
                <p class="mb-2"><i class=""></i>Agradecemos por nos visitar! Esperamos que você retorne sempre à Library Store para explorar novos livros e continuar desfrutando da nossa vasta seleção. Estamos aqui para acompanhá-lo em sua jornada de leitura.</p>
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