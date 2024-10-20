
<!doctype html>
<html lang="PT_BR">

<head>
  <title>gerador de cracha</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/css_index.css">
</head>

<body>
  <div class="btn-group">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      MENU PRINCIPAL
    </button>
    <div class="dropdown-menu">
     
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="./pages/todoscracha.php" target="_blank">todos cracha</a>
      <div class="dropdown-divider"></div>
      
    </div>
  </div>



  <div class="geral">
  <h1>Gerador de Cracha</h1>
    <div class="botoes">
      <form action="./pages/buscarcracha.php" method="GET" target="_blank">
        <div class="form-group">
          <input id="busca" type="number" class="form-control" placeholder="digite a matricula" autofocus required name="busca">
        </div>
        <button  type="submit" class="btn btn-primary">gerar cracha</button>
      </form>
    </div>
  </div>

 
</body>

<script src="./js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="./js/popper.min.js" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js" crossorigin="anonymous"></script>

</html>
