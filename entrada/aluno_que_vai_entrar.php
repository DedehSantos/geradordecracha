<?php 
// Inclui o arquivo de conexão com o banco de dados
include_once "../conexao/conexao.php";


// Define o limite para cadastro de atrasos
$horario_atraso = "07:45:00"; // Define o horário limite para considerar um aluno como atrasado

// Recebe a matrícula do aluno via parâmetro GET, ou atribui uma string vazia se não estiver presente
$matricula = $_GET['busca'] ?? ''; // Usa a matrícula recebida na URL ou uma string vazia

// Conecta ao banco de dados
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

// Define o conjunto de caracteres como UTF-8 para garantir a compatibilidade de caracteres especiais
mysqli_set_charset($conn, 'utf8');

// Verifica se a conexão falhou e encerra o script em caso de erro
if (!$conn) {
    die('Conexão falhou: ' . mysqli_connect_error()); // Exibe mensagem de erro se não conseguir conectar
}

// Consulta SQL para buscar dados do aluno pela matrícula
$sql = "SELECT * FROM alunosnovos2024 WHERE matricula = ?"; // SQL parametrizado para segurança

// Prepara a consulta
$stmt = $conn->prepare($sql);

// Associa o parâmetro à consulta SQL
$stmt->bind_param("s", $matricula); // 's' indica que o parâmetro é uma string

// Executa a consulta
$stmt->execute();

// Obtém o resultado da consulta
$result = $stmt->get_result();

// Se encontrar um registro correspondente à matrícula
if ($linha = $result->fetch_assoc()) {
    // Armazena o nome e a turma do aluno nas variáveis
    $nome = $linha['nome']; // Nome do aluno
    $turma = $linha['turma']; // Turma do aluno
} else {
    // Redireciona para a página aluno_nao_encontrado.php com informações como parâmetros
    header("Location: aluno_nao_encontrado.php?nome=" . urlencode($nome) . "&turma=" . urlencode($turma));
    exit; // Para a execução do script
}

// Obtém o timestamp atual (em segundos desde 1970)
$unixTime = time();

// Define o fuso horário para São Paulo
$timeZone = new \DateTimeZone('America/Sao_Paulo');

// Cria um objeto DateTime e define o timestamp e o fuso horário
$time = new \DateTime();
$time->setTimestamp($unixTime)->setTimezone($timeZone); // Ajusta o objeto para o horário local

// Formata a hora e a data atuais
$hora = $time->format('H:i:s'); // Formata a hora no formato HH:MM:SS
$data_entrada = $time->format('d/m/Y'); // Formata a data no formato YYYY/MM/DD

// Verifica se a matrícula e a data_entrada já existem na tabela registro_de_entrada
$sql_verifica_entrada = "SELECT * FROM registro_de_entradas WHERE matricula = ? AND data_entrada = ?";
$stmt_verifica_entrada = $conn->prepare($sql_verifica_entrada);
$stmt_verifica_entrada->bind_param("ss", $matricula, $data_entrada);
$stmt_verifica_entrada->execute();
$stmt_verifica_entrada->store_result(); // Armazena o resultado para saber quantas linhas foram retornadas

// Verifica se a matrícula e a data_entrada já existem na tabela registro_de_atrasos
$sql_verifica_atraso = "SELECT * FROM registro_de_atrasos WHERE matricula = ? AND data_atraso = ?";
$stmt_verifica_atraso = $conn->prepare($sql_verifica_atraso);
$stmt_verifica_atraso->bind_param("ss", $matricula, $data_entrada);
$stmt_verifica_atraso->execute();
$stmt_verifica_atraso->store_result(); // Armazena o resultado para saber quantas linhas foram retornadas

$sql_verifica_saida = "SELECT * FROM registro_de_saidas WHERE matricula = ? AND data_saida = ?";
$stmt_verifica_saida = $conn->prepare($sql_verifica_saida);
$stmt_verifica_saida->bind_param("ss", $matricula, $data_entrada);
$stmt_verifica_saida->execute();
$stmt_verifica_saida->store_result(); // Armazena o resultado para saber quantas linhas foram retornadas


// Verifica o número de linhas retornadas
if ($stmt_verifica_entrada->num_rows > 0 || $stmt_verifica_atraso->num_rows > 0 || $stmt_verifica_saida->num_rows > 0) {
    // Se a matrícula já existir na tabela registro_de_saida, redireciona para a página 'saida_duplicada.php'
    if ($stmt_verifica_saida->num_rows > 0) {
        header("Location: saida_duplicada.php?nome=" . urlencode($nome) . "&hora=" . urlencode($hora));
        exit;
    }}




// Verifica o número de linhas retornadas
if ($stmt_verifica_entrada->num_rows > 0 || $stmt_verifica_atraso->num_rows > 0) {
    // Se a matrícula já existir na tabela registro_de_entrada ou registro_de_atrasos, insere na tabela de saída
    $sql_saida = "INSERT INTO registro_de_saidas (matricula, nome, turma, data_saida, hora_saida) VALUES (?, ?, ?, ?, ?)";
    $stmt_saida = $conn->prepare($sql_saida);
    $stmt_saida->bind_param("sssss", $matricula, $nome, $turma, $data_entrada, $hora);

    if ($stmt_saida->execute()) {
        // Redireciona para a página inicial
        header("Location: saida.php?nome=" . urlencode($nome) . "&hora=" . urlencode($hora));
        exit;
    } else {
        echo "Erro ao inserir os dados na tabela 'registro_de_saida': " . $stmt_saida->error; // Exibe mensagem de erro se falhar
    }
} else {
    // Verifica se o horário atual é após o limite de atraso
    if ($hora >= $horario_atraso) {
        // Se o horário for após o limite, insere os dados na tabela 'registro_de_atraso'
        $sql_atraso = "INSERT INTO registro_de_atrasos (matricula, nome, turma, data_atraso, hora_atraso) VALUES (?, ?, ?, ?, ?)";
        $stmt_atraso = $conn->prepare($sql_atraso);
        $stmt_atraso->bind_param("sssss", $matricula, $nome, $turma, $data_entrada, $hora);

        if ($stmt_atraso->execute()) {
            // Redireciona para a página de atraso
            header("Location: atrasado.php?nome=" . urlencode($nome) . "&hora=" . urlencode($hora));
            exit;
        } else {
            echo "Erro ao inserir os dados na tabela 'registro_de_atraso': " . $stmt_atraso->error; // Exibe mensagem de erro se falhar
        }
    } else {
        // Se o horário for dentro do limite, insere os dados na tabela 'registro_de_entrada'
        $sql_entrada = "INSERT INTO registro_de_entradas (matricula, nome, turma, data_entrada, hora_entradas) VALUES (?, ?, ?, ?, ?)";
        $stmt_entrada = $conn->prepare($sql_entrada);
        $stmt_entrada->bind_param("sssss", $matricula, $nome, $turma, $data_entrada, $hora);

        if ($stmt_entrada->execute()) {
        
            header("Refresh: 1;url=../index.php");
        } else {
            echo "Erro ao inserir os dados na tabela 'registro_de_entrada': " . $stmt_entrada->error; // Exibe mensagem de erro se falhar
        }
    }
}





// Fecha a conexão com o banco de dados
$conn->close();
?>

<!doctype html>
<html lang="pt_BR">
<head>
  <title>sistema frequencia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Inclui os estilos Bootstrap e um CSS personalizado -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style_aluno_que_vai_entrar.css">
</head>
<body>
  <!-- Exibe a logo no centro -->
  <img class="logo_central" src="../img/nova_logo.png" alt="">
  
  <!-- Div com a saudação e os dados do aluno -->
  <div class="geral_entrada">
      <h3>Bem Vindo(a)</h3>
      <h1><?php echo htmlspecialchars($nome); ?></h1> <!-- Exibe o nome do aluno -->
      <h1><?php echo htmlspecialchars($hora); ?></h1> <!-- Exibe a hora atual -->
      <h3><?php echo htmlspecialchars($data_entrada); ?></h3> <!-- Exibe a data atual -->
  </div>

  <!-- Inclusão de bibliotecas JavaScript para funcionamento do Bootstrap -->
 

  <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>