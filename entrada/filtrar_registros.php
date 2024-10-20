<?php
include_once "../conexao/conexao.php";

// Obtém os parâmetros da requisição
$matricula = $_GET['matricula'];
$nome = $_GET['nome'];
$turma = $_GET['turma'];
$data_falta = $_GET['data_falta'];

// Query para buscar registros na tabela de faltas
$query_faltas = "SELECT matricula, nome, turma, data_falta AS data, 'falta' AS origem FROM registro_de_faltas WHERE 1=1";

// Adiciona condições dinâmicas à consulta
if (!empty($matricula)) {
    $query_faltas .= " AND matricula LIKE '%$matricula%'";
}
if (!empty($nome)) {
    $query_faltas .= " AND nome LIKE '%$nome%'";
}
if (!empty($turma)) {
    $query_faltas .= " AND turma = '$turma'";
}
if (!empty($data_falta)) {
    $query_faltas .= " AND data_falta = '$data_falta'";
}

// Query para buscar registros na tabela de atrasos
$query_atrasos = "SELECT matricula, nome, turma, data_atraso AS data, 'atraso' AS origem FROM registro_de_atrasos WHERE 1=1";

// Adiciona condições dinâmicas à consulta
if (!empty($matricula)) {
    $query_atrasos .= " AND matricula LIKE '%$matricula%'";
}
if (!empty($nome)) {
    $query_atrasos .= " AND nome LIKE '%$nome%'";
}
if (!empty($turma)) {
    $query_atrasos .= " AND turma = '$turma'";
}
if (!empty($data_falta)) {
    $query_atrasos .= " AND data_atraso = '$data_falta'";
}

// Executa as consultas
$result_faltas = mysqli_query($conn, $query_faltas);
$result_atrasos = mysqli_query($conn, $query_atrasos);

// Monta a tabela com os resultados de faltas e atrasos
while ($row = mysqli_fetch_assoc($result_faltas)) {
    echo "<tr>";
    echo "<td><input type='checkbox' class='registroCheckbox' data-matricula='{$row['matricula']}' data-nome='{$row['nome']}' data-turma='{$row['turma']}' data-data='{$row['data']}' data-origem='falta'></td>";
    echo "<td>{$row['matricula']}</td>";
    echo "<td>{$row['nome']}</td>";
    echo "<td>{$row['turma']}</td>";
    echo "<td>{$row['data']}</td>";
    echo "<td>Falta</td>"; // Indica que a origem do registro é falta
    echo "</tr>";
}

while ($row = mysqli_fetch_assoc($result_atrasos)) {
    echo "<tr>";
    echo "<td><input type='checkbox' class='registroCheckbox' data-matricula='{$row['matricula']}' data-nome='{$row['nome']}' data-turma='{$row['turma']}' data-data='{$row['data']}' data-origem='atraso'></td>";
    echo "<td>{$row['matricula']}</td>";
    echo "<td>{$row['nome']}</td>";
    echo "<td>{$row['turma']}</td>";
    echo "<td>{$row['data']}</td>";
    echo "<td>Atraso</td>"; // Indica que a origem do registro é atraso
    echo "</tr>";
}
?>
