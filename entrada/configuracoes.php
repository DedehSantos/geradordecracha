<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/config.css">
    <title>configurações</title>
</head>
<body>

   <div class="geral">
   <div class="container">
        <form action="./aluno_que_vai_entrar.php" method="post">
            <div class="form-group">
                <label for="time">Escolha um horário:</label>
                <input type="time" id="time_definido" name="time" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
   </div>
    
</body>

  <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</html>