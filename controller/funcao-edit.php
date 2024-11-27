<?php
include("../model/connect.php");
$query = mysqli_query($conexao, "SELECT * FROM carrinho_compra WHERE id = ".$_GET["ida"]);
$exibe = mysqli_fetch_array($query);
?>