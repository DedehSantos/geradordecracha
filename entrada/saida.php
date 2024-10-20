<?php 

$nome = $_GET['nome'] ?? '';
$hora = $_GET['hora'] ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/saida.css">
 
    <title>Document</title>
</head>
<body>
 

     <div class="centralizar_saida" >
     <img class="logo_central" src="../img/atencao_estudante.png" alt="">
           <?php echo "  <h1> $nome </h1> " ?> 
           <?php echo "  <h2> São  $hora </h2> " ?> 

      <h1>Você está saindo antes do término das aulas.</h1>

       <h3>Mantenha sua frequência escolar regular para não perder
         benefícios como o programa "Pé de Meia". A presença nas
          aulas é fundamental para o seu aprendizado e sucesso futuro.
           Valorize sua educação!</h3>

           </div>       

</body>

<script>
        // Espera 9 segundos (9000 milissegundos) antes de redirecionar
        setTimeout(function() {
            window.location.href = '../index.php';
        }, 5000);
    </script>

    
  <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>

</html>