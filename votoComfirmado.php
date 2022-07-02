<?php
    include "logado.php";
    $candidato = $_GET['candidato'];
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
    <img src="logo.png" class="logo">
    <div class="container">
        <form action="" class="voto">
            <h1>VOTO EM COMFIRMADO</h1>
            <h1>VOCÊ VOTOU NO CANDIDATO: <?php echo "$candidato";?></h1>
            <div class="mb-3">
                <a href="resultado.php" class="btn btn-primary">Ver resultados</a>
            </div>
            <div class="mb-3">
                <a href="logout.php" class="btn btn-danger">Sair</a>
            </div>
        </form>
    </div>
</body>
</html>