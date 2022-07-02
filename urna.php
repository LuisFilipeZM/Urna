<?php
    include 'logado.php';
    include "conexao.php";

    $id = $_SESSION['id'];
    $uf = $_SESSION['uf'];
    
    $sql = "SELECT * FROM candidato WHERE uf = '$uf' AND numero NOT IN ('BRANCO', 'NULO')";
            
    $resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body class="fundo">
    <h1></h1>
    <div class="container-fluid">
        <img src="logo.png" class="logo">
        <div class="urna rounded">
            <br>
            <form action="recebeVoto.php" method="post" name="display">
                <input id="resultado" name="resultado" type="text"><br>
                <br>
                <table>
                    <tr>
                        <td><input type="button" id="botao" class="btn btn-dark" name="btn1" value="1" onclick="displaynum(btn1.value)"></td>
                            <td><input type="button" id="botao" class="btn btn-dark" name="btn2" value="2" onclick="displaynum(btn2.value)"></td>
                            <td><input type="button" id="botao" class="btn btn-dark" name="btn3" value="3" onclick="displaynum(btn3.value)"></td>
                        </tr>
                        <tr>
                            <td><input type="button" id="botao" class="btn btn-dark" name="btn4" value="4" onclick="displaynum(btn4.value)"></td>
                            <td><input type="button" id="botao" class="btn btn-dark" name="btn5" value="5" onclick="displaynum(btn5.value)"></td>
                            <td><input type="button" id="botao" class="btn btn-dark" name="btn6" value="6" onclick="displaynum(btn6.value)"></td>
                        </tr>
                        <tr>
                            <td><input type="button" id="botao" class="btn btn-dark" name="btn7" value="7" onclick="displaynum(btn7.value)"></td>
                            <td><input type="button" id="botao" class="btn btn-dark" name="btn8" value="8" onclick="displaynum(btn8.value)"></td>
                            <td><input type="button" id="botao" class="btn btn-dark" name="btn9" value="9" onclick="displaynum(btn9.value)"></td>
                        </tr>
                        <tr>
                            <td colspan="3"><input type="button" id="botao" class="btn btn-dark" name="btn0" value="0" onclick="displaynum(btn0.value)"></button></td>
                        </tr>
                        <tr>
                            <td><input type="button" id="botao2" class="btn btn-light" name="btnBranco" value="BRANCO" onclick="branco(btnBranco.value)"></td>
                            <td><input type="button" id="botao2" class="btn btn-danger" name="btnCorrige" value="CORRIGE" onclick="clean(btnCorrige.value)"></td>
                            <td><input type="submit" id="botao2" class="btn btn-success" value="COMFIRMA"></td>
                        </tr>
                </table>
            </form>        
        </div>
    </div>
    <div class="container-fluid">
        <div class="candidatos">
            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                Lista de candidatos
            </a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h3 class="offcanvas-title" id="offcanvasExampleLabel">Candidatos a senadores</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <?php
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<div class='card' style='width: 18rem;'>";
                            echo "<div class='card-body'>";
                            echo "<h4 class='card-title'>$linha[nome]</h4>";
                            echo "<h5 class='card-subtitle mb-2 text-muted'>Partido: $linha[partido]</h5>";
                            echo "<h6 class='card-subtitle mb-2 text-muted'>Estado: $linha[uf]</h6>";
                            echo "<h5><span class='badge bg-secondary'>Numero: $linha[numero]</span></h5>";
                            echo "</div>";
                            echo "</div>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
            <script src="script.js"></script>
</body>
</html>