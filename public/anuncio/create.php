<?php
   include'../../config/connection.php'; 


?>

<form action="create.php" method="POST">
   <label for="titulo_anuncio">titulo de anuncio</label>
   <input type="text" name="titulo_anuncio" id="titulo_anuncio">
   <br><br>
   <label for="descricao_anuncio">descrição do anuncio</label>
   <input type="text" name="descricao_anuncio" id="descricao_anuncio">
   <br><br> 
   <label for="data_publicacao">data de publicação</label>
   <input type="date" name="data_publicacao" id="data_publicacao">
   <br><br> 
   <label for="marca_veiculo">marca do veiculo</label>
   <input type="text" name="marca_veiculo" id="marca_veiculo">
   <br><br> 
   <label for="modelo_veiculo">modelo do veiculo</label>
   <input type="text" name="modelo_veiculo" id="modelo_veiculo">
   <br><br> 
   <label for="ano_veiculo">ano do veiculo</label>
   <input type="date" name="ano_veiculo" id="ano_veiculo">
   <br><br> 
   <label for="cor_veiculo">cor do veiculo</label>
   <input type="text" name="cor_veiculo" id="cor_veiculo">
   <br><br> 
   <label for="placa_veiculo">placa do veiculo</label>
   <input type="text" name="placa_veiculo" id="placa_veiculo">
   <br><br> 
   <label for="nome_proprietario">nome do proprietario</label>
   <input type="text" name="nome_proprietario" id="nome_proprietario">
   <br><br> 
   <label for="telefone_proprietario">telefone</label>
   <input type="number" name="telefone_proprietario" id="telefone_proprietario">
   <br><br> 
   <button type="submit">Cadastrar</button>
</form>

<?php
// Captura os dados do formulário
$titulo_anuncio = $_POST['titulo_anuncio'] ?? '';
$descricao_anuncio = $_POST['descricao_anuncio'] ?? '';
$data_publicacao = $_POST['data_publicacao'] ?? '';
$marca_veiculo = $_POST['marca_veiculo'] ?? '';
$modelo_veiculo = $_POST['modelo_veiculo'] ?? '';
$ano_veiculo = $_POST['ano_veiculo'] ?? '';
$cor_veiculo = $_POST['cor_veiculo'] ?? '';
$placa_veiculo = $_POST['placa_veiculo'] ?? '';
$nome_proprietario = $_POST['nome_proprietario'] ?? '';
$telefone_proprietario = $_POST['telefone_proprietario'] ?? '';

// Prepara a query de inserção
$stmt = $pdo->prepare('INSERT INTO carros 
    (nome, descricao, data_publicacao, marca, modelo, ano, cor, placa, nome, telefone) 
    VALUES 
    (:titulo_anuncio, :descricao_anuncio, :data_publicacao, :marca_veiculo, :modelo_veiculo, :ano_veiculo, :cor_veiculo, :placa_veiculo, :nome_proprietario, :telefone_proprietario)');

// Associa os valores
$stmt->bindParam(':titulo_anuncio', $titulo_anuncio);
$stmt->bindParam(':descricao_anuncio', $descricao_anuncio);
$stmt->bindParam(':data_publicacao', $data_publicacao);
$stmt->bindParam(':marca_veiculo', $marca_veiculo);
$stmt->bindParam(':modelo_veiculo', $modelo_veiculo);
$stmt->bindParam(':ano_veiculo', $ano_veiculo);
$stmt->bindParam(':cor_veiculo', $cor_veiculo);
$stmt->bindParam(':placa_veiculo', $placa_veiculo);
$stmt->bindParam(':nome_proprietario', $nome_proprietario);
$stmt->bindParam(':telefone_proprietario', $telefone_proprietario);
?>
