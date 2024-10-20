<?php
include_once "../conexao/conexao.php";

// Obtém os registros enviados pelo Ajax
$data = json_decode(file_get_contents("php://input"), true);
$registros = $data['registros'];

foreach ($registros as $registro) {
    $matricula = $registro['matricula'];
    $nome = $registro['nome'];
    $turma = $registro['turma'];
    $data_falta = $registro['data'];
    $origem = $registro['origem'];

    // Insere o registro na tabela de atestado
    $query_inserir = "INSERT INTO registro_de_atestado (matricula, nome, turma, data_do_atestado) VALUES ('$matricula', '$nome', '$turma', '$data_falta')";
    if (!mysqli_query($conn, $query_inserir)) {
        // Exibe o erro de SQL, se houver
        echo "Erro ao inserir na tabela de atestado: " . mysqli_error($conn);
        exit; // Interrompe a execução para analisar o erro
    }

    // Deleta o registro da tabela de origem (faltas ou atrasos)
    if ($origem == 'falta') {
        $query_deletar = "DELETE FROM registro_de_faltas WHERE matricula='$matricula' AND data_falta='$data_falta'";
    } else if ($origem == 'atraso') {
        $query_deletar = "DELETE FROM registro_de_atraso WHERE matricula='$matricula' AND data_atraso='$data_falta'";
    }
    if (!mysqli_query($conn, $query_deletar)) {
        // Exibe o erro de SQL, se houver
        echo "Erro ao deletar da tabela de origem: " . mysqli_error($conn);
        exit; // Interrompe a execução para analisar o erro
    }
}

echo "Registros movidos para atestado e deletados com sucesso.";
?>
