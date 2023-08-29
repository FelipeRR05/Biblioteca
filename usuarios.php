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
                <a href="usuarios.php" class="nav-item nav-link active">Usuários</a>
                <a href="turma.php" class="nav-item nav-link ">Turmas</a>
                <a href="relatorio.php" class="nav-item nav-link">Empréstimos</a>
                <a href="clube.php" class="nav-item nav-link ">Clube do Livro</a>
                <a href="hora.php" class="nav-item nav-link ">Hora da Leitura</a>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Usuários</h6>
                <h1 class="mb-5">Gerenciar Usuários</h1>
            </div>
            <div class="row g-4">
            <?php
include_once('funcoesJS.php');

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

    // Consulta para selecionar os usuários que correspondem à pesquisa
    $sql = "SELECT * FROM usuario WHERE nome LIKE '%$search%' OR turma LIKE '%$search%' OR email LIKE '%$search%' OR cpf LIKE '%$search%' ORDER BY nome";
} else {
    // Consulta para selecionar todos os usuários
    $sql = "SELECT * FROM usuario ORDER BY nome";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="container">';
    echo '<h2 style="margin-bottom: 20px;">Lista de ' . $result->num_rows . ' Usuários</h2>';

    // Adicionar barra de pesquisa com ícone de lupa
    echo '<form method="GET" action="usuarios.php">';
    echo '<div style="display: flex; align-items: center;">';
    echo '<input type="text" name="search" placeholder="Pesquisar usuário">';
    echo '<button type="submit" style="background-color: #565d88; border: none; cursor: pointer; padding:10px; margin-left: 0px;"><i class="fas fa-search" style="color: white;"></i></button>';
    echo '</div>';
    echo '</form>';

    // Adicionar espaço entre a barra de pesquisa e a lista de usuários
    echo '<div style="margin-top: 20px;"></div>';

    echo '<ul>';

    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $nome = $row["nome"];
        $turma = $row["turma"];
        $email = $row["email"];
        $cpf = $row["cpf"];

        echo '<li>';
        echo '<span style="margin-right: 10px;">Nome: ' . $nome . '</span>';
        echo '<span style="margin-right: 10px;">- Turma: ' . $turma . '</span>';
        echo '<span style="margin-right: 10px;">- Email: ' . $email . '</span>';
        echo '<span style="margin-right: 10px;">- CPF: ' . $cpf . '</span>';
        echo '<a href="atualizarUsuario.php?id=' . $id . '"><i class="fas fa-edit"></i></a>';

        // Adicionar a mensagem de confirmação antes de deletar o usuário
        echo '<a href="deletarUsuario.php?id=' . $id . '" onclick="return confirm(\'Tem certeza de que deseja deletar o usuário?\')" style="margin-left: 10px;"><i class="fas fa-trash"></i></a>';

        echo '</li>';
    }

    echo '</ul>';
    echo '</div>';

    echo '<title>Formulário de Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <div style="display: flex; justify-content: center; padding-bottom: 20px; padding-top: 15px;">
        <form style="background-color: #f7f7f7; box-shadow: 0px 0px 15px #666; width: 55%; border-radius: 15px;" method="post" action="adicionarUsuario.php" id="formlogin" name="formlogin">
            <div style="padding: 50px; display: flex; flex-wrap: wrap;">
                <div style="padding-bottom: 25px; width: 100%; display: block;">
                    <h2 style="display: flex; justify-content: center; color: rgba(17, 27, 88, 0.7);">Adicionar Novo Usuário</h2>
                </div>
                <div style="display: flex; justify-content: space-between; width: 100%;">
                <div style="width: 48%; padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px;" for="nome">Nome Completo</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" placeholder="Nome" type="text" id="nome" name="nome" required>
                </div>
                <div style="width: 48%; padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px; " for="cpf">CPF</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" placeholder="CPF" onkeyup="formatarCPF()" type="text" id="cpf" name="cpf" required>
                </div>
                </div>
                <div style="width: 100%; padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px;" for="email">Email</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" placeholder="Email" type="email" id="email" name="email" required>
                </div>
                <div style="display: flex; justify-content: space-between; width: 100%;">
            <div style="width: 48%; padding-bottom: 12px;">
                <label style="float: left; padding-bottom: 5px; " for="serie">Série</label><br>
                <select style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" id="serie" name="serie" required>
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
            <div style="width: 48%; padding-bottom: 12px;">
                <label style="float: left; padding-bottom: 5px;" for="turma">Turma</label><br>
                <select style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" id="turma" name="turma" required>';
                
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
echo ' </select>
            </div>
            </div>
            <div style="display: flex; justify-content: space-between; width: 100%;">
                <div style="width: 48%; padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px; " for="matricula">Matrícula</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" placeholder="Matrícula" type="number" id="matricula" name="matricula" required>
                </div>
                <div style="width: 48%; padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px; " for="idade">Idade</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" placeholder="Idade" type="number" id="idade" name="idade" required>
                </div>
            </div>
            <div style="display: flex; justify-content: space-between; width: 100%;">
                <div style="width: 48%; padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px; " for="telefone">Telefone</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" placeholder="Telefone" onkeyup="formatarTelefone()" type="tel" id="telefone" name="telefone" required>
                </div>
                <div style="width: 48%; padding-bottom: 12px;">
                    <label style="float: left; padding-bottom: 5px; " for="endereco">Endereço</label><br>
                    <input style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" placeholder="Endereço" type="text" id="endereco" name="endereco" required>
                </div>
            </div>
            <div style="width: 100%; padding-bottom: 12px;">
                <label style="float: left; padding-bottom: 5px;" for="senha">Senha</label><br>
                <div style="position: relative;">
                    <input style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" placeholder="Senha" type="text" id="senha" name="senha" required>
                    <span style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;" >
                    </span>
                </div>
            </div>
            <div style="width: 100%; padding-bottom: 12px;">
                <div style="width: 100%; display: flex; justify-content: flex-end; align-items: center;">
                    <button type="submit">Adicionar</button>
                </div>
            </div>
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