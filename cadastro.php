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
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img height="150" src="img/Logo.png"></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="cadastro.php" class="nav-item nav-link active">Cadastro</a>
                <a href="login.php" class="nav-item nav-link">Login</a>
                <a href="index.php" class="nav-item nav-link ">Acessos</a>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Cadastro</h1>
                    <nav aria-label="breadcrumb">
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <!-- Team Start -->
    <!DOCTYPE html>
<html lang="pt-br">

    <meta charset="utf-8">
    <meta http-equiv="X-UA -compatible" content="IE=edge">
    <meta name="Viewport" content="Widh=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Formulario de Cadastro</title>


    <center>
<?php
include_once('funcoesJS.php');
?>

<div class="container">
    <div class="form image">
        <img src="assets/img/undraw_shopping_re_svg" alt="">
    </div>
</div>
<div class="form image">
    <form action="#" onsubmit="return validaSenha();">
    </form>
</div>

<title>Formulário de Registro</title>
<link rel="stylesheet" type="text/css" href="style.css">

<div style="justify-content: center; padding-bottom: 20px; padding-top: 15;">
    <form style="background-color: #f7f7f7; box-shadow: 0px 0px 15px #666; width: 55%; border-radius: 15px;" method="post" action="cadastrarBanco.php" id="formlogin" name="formlogin">
        <div style="padding: 50px; display: flex; flex-wrap: wrap;">
            <div style="padding-bottom: 25px; width: 100%; display: block;">
                <h2 style="color: rgba(17, 27, 88, 0.7);">Cadastro</h2>
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
    <select style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" id="turma" name="turma" required>
    <?php
        // Fazer a conexão com o banco de dados (substitua os valores pelos seus próprios)
        
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "projeto_biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar a conexão
        if ($conn->connect_error) {
            die("Erro na conexão: " . $conn->connect_error);
        }

        // Consulta para selecionar todos os nomes de turma, ordenados pelo nome
        $sql_turma = "SELECT * FROM turma ORDER BY turma";
        $result_turma = $conn->query($sql_turma);

        if ($result_turma->num_rows > 0) {
            while ($turma_row = $result_turma->fetch_assoc()) {
                echo '<option value="' . $turma_row['turma'] . '">' . $turma_row['turma'] . '</option>';
            }
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
    ?>
    </select>
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
                <div style="display: flex; justify-content: space-between; width: 100%;">
            <div style="width: 48%; padding-bottom: 12px;">
    <label style="float: left; padding-bottom: 5px;" for="senha">Senha</label><br>
    <div style="position: relative;">
        <input style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" placeholder="Senha" type="password" id="senha" name="senha" required>
        <span style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;" onclick="togglePasswordVisibility('senha', 'icone-senha')">
            <i class="fas fa-eye" id="icone-senha" style="padding-right: 10px;"></i>
        </span>
    </div>
</div>
<div style="width: 48%; padding-bottom: 12px;">
    <label style="float: left; padding-bottom: 5px;" for="confirmar_senha">Confirmar Senha</label><br>
    <div style="position: relative;">
        <input style="display: block; border: 2px solid #ccc; width: 100%; height: 55px; padding: 10px; margin: 10px; border-radius: 5px;" placeholder="Confirmar Senha" type="password" id="confirmar_senha" name="confirmar_senha" required>
        <span style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;" onclick="togglePasswordVisibility2('confirmar_senha', 'icone-confirmar-senha')">
            <i class="fas fa-eye" id="icone-confirmar-senha" style="padding-right: 10px;"></i>
        </span>
    </div>
</div>
            </div>
            <div style="width: 100%; display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <label style="float: left; padding-bottom: 5px; ">Já possui cadastro? <a href="login.php"> ENTRAR </a></label>
                </div>
                <div>
                <button type="submit" onClick='validaSenha();'>Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
</div>
      </center>
                        </div>

                        </div>
                    </div>
                </div>
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