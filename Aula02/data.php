<?php
    class DATA{
        private $nome="";

        public function setNome($n): void{
            $this->nome = $n;
        }

        public function getNome(): mixed{
            return $this-> nome;
        }
    }
?>