<?php
    include 'logado.php';
    include 'conexao.php';

    $numero = $_POST['resultado'];
    $id = $_SESSION['id'];
    $uf = $_SESSION['uf'];



    $sql = "SELECT * FROM candidato WHERE numero = '$numero' AND uf = '$uf'";
    $resultado = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_array($resultado);
    if ($row[0] == NULL) {
        $slqNull = "SELECT * FROM candidato WHERE numero = 'NULO' AND uf = '$uf'";
        
        $resultadoNull = mysqli_query($conexao, $slqNull);
        $rowNull = mysqli_fetch_array($resultadoNull);
    }
    if ($numero == 'BRANCO') {
        $sqlBranco = "INSERT INTO voto (id_candidato, id_eleitor, dtvoto) VALUES ($row[0],$id,SYSDATE());";
        mysqli_query($conexao, $sqlBranco);
        $ativoOff = "UPDATE eleitor SET ativo = 'N' WHERE id = $id";
        mysqli_query($conexao, $ativoOff);
        header("location: votoBranco.php");
    }elseif ($row[0] == NULL) {
        $sqlNulo = "INSERT INTO voto (id_candidato, id_eleitor, dtvoto) VALUES ($rowNull[0],$id,SYSDATE());";
        mysqli_query($conexao, $sqlNulo);
        $ativoOff = "UPDATE eleitor SET ativo = 'N' WHERE id = $id";
        mysqli_query($conexao, $ativoOff);
        header("location: votoNulo.php");
    }else{
        $id_candidato = $row[0];
        $sql2 = "INSERT INTO voto (id_candidato, id_eleitor, dtvoto) VALUES ($id_candidato,$id,SYSDATE());";
        mysqli_query($conexao, $sql2);
        $ativoOff = "UPDATE eleitor SET ativo = 'N' WHERE id = $id";
        mysqli_query($conexao, $ativoOff);
        header("location: votoComfirmado.php?candidato=".$row['nome']);
    }
?>
