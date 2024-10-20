<?php 

$nome = $_GET['nome'] ?? '';
$hora = $_GET['hora'] ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/aluno_duplicado.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>saida duplicado</title>
</head>
<body>
     

    <div class="aluno_duplicado">
        <h1>Olá</h1>

    <h1> <?php echo $nome ?>  </h1>
    <h1>ja já existe um registro de saída seu hoje</h1>
      
    </div>
   
    <?php  header("Refresh: 2;url=../index.php"); ?>
</body>

  <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</html>