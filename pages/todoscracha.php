<?php
include_once "../conexao/conexao.php";

// Caminho para a pasta de imagens
$diretorioImagens = "../img/";

// Consulta SQL para buscar todos os alunos diretamente do banco
$sql = "SELECT * FROM alunosnovos2024";
$result = $conn->query($sql);

// Armazena os alunos encontrados
$alunos = [];
if ($result->num_rows > 0) {
    while ($aluno = $result->fetch_assoc()) {
        $alunos[] = $aluno; // Armazena o aluno encontrado
    }
} else {
    echo "Nenhum aluno encontrado.";
}

?>

<!doctype html>
<html lang="pt-BR">
<head>
    <title>Crachá</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/todoscracha.css">

    <style>
        /* Estilo para o corpo */
        body {
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        /* Container flexível para os crachás */
        .container-crachas {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            max-width: 210mm; /* Largura da página A4 */
            padding: 10mm;
            box-sizing: border-box;
        }

        /* Estilo para o crachá */
        .centralizarcracha {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 30%; /* Largura ajustada para caber 3 colunas */
            padding: 10px;
            margin: 10px 0;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            background-color: #fff;
            box-sizing: border-box;
            page-break-inside: avoid; /* Evita que o crachá seja dividido entre páginas */
        }

        /* Ajustes para impressão */
        @media print {
            #botao {
                display: none;
            }

            @page {
                size: A4;
                margin: 0;
            }

            .container-crachas {
                padding: 0;
            }
        }

        /* Tamanhos dos crachás e imagens */
        #cracha {
            width: 100%; /* Largura total do crachá */
            height: auto;
        }

        #imagem_do_codigo {
            margin-top: 33%;
            width: 100px; /* Ajuste da largura da imagem */
            height: auto;
            margin-left: -15px;
        }

        /* Estilo para o botão */
        #botao {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container-crachas">
        <?php if (!empty($alunos)): ?>
            <?php foreach ($alunos as $aluno): ?>
                <div class="centralizarcracha">
                    <img id="cracha" src="../img/cracha.png" alt="Crachá">
                    <div class="dados_aluno">
                    <p id="nome_do_aluno">
    <?php 
    // Divide o nome do aluno em um array de palavras
    $nome_aluno = explode(' ', $aluno['nome']); 
    
    // Exibe apenas as duas primeiras palavras
    echo $nome_aluno[0] . ' ' . (isset($nome_aluno[1]) ? $nome_aluno[1] : ''); 
    ?>
</p>
                        <span id="turma_do_aluno"><?php echo $aluno['turma']; ?></span>
                    </div>
                    <?php
                    // Caminho completo da imagem da matrícula com extensão .png
                    $imagemAluno = $diretorioImagens . $aluno['matricula'] . ".png";

                    // Verifica se a imagem existe no diretório
                    if (file_exists($imagemAluno)) {
                        $caminhoImagem = $imagemAluno;
                    } else {
                        // Caso a imagem não exista, use uma imagem padrão
                        $caminhoImagem = "../img/default.png";
                    }
                    ?>
                    <img id="imagem_do_codigo" src="<?php echo $caminhoImagem; ?>" alt="Imagem do aluno"> 
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhum aluno encontrado.</p>
        <?php endif; ?>
    </div>

    <button id="botao">Imprimir</button>

    <script>
        // Função para imprimir
        function imprimirCrachá() {
            window.print();
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
