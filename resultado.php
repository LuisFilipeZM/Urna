<?php
    include "logado.php";
    include "conexao.php";

    $uf = $_SESSION['uf'];
    $sql = "SELECT
                C.nome					AS NOME,
                C.partido 				AS PARTIDO,
                C.cargo					AS CARGO,
                C.uf					AS UF,
                COUNT(V.id_candidato) 	AS VOTOCOMPUTADO
            FROM candidato C
            LEFT JOIN voto V
                ON V.id_candidato = C.id
            WHERE C.uf = '$uf'
            GROUP by C.nome, C.partido, C.cargo, C.uf
            ORDER BY VOTOCOMPUTADO DESC";

    $resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body class="fundo">
    <h1></h1>
    <div class="container">
        <div class="lista">
            <table class="table table-dark table-striped">
                <h1>Resultado parcial</h1>
                <tr>
                    <td>Nome</td>
                    <td>Cargo</td>
                    <td>Partido</td>
                    <td>UF</td>
                    <td>Votos</td>
                </tr>
                <?php
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<tr>";
                            echo "<td>$linha[NOME]</td>";
                            echo "<td>$linha[CARGO]</td>";
                            echo "<td>$linha[PARTIDO]</td>";
                            echo "<td>$linha[UF]</td>";
                            echo "<td>$linha[VOTOCOMPUTADO]</td>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
            </table>
            <a href="logout.php" class="btn btn-danger">Sair</a>
        </div>
        <table class="table table-dark table-striped">       
    </div>
</body>
</html>