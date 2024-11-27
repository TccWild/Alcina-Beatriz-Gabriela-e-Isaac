<?php
session_start(); // Inicia a sessão ou retoma a sessão existente

// Verifica se o usuário está autenticado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php"); // Redireciona para a página de login se não estiver autenticado
    exit(); // Garante que o redirecionamento ocorra e o script pare aqui
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Icone da página-->
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Home</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
        <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mb-3">
                    <a class="navbar-brand" href="#"
                    ><img
                    id="MDB-logo"
                    src="imgs/logo.png"
                    alt="Logo"
                    draggable="false"
                    height="50"
                    /></a>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center mx-auto">
                            <li class="nav-item">
                                <a class="nav-link mx-2" href="home.php"><i class="fas fa-plus-circle pe-2"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2" href="carrinho.php"><i class="fas fa-heart pe-2"></i>Carrinho</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--Navbar end-->

    <header>
        <img src="imgs/capa.png" alt="Capa" style="width: 100%;">
    </header>

    <!--Header end-->

    <br><br><br><br><br><br>

    <div class="container text-center">
        <h4>Destaques</h4>

        <div class="row">
            <div class="col-4">
                <a href="camiseta1.php">
                    <img src="imgs/1.png">
                </a>
                <p class="mt-1">T-SHIRT SUFGANG TALK BLACK</p>
            </div>

            <div class="col-4">
                <a href="camiseta2.php">
                    <img src="imgs/2.png" alt="">
                </a>   
                <p class="mt-1">T-SHIRT SUFGANG KML BLACK</p>
            </div>

            <div class="col-4">
                <a href="camiseta3.php">
                    <img src="imgs/3.png" alt="">
                </a>
                <p class="mt-1">T-SHIRT SUFGANG KML PINK</p>
            </div>  
        </div>
        <br>
        <a href="logout.php">
            <input type="submit" value="Sair" class="btn btn-dark">
        </a>
    </div>
</body>
</html>