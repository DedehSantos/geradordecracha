<?php
// Conectando ao banco de dados
include_once "./conexao/conexao.php";

// Consulta para obter os alunos da turma específica
$sql = "SELECT nome FROM entradas_e_saidas WHERE turma = ? AND curso = ?";
$stmt = $conn->prepare($sql);
$turma = '1º A';  // Exemplo de turma
$curso = 'Programação de Jogos Digitais';  // Exemplo de curso
$stmt->bind_param("ss", $turma, $curso);
$stmt->execute();
$resultado = $stmt->get_result();

// Fechando a conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Sala de Aula</title>
    <style>
        .sala-aula {
            display: grid;
            grid-template-columns: repeat(8, 1fr); /* 5 colunas de carteiras */
            gap: 15px;
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
            background-color: #e9ecef;
            position: relative;
        }

        .carteira {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            border: 2px solid #6c757d;
            border-radius: 5px;
            background-color: #fff;
            font-weight: bold;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .carteira.vazia {
            background-color: #f8f9fa;
            border-style: dashed;
            color: #6c757d;
        }

        .quadro {
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 50px;
            background-color: #343a40;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .porta {
            position: absolute;
            bottom: -60px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 100px;
            background-color: #6c757d;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Sala de Aula - <?php echo htmlspecialchars($turma) . " - " . htmlspecialchars($curso); ?></h1>
        <div class="sala-aula">
            <div class="quadro">Quadro</div>
            <?php
            $maxCarteiras = 45
            ; // Definindo o número máximo de carteiras
            $contador = 0;
            
            while ($linha = $resultado->fetch_assoc()) {
                echo "<div class='carteira'>" . htmlspecialchars($linha['nome']) . "</div>";
                $contador++;
            }

            // Preenchendo as carteiras vazias, caso haja menos alunos que o número máximo de carteiras
            while ($contador < $maxCarteiras) {
                echo "<div class='carteira vazia'>Vazio</div>";
                $contador++;
            }
            ?>
            <div class="porta"></div>
        </div>
    </div>


    <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="../js/popper.min.js" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
