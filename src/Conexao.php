<?php

class Conexao {

    static public $conexao;

    public static function conectar() {
        if(self::$conexao == null) {
            try {
                self::$conexao = new PDO("mysql:dbname=".DBNAME.";host=".HOST,USER,PASS);
            } catch (\Throwable $th) {
                echo "Erro ao conectar com o banco de dados.";
        }
    }
    return self::$conexao;
    }

}

?>