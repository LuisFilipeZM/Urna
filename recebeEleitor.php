<?php
    include "logadoTipo.php";
    include 'conexao.php';

    $nome = strtoupper($_POST['nome']);
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $titulo = $_POST['titulo'];
    $uf = $_POST['uf'];
    $senha = md5($_POST['senha']);
    $ativo = $_POST['ativo'];

    if ($_POST['id']) {
        $sql = "UPDATE eleitor 
                SET nome='$nome', cpf='$cpf', rg='$rg', numtitulo='$titulo', uf='$uf', senha='$senha', ativo='$ativo'
                WHERE id = $_POST[id]";
    }else {
        $sql = "INSERT INTO eleitor (nome, cpf, rg, numtitulo, uf, senha, ativo) 
                VALUES ('$nome', '$cpf', '$rg', '$titulo', '$uf', '$senha', '$ativo')";
    }
    mysqli_query($conexao, $sql);

    header("location: listaEleitores.php");
?>