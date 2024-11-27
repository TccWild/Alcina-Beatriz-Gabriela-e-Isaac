
<?php include("blades/top.php"); ?>
<?php include("../controller/funcao-read.php"); ?>

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

    <table class="table" style="margin-top: 200px;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Item</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th></th>
          </tr>
        </thead>
        <?php funcaoTabela(); ?>
       
    </table>

<?php include("blades/footer.php"); ?>