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
   <label for="marca_veiculo">senha</label>
   <input type="text" name="marca_veiculo" id="marca_veiculo">
   <br><br> 
   <label for="modelo_veiculo">senha</label>
   <input type="text" name="modelo_veiculo" id="modelo_veiculo">
   <br><br> 
   <label for="ano_veiculo">senha</label>
   <input type="date" name="ano_veiculo" id="ano_veiculo">
   <br><br> 
   <label for="cor_veiculo">senha</label>
   <input type="text" name="cor_veiculo" id="cor_veiculo">
   <br><br> 
   <label for="placa_veiculo">senha</label>
   <input type="text" name="placa_veiculo" id="placa_veiculo">
   <br><br> 
   <label for="nome_proprietario">senha</label>
   <input type="text" name="nome_proprietario" id="nome_proprietario">
   <br><br> 
   <label for="telefone_proprietario">senha</label>
   <input type="number" name="telefone_proprietario" id="telefone_proprietario">
   <br><br> 
   <button type="submit">Cadastrar</button>
</form>

<?php

$username = isset($_POST['username']) ? $_POST['username'] : exit() ;
$password = isset($_POST['password']) ? $_POST['password'] : exit() ;

// statement
$stmt = $pdo->prepare('INSERT INTO usuario (username, password) VALUES (:username, :password)');
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();
?>