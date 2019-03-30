<?php

class Frases {

    public static function novaFrase($frase) {
        $sql = Conexao::conectar()->prepare("INSERT INTO frases SET descricao = ?");
        $sql->execute(array($frase));
    }

    public static function getFrases() {
        $sql = Conexao::conectar()->prepare("SELECT * FROM frases");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
        } else {
            $data = null;
        }
        return $data;
    }

}

?>