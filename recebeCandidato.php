<?php
 
    include "logadoTipo.php";

    include 'conexao.php';



    $nome = strtoupper($_POST['nome']);

    $cargo = strtoupper($_POST['cargo']);

    $partido = strtoupper($_POST['partido']);

    $numero = $_POST['numero'];

    $uf = $_POST['uf'];



    if ($_POST['id']) {

        $sql = "UPDATE candidato 

                SET nome='$nome', cargo='$cargo', partido='$partido', uf='$uf', numero='$numero'

                WHERE id = $_POST[id]";

    }else {

        $sql = "INSERT INTO candidato (nome, cargo, partido, uf, numero) 

                VALUES ('$nome', '$cargo', '$partido', '$uf', '$numero')";

    }

    header("Location: listaCandidatos.php");

    mysqli_query($conexao, $sql);

?>