<!doctype html>
<html lang="pt_BR">

<head>
  <title>Aviso - Frequência Já Registrada</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style_aviso.css">
  
  <!-- Meta tag para redirecionamento automático após 3 segundos -->
    <!--<meta http-equiv="refresh" content="2;url=../index.php"> -->

  <style>
    .container {
      margin-top: 50px;
      text-align: center;
    }
    .alert {
      font-size: 1.5em;
    }
  </style>
</head>

<body>
  <div class="container ">
  <img class="logo_central" src="../img/alerta.png" alt="">
    <div class="alert alert-warning aviso" role="alert">

  
      <?php 
     
      $nome = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : 'Aluno';
      echo  " <h3> A frequência de </h3>  <h1> $nome <h3> já foi registrada hoje. </h3> ";
      
      ?>
      
    </div>
  </div>


  <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>
