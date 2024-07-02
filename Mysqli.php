<?php

class Pessoa {
    private $pdo;

    public function __construct($dbname, $host, $user, $senha) {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $senha);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro com banco de dados: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Erro genérico: " . $e->getMessage();
        }
    }

    public function buscarDados() {
        $res = array();
        try {
            $cmd = $this->pdo->query("SELECT * FROM usuarios");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar dados: " . $e->getMessage();
        }
        return $res;
    }
}

?>
