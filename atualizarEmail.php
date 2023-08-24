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
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img height="150" src="img/Logo.png"></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="atualizarEmail.php" class="nav-item nav-link active">Recuperar Email</a>
                <a href="cadastro.php" class="nav-item nav-link">Cadastro</a>
                <a href="login.php" class="nav-item nav-link ">Login</a>
                <a href="index.php" class="nav-item nav-link ">Acessos</a>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Recuperar Email</h1>                       
                        </ol>
                    </nav>
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
                <h1 class="mb-5">Atualizar Email</h1>
            </div>
            <div class="row g-4">
    <!-- Categories Start -->
    
    <!-- Categories Start -->
    <?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['nome']) || !isset($_SESSION['cpf']) || !isset($_SESSION['email'])) {
    header("Location: esqueceuEmail.php");
    exit();
}

// Obter os valores do usuário da sessão
$nome = $_SESSION['nome'];
$cpf = $_SESSION['cpf'];
$email = $_SESSION['email'];

// Exibir o formulário para atualizar o perfil
echo '
<div style="display: flex; justify-content: center; align-items: center;">
    <div class="container" style="padding: 50px; background-color: #f7f7f7; box-shadow: 0px 0px 15px #666; width: 55%; border-radius: 15px;">
        <form action="recuperarEmail.php" method="POST">
            <div style=" display: flex; justify-content: center;">
                <h2 style="color: rgba(17, 27, 88, 0.7);">Atualizar Email</h2>
            </div>
            <div style="padding-bottom: 12px;">
                <label style="float: left; padding-bottom: 5px;" for="nome">Nome</label><br>
                <input style="display: block; border: 2px solid #333; background-color: #eee; color: #333; width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="text" id="nome" name="nome" value="' . $nome . '" readonly>
            </div>
            <div style="padding-bottom: 12px;">
                <label style="float: left; padding-bottom: 5px;" for="cpf">CPF</label><br>
                <input style="display: block; border: 2px solid #333; background-color: #eee;; color: #333;width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="text" id="cpf" name="cpf" value="' . $cpf . '" readonly>
            </div>
            <div style="padding-bottom: 12px;">
                <label style="float: left; padding-bottom: 5px;" for="email">Email</label><br>
                <input style="display: block; border: 2px solid #ccc; width: 95%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" type="email" id="email" name="email" value="' . $email . '">
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

?>
            </div>
            </div>
        </div>

    <!-- Courses Start -->
    
    <!-- Courses End -->


    <!-- Testimonial Start -->
    
    <!-- Testimonial End -->
        

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