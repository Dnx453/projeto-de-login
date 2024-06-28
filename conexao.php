<?php
try {
    $pdo = new PDO("mysql:dbname=sistema_login;host=localhost","root","");
} catch (PDOException $e) {
   echo "Erro com banco de dados: ".$e->getmessage();
}
catch (Exception $e){
echo "Erro generico: ".$e->getmessage();
}

?>