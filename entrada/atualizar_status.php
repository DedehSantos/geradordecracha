<?php
// Inclui o arquivo de conexão com o banco de dados
include_once "./conexao/conexao.php";

// Obtém a data e hora atual no fuso horário de São Paulo
$timeZone = new \DateTimeZone('America/Sao_Paulo'); // Define o fuso horário
$dataAtual = new \DateTime(); // Cria um novo objeto DateTime
$dataAtual->setTimezone($timeZone); // Ajusta o fuso horário do objeto DateTime
$hora_atual = $dataAtual->format('H:i:s'); // Formata a hora no formato HH:MM:SS


// Conecta ao banco de dados
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); // Conecta ao banco de dados
mysqli_set_charset($conn, 'utf8'); // Define o conjunto de caracteres para UTF-8

// Verifica se a hora atual é maior ou igual à hora limite
if ($hora_atual) {
    // Atualiza o status dos alunos que estão "Aguardando" para "Faltante"
    $sql_update = "UPDATE registro_de_faltas SET status_do_aluno = 'Faltante' WHERE status_do_aluno = 'Aguardando'";
    if (mysqli_query($conn, $sql_update)) {
        echo "Status atualizado com sucesso para 'Faltante'.";
    } else {
        echo "Erro ao atualizar status: " . mysqli_error($conn);
    }
} else {
    echo "Ainda não é hora de atualizar os status.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>

<h1>COMPUTANDO AS FALTAS...</h1>