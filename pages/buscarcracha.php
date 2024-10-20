<?php
include_once "../conexao/conexao.php";

// Obtém o valor de 'busca' enviado via GET, que seria a matrícula
$matricula = $_GET['busca'] ?? '';

// Verifica se o parâmetro 'busca' foi enviado e não está vazio
if (!empty($matricula)) {
    // Consulta SQL para buscar o aluno pela matrícula
    $sql = "SELECT matricula, nome, turma FROM alunosnovos2024 WHERE matricula = ?";
    
    // Prepara a consulta
    $stmt = $conn->prepare($sql);
    
    // Vincula o parâmetro 'matricula' à consulta
    $stmt->bind_param("s", $matricula);
    
    // Executa a consulta
    $stmt->execute();
    
    // Obtém o resultado da consulta
    $result = $stmt->get_result();
    
    // Verifica se o aluno foi encontrado
    if ($result->num_rows > 0) {
        // Exibe os dados do aluno encontrado
        while ($row = $result->fetch_assoc()) {
            $matricula =  $row['matricula'];
            $nome =       $row['nome'];
            $turma =      $row['turma'];
        }
    } else {
        // Se não encontrar o aluno, exibe uma mensagem
        echo "Nenhum aluno encontrado com a matrícula: " . htmlspecialchars($matricula);
    }
    
    // Fecha a consulta e a conexão
    $stmt->close();
    $conn->close();
} else {
    // Se a matrícula (ou busca) não for fornecida, exibe uma mensagem de erro
    echo "Por favor, forneça uma matrícula válida.";
}

// Caminho para a pasta de imagens
$diretorioImagens = "../img/";

// Caminho completo da imagem da matrícula com extensão .png
$imagemAluno = $diretorioImagens . $matricula . ".png";

// Verifica se a imagem existe no diretório
if (file_exists($imagemAluno)) {
    $caminhoImagem = $imagemAluno;
} else {
    // Caso a imagem não exista, use uma imagem padrão
    $caminhoImagem = "../img/default.png";
}
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <title>Crachá</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/buscarcracha.css">

    <style>
        /* Estilo para o corpo */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Centraliza verticalmente */
            background-color: #f8f9fa; /* Cor de fundo */
        }

        /* Estilo para o crachá */
        .centralizarcracha {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%; /* Para ocupar toda a largura disponível */
            max-width: 210mm; /* Largura máxima para A4 */
            height: 297mm; /* Altura para A4 */
            padding: 20px; /* Padding para espaço interno */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            border: 1px solid #ccc; /* Borda */
            background-color: #fff; /* Cor de fundo */
            position: relative;
        }

        /* Esconder o botão ao imprimir */
        @media print {
            #botao {
                display: none; /* Esconde o botão durante a impressão */
            }
        }

        /* Definindo tamanhos e margens para impressão */
        @media print {
            @page {
                size: A4; /* Define o tamanho da página para A4 */
                margin: 10mm; /* Margens para impressão */
            }
        }

        #cracha {
            width: 100%; /* Largura do crachá */
            height: auto; /* Altura automática para manter a proporção */
        }

        #imagem_do_codigo {
            width: 200px; /* Define largura da imagem do código */
            height: auto; /* Altura automática */
        }
    </style>
</head>
<body>
    <div class="centralizarcracha">
        <img id="cracha" src="../img/cracha.png" alt="Crachá">
        <div class="dados_aluno">
            <p id="nome_do_aluno"><?php echo $nome; ?></p>
            <span id="turma_do_aluno"><?php echo $turma; ?></span>
        </div>
        <img id="imagem_do_codigo" src="<?php echo $imagemAluno; ?>" alt="Imagem do aluno"> 

        <button id="botao">Imprimir</button>
    </div>

    <script>
        // Função para imprimir
        function imprimirCrachá() {
            window.print(); // Chama a função de impressão do navegador
        }

        // Adiciona um evento de clique ao botão de imprimir
        document.getElementById('botao').addEventListener('click', imprimirCrachá);
    </script>

    <!-- JavaScript opcional -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
