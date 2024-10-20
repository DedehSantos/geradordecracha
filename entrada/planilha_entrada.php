<?php
session_start();
include_once "../conexao/conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Definimos o nome do arquivo que será exportado
    $arquivo = 'planilha_registros.xls';
    
    // Criamos uma tabela HTML com o formato da planilha
    $html = '';
    $html .= '<table border="1">';
    $html .= '<tr>';
    $html .= '<td colspan="12">RELATÓRIO DE REGISTROS</td>';
    $html .= '</tr>';
    
    // Cria cabeçalho da tabela no excel
    $html .= '<tr>';
    $html .= '<td><b>id</b></td>';
    $html .= '<td><b>matricula</b></td>';
    $html .= '<td><b>nome</b></td>';
    $html .= '<td><b>turma</b></td>';
    $html .= '<td><b>tipo_registro</b></td>';
    
    $html .= '<td><b>data_do_registro</b></td>';
    $html .= '<td><b>hora_do_registro</b></td>';
    $html .= '</tr>';
    
    // Verifica se foi enviado um intervalo de datas
    if (!empty($_POST['data_inicio']) && !empty($_POST['data_fim'])) {
        $data_inicio = $_POST['data_inicio'];
        $data_fim = $_POST['data_fim'];

        // Seleciona os registros dentro do intervalo de datas
        $query1 = "SELECT id, matricula, nome, turma, 'entrada' AS tipo_registro, 
                   NULL AS status_do_aluno, DATE(data_entrada) AS data_do_registro, hora_entradas AS hora_do_registro 
                   FROM registro_de_entradas 
                   WHERE DATE(data_entrada) BETWEEN '$data_inicio' AND '$data_fim'";

        $query2 = "SELECT id, matricula, nome, turma, 'saida' AS tipo_registro, 
                   NULL AS status_do_aluno, DATE(data_saida) AS data_do_registro, hora_saida AS hora_do_registro 
                   FROM registro_de_saidas 
                   WHERE DATE(data_saida) BETWEEN '$data_inicio' AND '$data_fim'";

        $query3 = "SELECT id, matricula, nome, turma, 'atraso' AS tipo_registro, 
                   NULL AS status_do_aluno, DATE(data_atraso) AS data_do_registro, hora_atraso AS hora_do_registro 
                   FROM registro_de_atrasos 
                   WHERE DATE(data_atraso) BETWEEN '$data_inicio' AND '$data_fim'";

        $query4 = "SELECT NULL AS id, matricula, nome, turma, 'faltante' AS tipo_registro, 
                   status_do_aluno, DATE(data_falta) AS data_do_registro, hora_registro_faltas AS hora_do_registro 
                   FROM registro_de_faltas 
                   WHERE DATE(data_falta) BETWEEN '$data_inicio' AND '$data_fim'";
    } else {
        // Seleciona todos os registros
        $query1 = "SELECT id, matricula, nome, turma, 'entrada' AS tipo_registro, 
                   NULL AS status_do_aluno, DATE(data_entrada) AS data_do_registro, hora_entradas AS hora_do_registro 
                   FROM registro_de_entradas";

        $query2 = "SELECT id, matricula, nome, turma, 'saida' AS tipo_registro, 
                   NULL AS status_do_aluno, DATE(data_saida) AS data_do_registro, hora_saida AS hora_do_registro 
                   FROM registro_de_saidas";

        $query3 = "SELECT id, matricula, nome, turma, 'atraso' AS tipo_registro, 
                   NULL AS status_do_aluno, DATE(data_atraso) AS data_do_registro, hora_atraso AS hora_do_registro 
                   FROM registro_de_atrasos";

        $query4 = "SELECT NULL AS id, matricula, nome, turma, 'faltante' AS tipo_registro, 
                   status_do_aluno, DATE(data_falta) AS data_do_registro, hora_registro_falta AS hora_do_registro 
                   FROM registro_de_faltas";
    }

    // Executa as consultas e une os resultados
    $resultado1 = mysqli_query($conn, $query1);
    $resultado2 = mysqli_query($conn, $query2);
    $resultado3 = mysqli_query($conn, $query3);
    $resultado4 = mysqli_query($conn, $query4); // Executa a consulta de faltas

    // Função para processar os dados de cada consulta e adicionar à planilha
    function adicionar_dados_tabela($resultado, &$html) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            $html .= '<tr>';
            $html .= '<td>' . ($row["id"] ?? '') . '</td>'; // Verifica se id é nulo
            $html .= '<td>' . $row["matricula"] . '</td>';
            $html .= '<td>' . $row["nome"] . '</td>';
            $html .= '<td>' . $row["turma"] . '</td>';
            $html .= '<td>' . $row["tipo_registro"] . '</td>';
         
            $html .= '<td>' . $row["data_do_registro"] . '</td>';
            $html .= '<td>' . $row["hora_do_registro"] . '</td>';
            $html .= '</tr>';
        }
    }

    // Adiciona os dados de cada tabela à planilha
    adicionar_dados_tabela($resultado1, $html);
    adicionar_dados_tabela($resultado2, $html);
    adicionar_dados_tabela($resultado3, $html);
    adicionar_dados_tabela($resultado4, $html); // Adiciona os dados de faltas

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
    exit;
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <title>Gerar Planilha Registros</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/css_planilha.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Gerar Relatório de Registros</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="data_inicio">Data Início:</label>
                <input type="date" class="form-control" id="data_inicio" name="data_inicio">
            </div>
            <div class="form-group">
                <label for="data_fim">Data Fim:</label>
                <input type="date" class="form-control" id="data_fim" name="data_fim">
            </div>
            <button type="submit" class="btn btn-primary">Baixar Relatório</button>
        </form>
        <form method="post" action="">
            <button type="submit" class="btn btn-secondary mt-3">Baixar Relatório Completo</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
