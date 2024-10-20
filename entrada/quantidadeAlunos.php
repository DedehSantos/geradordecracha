<?php
// Conectando ao banco de dados
include_once "../conexao/conexao.php";

// Obtendo a data atual no formato 'd-m-d'

// Obtém a data e hora atual no fuso horário de São Paulo
$timeZone = new \DateTimeZone('America/Sao_Paulo'); // Define o fuso horário
$dataAtual = new \DateTime(); // Cria um novo objeto DateTime
$dataAtual->setTimezone($timeZone); // Ajusta o fuso horário do objeto DateTime
$data_hoje = $dataAtual->format('d/m/Y'); // Formata a data no formato DD/MM/YYYY
$hora_atual = $dataAtual->format('H:i:s'); // Formata a hora no formato HH:MM:SS
 $dataAtual = date('d/m/Y');

// Consulta para contar todos os registros com a data de entrada igual à data atual na tabela registro_de_entradas
$sqlEntradas = "SELECT COUNT(*) AS total FROM registro_de_entradas WHERE data_entrada = '$data_hoje'";
$resultadoEntradas = mysqli_query($conn, $sqlEntradas);

// Verificando e exibindo a quantidade de registros de entradas
if ($resultadoEntradas) {
    $linhaEntradas = mysqli_fetch_assoc($resultadoEntradas);
   $quantidadeEntradas = $linhaEntradas['total'];
} else {
    echo "Erro na consulta de entradas: " . mysqli_error($conn);
}

// Consulta para contar todos os registros com a data de atraso igual à data atual na tabela registro_de_atrasos
$sqlAtrasos = "SELECT COUNT(*) AS total FROM registro_de_atrasos WHERE data_atraso = '$data_hoje'";
$resultadoAtrasos = mysqli_query($conn, $sqlAtrasos);

// Verificando e exibindo a quantidade de registros de atrasos
if ($resultadoAtrasos) {
    $linhaAtrasos = mysqli_fetch_assoc($resultadoAtrasos);
 $quantidadeAtrasos = $linhaAtrasos['total'];
} else {
    echo "Erro na consulta de atrasos: " . mysqli_error($conn);
}





// Consulta para contar todos os registros com a data de entrada igual à data atual na tabela saida
$sqlsaidas = "SELECT COUNT(*) AS total FROM registro_de_saidas WHERE data_saida = '$data_hoje'";
$resultadosaidas = mysqli_query($conn, $sqlsaidas);

// Verificando e exibindo a quantidade de registros de entradas
if ($resultadosaidas) {
    $linhasaidas = mysqli_fetch_assoc($resultadosaidas);
 $quantidadesaidas = $linhasaidas['total'];
} else {
    echo "Erro na consulta de saida: " . mysqli_error($conn);
}






// Soma total de registros (entradas + atrasos)
$quantidadeTotal = $quantidadeEntradas + $quantidadeAtrasos;

$alunosnaescola = $quantidadeTotal - $quantidadesaidas;

// Fechando a conexão
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/quantidade.css">
    <title>Quantidade de Alunos</title>
</head>
<body>
    <div class="quantidade_diaria"> 
        <h1><?php echo "Contagem hoje ( $data_hoje) " ?></h1>
        <h1><?php echo "Entraram no horario:  $quantidadeEntradas " ?></h1>
        <h1><?php echo "Entraram atrasados:   $quantidadeAtrasos " ?></h1>
        <h1><?php echo "sairam: $quantidadesaidas" ?></h1>
        <h1><?php echo "Na escola hoje: $alunosnaescola " ?></h1>
    </div>
</body>

<script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="../js/popper.min.js" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</html>
