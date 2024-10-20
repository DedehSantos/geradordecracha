<?php
// Inclui o arquivo de conexão com o banco de dados
include_once "../conexao/conexao.php";

// Obtém a data e hora atual no fuso horário de São Paulo
$timeZone = new \DateTimeZone('America/Sao_Paulo'); // Define o fuso horário
$dataAtual = new \DateTime(); // Cria um novo objeto DateTime
$dataAtual->setTimezone($timeZone); // Ajusta o fuso horário do objeto DateTime
$data_hoje = $dataAtual->format('d/m/Y'); // Formata a data no formato DD/MM/YYYY
$hora_atual = $dataAtual->format('H:i:s'); // Formata a hora no formato HH:MM:SS


// Inicializa variáveis para os filtros de pesquisa
$matricula_pesquisa = isset($_GET['matricula']) ? $_GET['matricula'] : ''; // Obtém matrícula da pesquisa, se disponível
$nome_pesquisa = isset($_GET['nome']) ? $_GET['nome'] : ''; // Obtém nome da pesquisa, se disponível
$turma_pesquisa = isset($_GET['turma']) ? $_GET['turma'] : ''; // Obtém turma da pesquisa, se disponível

// Consulta para listar todos os alunos
$sql_alunos = "SELECT matricula, nome, turma FROM alunosnovos2024 WHERE 1=1"; // Inicia consulta para obter todos os alunos

// Aplica filtros de pesquisa, se disponíveis
if (!empty($matricula_pesquisa)) {
    $sql_alunos .= " AND matricula LIKE '%$matricula_pesquisa%'"; // Adiciona filtro por matrícula
}
if (!empty($nome_pesquisa)) {
    $sql_alunos .= " AND nome LIKE '%$nome_pesquisa%'"; // Adiciona filtro por nome
}
if (!empty($turma_pesquisa)) {
    $sql_alunos .= " AND turma = '$turma_pesquisa'"; // Adiciona filtro por turma
}

// Executa a consulta de alunos
$result_alunos = mysqli_query($conn, $sql_alunos);

// Verifica se existem alunos
if (mysqli_num_rows($result_alunos) > 0) {
    // Array para armazenar todos os alunos
    $alunos_comparados = []; // Inicializa o array para armazenar alunos e seus status

    // Itera sobre cada aluno retornado pela consulta
    while ($aluno = mysqli_fetch_assoc($result_alunos)) {
        $matricula = $aluno['matricula']; // Obtém matrícula do aluno
        $nome = $aluno['nome']; // Obtém nome do aluno
        $turma = $aluno['turma']; // Obtém turma do aluno

        // Inicializa a variável de status e classe CSS
        $status = 'Aguardando'; // Assume que o status é aguardando por padrão
        $classStatus = 'aguardando'; // Classe CSS para o status aguardando

        // Verifica se o aluno tem registro de entrada na data de hoje
        $sql_entrada = "SELECT * FROM registro_de_entradas WHERE matricula = ? AND data_entrada = ?"; // Consulta para verificar registro de entrada
        $stmt_entrada = $conn->prepare($sql_entrada); // Prepara a consulta
        $stmt_entrada->bind_param("ss", $matricula, $data_hoje); // Vincula parâmetros
        $stmt_entrada->execute(); // Executa a consulta
        $stmt_entrada->store_result(); // Armazena o resultado da consulta

        // Verifica se o aluno tem registro de atraso na data de hoje
        $sql_atraso = "SELECT * FROM registro_de_atrasos WHERE matricula = ? AND data_atraso = ?"; // Consulta para verificar registro de atraso
        $stmt_atraso = $conn->prepare($sql_atraso); // Prepara a consulta
        $stmt_atraso->bind_param("ss", $matricula, $data_hoje); // Vincula parâmetros
        $stmt_atraso->execute(); // Executa a consulta
        $stmt_atraso->store_result(); // Armazena o resultado da consulta

        // Verifica registros de entrada
        if ($stmt_entrada->num_rows > 0) {
            $status = 'Presente'; // Atualiza o status para presente
            $classStatus = 'presente'; // Classe CSS para o status presente
        }

        // Verifica registros de atraso
        if ($stmt_atraso->num_rows > 0) {
            $status = 'Atrasado'; // Atualiza o status para atrasado
            $classStatus = 'atrasado'; // Classe CSS para o status atrasado
        }




        // Verifica se o aluno tem registro de saída na data de hoje
        $sql_saida = "SELECT * FROM registro_de_saidas WHERE matricula = ? AND data_saida = ?"; // Consulta para verificar registro de saída
        $stmt_saida = $conn->prepare($sql_saida); // Prepara a consulta
        $stmt_saida->bind_param("ss", $matricula, $data_hoje); // Vincula parâmetros
        $stmt_saida->execute(); // Executa a consulta
        $stmt_saida->store_result(); // Armazena o resultado da consulta

        // Verifica registros de saída
        if ($stmt_saida->num_rows > 0) {
            $status = 'Saiu'; // Atualiza o status para saiu
            $classStatus = 'saiu'; // Classe CSS para o status saiu
        }

        // Adiciona o aluno à lista com seu status
        $alunos_comparados[] = [
            'matricula' => $matricula,
            'nome' => $nome,
            'turma' => $turma,
            'status' => $status,
            'data' => $data_hoje,
            'classStatus' => $classStatus
        ];

        // Fecha os prepared statements
        $stmt_entrada->close(); // Fecha o statement de entrada
        $stmt_atraso->close(); // Fecha o statement de atraso
        $stmt_saida->close(); // Fecha o statement de saída
    }

    // Início da exibição dos resultados em HTML
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Presenças hoje  wewerd<?php echo $data_hoje?></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <style>
            .aguardando {
                background-color: #808080; /* Cor de fundo cinza para aguardando */
            }
            .faltante {
                background-color: #FF6347; /* Cor de fundo vermelho claro para faltantes */
            }
            .presente {
                background-color: #007f00; /* Cor de fundo verde escuro para presentes */
                color: white; /* Texto branco */
            }
            .atrasado {
                background-color: #FFFF00; /* Cor de fundo amarela para atrasados */
            }
            .saiu {
                background-color: #0000FF; /* Cor de fundo azul para os alunos que saíram */
                color: white; /* Texto branco */
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h2>Registro de Presenças hoje <?php echo $data_hoje?></h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Matrícula</th>
                        <th>Nome</th>
                        <th>Turma</th>
                        <th>Status</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alunos_comparados as $aluno): ?>
                        <tr class="<?php echo $aluno['classStatus']; ?>">
                            <td><?php echo $aluno['matricula']; ?></td>
                            <td><?php echo $aluno['nome']; ?></td>
                            <td><?php echo $aluno['turma']; ?></td>
                            <td><?php echo $aluno['status']; ?></td>
                            <td><?php echo $aluno['data']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>

    
  <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
    </html>
    <?php
} else {
    echo "Nenhum aluno encontrado.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
