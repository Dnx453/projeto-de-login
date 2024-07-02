<?php
require_once '../Mysqli.php';
require_once '../user_banco.php';

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    $result = $p->buscarDados();
    ?>
    <table>
     <tr>
        <th>NOME</th>
        <th>Email</th>
        <th>Cpf</th>
        <th>Senha</th>
        <th>Operações</th>
     <tr>
     <tr>
     <?php
    if(count($result) > 0)
    {
        for ($i=0; $i < count($result); $i++) { 
            echo "<tr>";
            foreach ($result[$i] as $key => $value) {
                if($key != "id")
                {
                    echo "<td>".$value."</td>";
                }
              }?>
              <td><a href="">EDITAR </a><a href="">Excluir</a><td>
              <?php
              echo "</tr>";
        }
    }
    ?>
     
    </tr>


    </table>
</body>
</html>