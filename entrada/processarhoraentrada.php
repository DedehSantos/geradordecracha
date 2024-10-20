<?php
// Inclui o arquivo de conexão com o banco de dados
include_once "../conexao/conexao.php";

// Verifica se o valor foi enviado via POST e define o valor de $horario_limite
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['horario_limite'])) {
    $horario_limite = $_POST['horario_limite'];
} else {
    // Define o valor padrão para $horario_limite se nenhum valor for enviado
    $horario_limite = "07:40:00";
}

// Recebe a matrícula do aluno via parâmetro GET, ou atribui uma string vazia se não estiver presente
$matricula = $_GET['busca'] ?? '';


// Consulta SQL para buscar dados do aluno pela matrícula
$sql = "SELECT * FROM registro_de_entradas WHERE matricula = ?";

// Prepara a consulta
$stmt = $conn->prepare($sql);

// Associa o parâmetro à consulta SQL
$stmt->bind_param("s", $matricula);

// Executa a consulta
$stmt->execute();

// Obtém o resultado da consulta
$result = $stmt->get_result();

// Se encontrar um registro correspondente à matrícula
if ($linha = $result->fetch_assoc()) {
    // Armazena o nome e a turma do aluno nas variáveis
    $nome = $linha['nome'];
    $turma = $linha['turma'];
} else {
    // Se a matrícula não for encontrada, define as variáveis como vazias
    $nome = '';
    $turma = '';
    
    // Exibe uma mensagem de erro e redireciona para a página inicial após 3 segundos
    echo "<h1> Matrícula não encontrada. </h1>";
    header("Refresh: 10;url=../index.php");
    
    // Redireciona para a página de aviso passando o nome como parâmetro
    header("Location: aviso.php?nome=" . urlencode($nome));
    
    // Encerra o script após redirecionamento
    exit;
}

// Obtém o timestamp atual (em segundos desde 1970)
$unixTime = time();

// Define o fuso horário para São Paulo
$timeZone = new \DateTimeZone('America/Sao_Paulo');

// Cria um objeto DateTime e define o timestamp e o fuso horário
$time = new \DateTime();
$time->setTimestamp($unixTime)->setTimezone($timeZone);

// Formata a hora e a data atuais
$hora = $time->format('H:i:s');
$data_entrada = $time->format('d/m/Y');

// Verifica se a matrícula e a data_entrada já existem na tabela entradas_e_saidas
$sql_verifica = "SELECT * FROM entradas_e_saidas WHERE matricula = ? AND data_entrada = ?";
$stmt_verifica = $conn->prepare($sql_verifica);
$stmt_verifica->bind_param("ss", $matricula, $data_entrada);
$stmt_verifica->execute();
$result_verifica = $stmt_verifica->get_result();

// Verifica se o horário atual é anterior ou posterior ao limite
if ($hora > $horario_limite) {
    // Se o horário for posterior ao limite, insere os dados na tabela 'atrasados'
    $sql_atrasados = "INSERT INTO atrasados (matricula, nome, turma, data_entrada, hora) VALUES (?, ?, ?, ?, ?)";
    $stmt_atrasados = $conn->prepare($sql_atrasados);
    $stmt_atrasados->bind_param("sssss", $matricula, $nome, $turma, $data_entrada, $hora);
    
    if ($stmt_atrasados->execute()) {
        // Redireciona o usuário para a página de atraso com o nome e a hora como parâmetros
        header("Location: atrasado.php?nome=" . urlencode($nome) . "&hora=" . urlencode($hora));
        exit;
    } else {
        echo "Erro ao inserir os dados na tabela 'atrasados': " . $stmt_atrasados->error;
    }
    

    // Redireciona para a página inicial após inserção
    header("Refresh: 3;url=../index.php");

} else {
    // Se o horário for dentro do limite, insere os dados na tabela 'entradas_e_saidas'
    $sql2 = "INSERT INTO entradas_e_saidas (matricula, nome, turma, data_entrada, hora) VALUES (?, ?, ?, ?, ?)";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("sssss", $matricula, $nome, $turma, $data_entrada, $hora);
    
    if ($stmt2->execute()) {
        // Exibe uma mensagem de sucesso e redireciona para a página inicial após 3 segundos
        echo "Dados inseridos na tabela 'entradas_e_saidas' com sucesso!";
    } else {
        echo "Erro ao inserir os dados na tabela 'entradas_e_saidas': " . $stmt2->error;
    }
    
    // Redireciona para a página inicial
    header("Refresh: 3;url=../index.php");
}

// Fecha a conexão com o banco de dados
$conn->close();

?>

<!doctype html>
<html lang="pt_BR">
<head>
  <title>PORTARIA 2024</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Inclui os estilos Bootstrap e um CSS personalizado -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style_aluno_que_vai_entrar.css">
</head>
<body>
  <!-- Exibe a logo no centro -->
  <img class="logo_central" src="../img/nova_logo.png" alt="">
  
  <!-- Div com a saudação e os dados do aluno -->
  <div class="geral_entrada">
      <h3>Bem Vindo(a)</h3>
      <h1><?php echo htmlspecialchars($nome); ?></h1>
      <h1><?php echo htmlspecialchars($hora); ?></h1>
      <h3><?php echo htmlspecialchars($data_entrada); ?></h3>
  </div>

  <!-- Inclusão de bibliotecas JavaScript para funcionamento do Bootstrap -->

  <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
