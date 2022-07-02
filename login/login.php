<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body class="fundo">
    <h1><h1><img src="logo.png" class="logo"></h1></h1>
    <div class="container">
        <div class="login rounded">
            <form class="row needs-validation" action="verificaLogin.php" method="post" novalidate>
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Login</label>
                    <input type="text" name="login" class="form-control" id="validationCustom01" placeholder="Digite seu CPF/Login" required>
                    <div class="invalid-feedback">
                        Campo obrigatorio!
                    </div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Senha</label>
                  <input type="password" name="senha" class="form-control" id="validationCustom01" placeholder="Digite sua senha" required>
                  <div class="invalid-feedback">
                        Campo obrigatorio!
                    </div>
                </div>
                <?php
                    if(isset($_GET['lgInvalido'])){
                        echo "<div class='mb-3'>";
                        echo "<div class='alert alert-danger' role='alert'>";
                        echo "Login/Senha incorreto(s)!";
                        echo "</div>";
                        echo "</div>";
                    }
                ?>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked value="A">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Eleitor
                        </label>
                    </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="B">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Mesario
                    </label>
                </div>
                <br>
                <br>
                <input class="btn btn-primary" name="bt_login" type="submit" value="Entrar">
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    </body>
</html>