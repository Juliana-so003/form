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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <h1>Cadastro</h1><br>
    <div class="container">
        <div class="row">
            <?php
            
            require 'conexao.php';
          $nome = $_POST['nome'];

         $sql = "INSERT INTO `tbAluno`(`nome`) VALUES ('$nome')";
         if(mysqli_query($conn, $sql)){
             echo "deu certo $nome". '<br/>';
              echo $nome . '<br/>';
         }else {
             echo "erro!!!";
         }
           
            ?>
        </div>
      <a href="index.php">  <p>voltar</p></a>
    </div>
</body>

</html>