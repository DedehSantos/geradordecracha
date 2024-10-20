<?php
// Conectando ao banco de dados
include_once "./conexao/conexao.php";

// Supondo que essas variáveis já foram definidas em algum lugar antes deste código
// $turma, $curso
$turma = "";

// Verificando se as variáveis correspondem aos valores especificados
if ($turma === "1º A" && $curso === "Programação de Jogos Digitais") {
    // Consulta para selecionar os alunos da turma 1º A do curso de Programação de Jogos Digitais
    $sql = "SELECT nome, data_entrada, hora FROM entradas_e_saidas WHERE turma = ? AND curso = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $turma, $curso);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Verificando se há registros para listar
    if ($resultado->num_rows > 0) {
        echo "<h1>Lista de Alunos - Turma 1º A, Programação de Jogos Digitais</h1>";
        echo "<ul>";
        
        // Iterando pelos resultados e criando uma lista
        while ($linha = $resultado->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($linha['nome']) . " - Data: " . htmlspecialchars($linha['data_entrada']) . " - Hora: " . htmlspecialchars($linha['hora']) . "</li>";
        }

        echo "</ul>";
    } else {
        echo "<p>Nenhum aluno encontrado para a turma 1º A, Programação de Jogos Digitais.</p>";
    }
} else {
    echo "<p>Os parâmetros fornecidos não correspondem à turma 1º A do curso de Programação de Jogos Digitais.</p>";
}

// Fechando a conexão
$conn->close();
?>
