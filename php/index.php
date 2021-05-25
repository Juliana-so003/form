<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php
    require 'conexao.php';
    ?>
    <h1>Hello, world!</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <h1>Cadastro</h1><br>
    <form action="inserir.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome">
        </div><br>
        <div class="form-group">
            <input type="submit" class="btn-success">
        </div>
    </form>

    <h1>Cadastro</h1><br>
    <div class="container">
        <div class="row">
            <?php
            
            require 'conexao.php';
            $nome = $_POST['nome'];

            $sql = "SELECT * FROM `tbaluno` WHERE 1";
            $retorno = $conexao->query($sql);
            if ($retorno->num_rows > 0) {
                while ($linha = $retorno->fetch_assoc()) {
                    echo $linha['nome']. '<br/>';
                }
            } else {
                echo "nao foi encontrado";
            }


            ?>
        </div>
    </div>


</body>

</html>