<?php
// Inclui o arquivo de conexão com o banco de dados
include_once "../conexao/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atestado e Justificativa</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Cor de fundo clara */
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            margin-bottom: 30px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .resultados {
            margin-top: 20px;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Atestado e Justificativa</h1>

        <!-- Formulário de pesquisa -->
        <div class="input-group">
            <input type="text" id="matricula" placeholder="Matrícula" class="form-control" onkeyup="filtrarResultados()">
            <input type="text" id="nome" placeholder="Nome" class="form-control" onkeyup="filtrarResultados()">
            <select id="turma" class="form-control" onchange="filtrarResultados()">
                <option value="">Turma</option>
                <option value="1º A Programação de Jogos Digitais">1º A Programação de Jogos Digitais</option>
                <option value="1º B Programação de Jogos Digitais">1º B Programação de Jogos Digitais</option>
            </select>
            <input type="date" id="data_falta" class="form-control" onchange="filtrarResultados()">
        </div>

        <!-- Resultados da pesquisa -->
        <div class="resultados">
            <h3>Resultados da Pesquisa:</h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th></th> <!-- Coluna para checkbox -->
                        <th>Matrícula</th>
                        <th>Nome</th>
                        <th>Turma</th>
                        <th>Data da Falta</th>
                        <th>Origem</th> <!-- Nova coluna indicando a origem do registro (falta ou atraso) -->
                    </tr>
                </thead>
                <tbody id="tabelaRegistros">
                    <!-- Registros carregados dinamicamente -->
                </tbody>
            </table>
            <button id="deletar" class="btn btn-danger" style="display:none;" onclick="deletarRegistros()">Deletar Selecionados</button>
            <div id="noResults" class="alert alert-warning" style="display:none;">Nenhum registro encontrado.</div>
        </div>
    </div>

    <script>
        // Função para filtrar os resultados dinamicamente via Ajax
        function filtrarResultados() {
            // Obtém os valores de pesquisa
            var matricula = document.getElementById('matricula').value;
            var nome = document.getElementById('nome').value;
            var turma = document.getElementById('turma').value;
            var dataFalta = document.getElementById('data_falta').value;

            // Faz a requisição para buscar os dados filtrados
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "filtrar_registros.php?matricula=" + matricula + "&nome=" + nome + "&turma=" + turma + "&data_falta=" + dataFalta, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById('tabelaRegistros').innerHTML = xhr.responseText;

                    var temResultado = document.getElementById('tabelaRegistros').childElementCount > 0;
                    document.getElementById('noResults').style.display = temResultado ? 'none' : '';
                    document.getElementById('deletar').style.display = temResultado ? '' : 'none';
                }
            };
            xhr.send();
        }

        // Função para deletar os registros selecionados
        function deletarRegistros() {
            var checkboxes = document.querySelectorAll('.registroCheckbox:checked');
            if (checkboxes.length > 0) {
                var confirmacao = confirm("Tem certeza que deseja deletar os registros selecionados?");
                if (confirmacao) {
                    var registrosParaDeletar = Array.from(checkboxes).map(function(checkbox) {
                        return {
                            matricula: checkbox.getAttribute('data-matricula'),
                            nome: checkbox.getAttribute('data-nome'),
                            turma: checkbox.getAttribute('data-turma'),
                            data: checkbox.getAttribute('data-data'),
                            origem: checkbox.getAttribute('data-origem') // Adiciona a origem do registro (falta ou atraso)
                        };
                    });

                    // Faz a requisição para inserir na tabela registro_de_atestado e deletar da tabela faltas ou atrasos
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "inserir_e_deletar_registro.php", true);
                    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            alert("Registros inseridos na tabela de atestado e deletados com sucesso.");
                            location.reload(); // Atualiza a página após a exclusão
                        }
                    };
                    xhr.send(JSON.stringify({ registros: registrosParaDeletar }));
                }
            } else {
                alert("Nenhum registro selecionado.");
            }
        }
    </script>
</body>


  <script src="../js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="../js/popper.min.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</html>
