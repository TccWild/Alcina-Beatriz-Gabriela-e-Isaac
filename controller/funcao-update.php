<?php
  include("../model/connect.php");
  mysqli_query($conexao,"UPDATE carrinho_compra SET item ='".$_POST['campo_nome']."' WHERE id =".$_POST['campo_codigo']);
  header("location:../view/v_edit.php?ida=".$_POST['campo_codigo']);
?>