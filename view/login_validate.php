<?php
session_start(); 

$valid_username = "Aluno";//nome do usuario
$valid_password_hash = md5("admin@123"); // Senha 
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Verifica se as credenciais estão corretas
if ($username === $valid_username && md5($password) === $valid_password_hash) {
    $_SESSION['loggedin'] = true; // Marca o usuário como logado
    $_SESSION['username'] = $username; // Armazena o nome de usuário na sessão
    header("Location: home.php"); // Redireciona para a página restrita
    exit(); // Garante que o redirecionamento ocorra e o script pare aqui
} else {
    echo "Login inválido. <a href='index.php'>Tente novamente</a>."; // Mensagem de erro
}
?>