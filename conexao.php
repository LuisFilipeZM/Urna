<?php
    $conexao = mysqli_connect("sql206.unaux.com", "unaux_32073220", "kxvbdwyj", "unaux_32073220_db_tse");
    
    if ($conexao == false) {
        die("Erro na conexao: " . mysqli_connect_error());
    }
?>