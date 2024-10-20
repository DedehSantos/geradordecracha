<?php 

$nome = $_GET['nome'] ?? '';
$hora = $_GET['hora'] ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atrasado</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/atrasados.css">
     
</head>
<body>
     <div class="atrasados">
     
     <h3>Olá </h3>
       <h1> <?php echo $nome ?> </h1> 
       <h3>São</h3>
     <h1 class="hora_atraso"> <?php echo $hora ?> </h1> 
     <h3>você está atrasado(a) </h3>

    
      <img src="../img/atrasado.png" alt="">
    
     </div>
    

</body>

<?php header("Refresh: 3;url=../index.php"); ?>


  <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</html>