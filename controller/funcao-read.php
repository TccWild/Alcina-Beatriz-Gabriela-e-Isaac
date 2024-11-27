<?php
    function funcaoTabela(){
        include("../model/connect.php");
        $query = mysqli_query($conexao,"SELECT * FROM carrinho_compra ORDER BY id DESC");
            while($exibe = mysqli_fetch_array($query)){
            echo "<tr>
                    <td>$exibe[0]</td>
                    <td><img src='imgs/$exibe[1]' width='100px'></td>
                    <td>$exibe[2]</td>
                    <td>$exibe[3]</td>
                   
                    <td class='text-center'><a href='../controller/funcao-delete.php?ida=$exibe[0]&idf=$exibe[1]' class='btn btn-danger'>Excluir</a></td>
                </tr>";       
            }
    }   
 ?>