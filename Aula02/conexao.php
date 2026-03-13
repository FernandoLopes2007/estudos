<?php
    class Conexao{
        public static $instancia;
        public static function getConexao(): mixed{
            if(isset(self::$instancia)){
                self::$instancia = new PDO(dsn: 'mysql:host=localhost;dbname=pessoa;charset=utf8',username: 'root', password: 'root');
                return self::$instancia;
                }else{
                return self::$instancia;
            }
        }
    }
?>