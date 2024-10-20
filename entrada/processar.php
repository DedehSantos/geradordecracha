<?php
// Configuração de conexão com o banco de dados
include_once "./conexao/conexao.php";


// Obtendo o valor do botão clicado (turma e curso)
$turma_curso = $_POST['turma_curso'];

// Obtendo a data atual
$data_atual = date('d-m-Y');  // Formato de data no banco de dados

// Separando turma e curso da string enviada pelo botão
list($turma, $curso) = explode(' - ', $turma_curso);

// Consulta SQL para verificar registros no banco de dados
$sql = "SELECT nome FROM entradas_e_saidas 
$stmt->bind_param("sss", $turma, $curso, $data_atual);
$stmt->execute();
$result = $stmt->get_result();

// Verifica se há registros que atendem aos critérios
if ($result->num_rows > 0) {
    echo "<h2>Lista de alunos da turma $turma - $curso na data de hoje:</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['nome']) . "</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum registro encontrado para a turma $turma - $curso na data de hoje.";
}

// Fechando a conexão
$stmt->close();
$conn->close();
?>
