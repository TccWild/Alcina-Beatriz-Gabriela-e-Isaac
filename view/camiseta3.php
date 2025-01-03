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
    <title>T-SHIRT SUFGANG KML PINK</title>
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

    <div class="container">
        <div class="row">
            <div class="col-6 text-center" style="margin-top: 200px;">
                <img src="imgs/3.png" alt="">
            </div> 
        </div>

        <form action="../controller/funcao-create.php" method="post" enctype="multipart/form-data">

            <input type="text" class="form-control" name="campo_nome" value="T-SHIRT SUFGANG KML PINK" >

            <input type="text" class="form-control" name="campo_item" value="3.png">

            <input type="hideen" class="form-control" name="campo_preco" value="R$210,50">
   
            <div class="container mt-5 d-flex justify-content-end">  
                <a href="carrinho.php">
                    <input href="carrinho.php" type="submit" value="Salvar" class="btn btn-dark">
                </a>  
            </div>    
        </form>
    </div>


</body>
</html>