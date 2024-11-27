<?php
include("../model/connect.php");
mysqli_query($conexao, "DELETE FROM carrinho_compra WHERE id = ".$_GET["ida"]);
unlink("../view/imgs/".$_GET["idf"]);
header("location:../view/");
?>