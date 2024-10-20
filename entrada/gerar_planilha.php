<?php
session_start();
include_once "./conexao/conexao.php";
?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>GERAR PLANILHA</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="imagem/png" href="./img/logo2.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <?php
  // Definimos o nome do arquivo que será exportado
  $arquivo = 'planilha_entrada.xls';
  // Criamos uma tabela HTML com o formato da planilha
  $html = '';
  $html .= '<table border="1">';
  $html .= '<tr>';
  $html .= '<td colspan="6"> PLANILHA ENTRADAS DOS ALUNOS</tr>';
  $html .= '</tr>';

  // cria tabela no excel
  $html .= '<tr>';
  $html .= '<td><b>id</b></td>';
  $html .= '<td><b>matricula</b></td>';
  $html .= '<td><b>nome</b></td>';
  $html .= '<td><b>turma</b></td>';
  $html .= '<td><b>curso</b></td>';
  $html .= '<td><b>data_entrada</b></td>';
  $html .= '</tr>';

  //Selecionar todos os itens da tabela 
  $result_msg_contatos = "SELECT * FROM tb_registro_entrada";
  $resultado_msg_contatos = mysqli_query($conn, $result_msg_contatos);

  while ($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)) {
    $html .= '<tr>';
    $html .= '<td>' . $row_msg_contatos["id"] . '</td>';
    $html .= '<td>' . $row_msg_contatos["matricula"] . '</td>';
    $html .= '<td>' . $row_msg_contatos["nome"] . '</td>';
    $html .= '<td>' . $row_msg_contatos["turma"] . '</td>';
    $html .= '<td>' . $row_msg_contatos["curso"] . '</td>';
    $html .= '<td>' . $row_msg_contatos["data_entrada"] . '</td>';

    $html .= '</tr>';;
  }
  // Configurações header para forçar o download
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-type: application/x-msexcel");
  header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
  header("Content-Description: PHP Generated Data");
  // Envia o conteúdo do arquivo
  echo $html;
  exit; ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 
  <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>