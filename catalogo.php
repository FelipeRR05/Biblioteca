<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Times+New+Roman&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar using HTML, CSS and Javascript</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7766454a30.js" crossorigin="anonymous"></script>
</head>

<style>
    .catalogo{
        font-size: 70px;
    position:absolute;
    left:6%;
    top:700px;
    font-family: 'Times New Roman', Times, serif;
    }
    .linha{
        border:none;
        border-top:2px solid black;
    }
  .container{
    position:relative;
    display:flex;
    gap: 70px;
    
}
  .container .caixa{
    position:relative;
    left: 1000px;
    top:20%;
    width:200px;
    height:300px;
    background:black;
    border-radius: 15px;
    background-size: cover;
    transition: .5s;
    cursor:pointer;
}
    .container .caixa:hover{
        scale:1.2;
        transition: .5s;
}
  .container .caixa::before{
    content:'';
    position: absolute;
    width: 100%;
    height: 100%;
    background: inherit;
    border-radius: 35px;
    background-size: cover;
    filter: blur(25px);
    opacity:0.5;
    z-index: 1;
    transition: .2s;
}
.container .caixa:hover::before{
    opacity:0;
    transition: .2s;
}
  .texto{
    font-size: 100px;
    position:absolute;
    left:6%;
    font-family: 'Times New Roman', Times, serif;
}  
.barra-pesquisa{
    position: absolute;
    top: 17px;
    left: 85%;
    transform: translate(-100%);
    background: #fefefe;
    height: 40px; 
    border-radius: 40px;
    padding: 10px;
}
.pesquisa-btn{
    color: #11101b;
    float: right;
    width: 21.5px;
    height: 21.5px;
    border-radius: 50%;
    background: #fefefe;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 2s;
}
.pesquisa-txt{
    border: none;
    background: none;
    outline: none;
    float: left;
    padding: 0;
    color: #11101b;
    font-size: 16px;
    transition: 0.4s;
    line-height: 20px;
    width: 0px;
}
.barra-pesquisa:hover > .pesquisa-txt{
    width: 240px;
    padding: 0 6px;
}
.barra-pesquisa:hover > .pesquisa-btn{
    background: #fefefe;
}


</style>
<body>
    
</div>
    <header>
        <div class="header-left">
        <div class="logo">
            <img src="./logo.png" alt="">
            
        </div>
        
        <nav>
            <div class="barra-pesquisa">
                <input class="pesquisa-txt" type="text" name="" placeholder="Faça sua pesquisa">
                <a class="pesquisa-btn" href="#">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
            <ul>
                <li>
                    <a href="" class="active">Menu</a>
                    
                </li>
                <li>
                    <a href="">Catálogo</a>
                </li>
                    <li>
                        <a href="">Lista de Reserva</a>
                    </li>
                </ul>
                
             
            </nav>
            
        </div>
        
        <div class="header-right">
            
            <div class="login-signup">
                <a href="">Entrar</a> ou <a href="">Cadastrar</a>
                
            </div>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
            
        </div>
    </header>
    <script>
        hamburger = document.querySelector(".hamburger");
        nav = document.querySelector("nav");
        hamburger.onclick = function() {
            nav.classList.toggle("active");
        }
    </script>
    <br><br><br><br><br><br><br><br><br>
        <div class= "texto">Encontre sua <br> próxima História</div>
        <div class="container">
        <div class="caixa" style="background-image: url('https://m.media-amazon.com/images/I/81ibfYk4qmL.jpg')"></div>
        <div class="fotoMeio">
        <div class="caixa" style="background-image: url('https://m.media-amazon.com/images/I/81ibfYk4qmL.jpg')"></div>
        </div>
        <div class="caixa" style="background-image: url('https://m.media-amazon.com/images/I/81ibfYk4qmL.jpg')"></div>
        
        </div>
        

       
           
    </div>
    <br><br><br><br><br><br>
    <hr class="linha">
    <div class= "catalogo">Catálogo</div>
    
    
</div>
</body>
</html>