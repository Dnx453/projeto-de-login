<?php
include 'conexao.php';

//$enviar = $pdo->prepare("INSERT INTO usuarios(nome, email, cpf, senha) VALUES (:n,:e,:c,:s)");
//$enviar->bindValue(":n","Felipe");
//$enviar->bindValue(":e","Fm751062@gmail.com");
//$enviar->bindValue(":c","08186577904");
//$enviar->bindValue(":s","Felipe23");
//$enviar->execute();

//$del = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
//$id = 1;
//$del->bindValue(":id",$id);
//$del->execute();

//$upd = $pdo->prepare("UPDATE usuarios SET cpf = :cpf WHERE id = :id");
//$id = 2;
//$cpf = '08423090981';
//$upd->bindValue(":id",$id);
//$upd->bindValue(":cpf",$cpf);
//$upd->execute();

$slc = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
$id = 2;
$slc->bindValue(":id",$id);
$slc->execute();
$resul = $slc->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina de login - Troia Leiloes</title>
</head>
<body>
<form action="" method="post">
    <label for="nome">Email ou Cpf:</label>
    <input type="text" id="nome" name="nome" placeholder="Digite seu email ou cpf" require>
    
    <label for="email">Senha:</label>
    <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
    
    <input type="submit" value="Enviar">
</form>

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Cpf</th>
        <th>Senha</th>
    </tr>
    <tr>
      <?php foreach ($resul as $key => $value) {
        echo "<td>" .$value . "</td>";
      }
      ?>

    </tr>
    
</table>

</body>
</html>