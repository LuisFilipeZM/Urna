<?php

    include "logadoTipo.php";

    include 'conexao.php';



    $sql = "SELECT id, nome, cargo, partido, uf, numero

            FROM candidato

            WHERE numero NOT IN ('BRANCO', 'NULO')";



    $resultado = mysqli_query($conexao, $sql);

?>    



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de candidatos</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body class="fundo">

    <h1></h1>

    <img src="logo.png" class="logo">

    <div class="container">

        <div class="lista">

            <div class="pesquisa">

                <form action="pesquisaNR.php" method="get">

                <h1>Lista de candidatos</h1>

                    <div class="mb-3">

                        <input type="number" class="form-control" id="inputPassword2" name="numero" placeholder="Pequisar por numero">

                    </div>

                    <div class="mb-3">

                        <button type="submit" class="btn btn-primary mb-3">Pesquisar</button>

                    </div>

                </form>

            </div>

            <table class="table table-dark table-striped">

                <tr>

                    <td>#</td>

                    <td>Nome</td>

                    <td>Cargo</td>

                    <td>Partido</td>

                    <td>UF</td>

                    <td>Numero</td>

                    <td>Editar</td>

                </tr>

                <?php

                        while ($linha = mysqli_fetch_array($resultado)) {

                            echo "<tr>";

                            echo "<td>$linha[id]</td>";

                            echo "<td>$linha[nome]</td>";

                            echo "<td>$linha[cargo]</td>";

                            echo "<td>$linha[partido]</td>";

                            echo "<td>$linha[uf]</td>";

                            echo "<td>$linha[numero]</td>";

                            echo "<td>";

                            echo "<a id='edit' class='btn btn-secondary' href='cadastroCandidato.php?id=$linha[id]'>Editar</a>";

                            echo "</td>";

                            echo "</tr>";

                        }

                    ?>

            </table>

            <a href="menu.php" class="btn btn-warning">Voltar para o menu</a>

        </div>

    </div>

</body>

</html>