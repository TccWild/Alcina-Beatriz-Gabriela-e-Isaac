
<?php include("blades/top.php");

?>

<?php
{/*

$cookie_name = "user";
    echo "Cookie '$cookie_name' já está definido com o valor: " . $_COOKIE[$cookie_name];
$cookie_value = "Loja";

// Define o tempo de expiração do cookie para 5 segundos a partir de agora
$cookie_expiration = time() + 5;

// Define o caminho onde o cookie está disponível
$cookie_path = "/"; // O cookie estará disponível em todo o site

// Cria o cookie
setcookie($cookie_name, $cookie_value, $cookie_expiration, $cookie_path);

// Verifica se o cookie foi definido
if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie '$cookie_name' já está definido com o valor: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '$cookie_name' foi definido com sucesso. Recarregue a página para ver o valor.";
}
/*/}
?>   
<body>
    <div class="row">
        <div class="col-6">
            <img src="imgs/login.png" alt="">
        </div>
        <div class="col-6">
            <br><br><br><br><br><br><br>
            <h1>Realize seu login</h1>
            <br>
            <form action="login_validate.php" method="post">
            
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="username">Usuário</label>
                    <input type="text" id="username" name="username" class="form-control" style="width:50%;" required/>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="password">Senha</label>
                    <input type="password" id="password" name="password" class="form-control" style="width:50%;" required/>
                </div>

                <button type="submit" class="btn btn-dark">Login</button>
  
            </form>
        </div>
    </div>
        
</body>

<?php include("blades/footer.php"); ?>