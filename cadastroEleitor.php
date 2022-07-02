<?php

    include "logadoTipo.php";

    if (isset($_GET['id'])) {

        include "conexao.php";

        echo "<p class='alert alert-warning'>Editando</p>";

        $sql = "SELECT id, nome, cpf, rg, numtitulo, uf, senha, ativo

                FROM eleitor

                WHERE id = $_GET[id]";

        $pessoa = mysqli_fetch_array(mysqli_query($conexao, $sql));

        }

?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body class="fundo">

    <img src="logo.png" class="logo">

    <h1></h1>

    <div class="container">

        <div class="cadastro">

        <form class="row g-3 needs-validation" id="formulario" method="post" action="recebeEleitor.php" novalidate>

            <h1>Cadastro de eleitores</h1>

            <div class="row-md-4">

                <?php

                    if (isset($_GET{'id'})) {

                        echo "Codigo: <br>";

                        echo "<input type='text' class='form-control' name='id' value='$_GET[id]' readonly='readonly'>";

                    }

                ?>

            </div>

            <div class="row-md-4">

                <label for="validationCustom01" class="form-label">Nome completo:</label>

                <input type="text" class="form-control" value="<?php if (isset($pessoa['nome'])) { echo $pessoa['nome']; } ?>"

                name="nome" placeholder="Ex: Pedro Silva" required>

                <div class="invalid-feedback">

                    Campo obrigatorio.

                </div>

            </div>

            <div class="row-md-4">

                <label for="validationCustom02" class="form-label">CPF:</label>

                <input type="number" class="form-control" id="inputValid" value="<?php if (isset($pessoa['cpf'])) { echo $pessoa['cpf']; } ?>"

                name="cpf" placeholder="CPF sem pontos" required>

                <div class="invalid-feedback">

                    Campo obrigatorio.

                </div>

            </div>

            <div class="row-md-4">

                <label for="validationCustomUsername" class="form-label">RG:</label>

                <div class="input-group has-validation">

                <input type="number" class="form-control" value="<?php if (isset($pessoa['rg'])) { echo $pessoa['rg']; } ?>"

                aria-describedby="inputGroupPrepend" placeholder="RG sem pontos " name="rg" required>

                <div class="invalid-feedback">

                    Campo obrigatorio.

                </div>

                </div>

            </div>

            <div class="row-md-6">

                <label for="validationCustom03" class="form-label">Numero do titulo:</label>

                <input type="number" class="form-control" value="<?php if (isset($pessoa['numtitulo'])) { echo $pessoa['numtitulo']; } ?>"

                name="titulo" placeholder="Sem pontos" required>

                <div class="invalid-feedback">

                    Campo obrigatorio.

                </div>

            </div>

            <div class="row-md-3">

                <label for="validationCustom04" class="form-label">UF:</label>

                <select class="form-select" id="validationCustom04" name="uf" required>

                <option selected disabled value="">Selecione</option>

                <option value="AC">AC</option>

                <option value="AL">AL</option>

                <option value="AP">AP</option>

                <option value="AM">AM</option>

                <option value="BA">BA</option>

                <option value="CE">CE</option>

                <option value="DF">DF</option>

                <option value="ES">ES</option>

                <option value="GO">GO</option>

                <option value="MA">MA</option>

                <option value="MS">MS</option>

                <option value="MT">MT</option>

                <option value="MG">MG</option>

                <option value="PA">PA</option>

                <option value="PB">PB</option>

                <option value="PR">PR</option>

                <option value="PE">PE</option>

                <option value="PI">PI</option>

                <option value="RJ">RJ</option>

                <option value="RN">RN</option>

                <option value="RS">RS</option>

                <option value="RO">RO</option>

                <option value="RR">RR</option>

                <option value="SC">SC</option>

                <option value="SP">SP</option>

                <option value="SE">SE</option>

                <option value="TO">TO</option>

                </select>

                <div class="invalid-feedback">

                    Selecione o estado.

                </div>

            </div>

            <div class="row-md-3">

                <label for="validationCustom05" class="form-label">Senha:</label>

                <input type="text" class="form-control" name="senha" required>

                <div class="invalid-feedback">

                    Campo obrigatorio.

                </div>

            </div>

            <div class="col-12">

                <div class="form-check">

                <input class="form-check-input" type="checkbox" value="Y" name="ativo">

                <label class="form-check-label" for="invalidCheck">

                    Eleitor ativo?

                </label>

            </div>

            <br>

            <div class="row-12">

                <input type="submit" class="btn btn-primary" value="Cadastrar">

                <a href="menu.php" class="btn btn-warning">Voltar para o menu</a>

            </div>

        </form>

        </div>

    </div>

<script src="script.js"></script>

</body>

</html>