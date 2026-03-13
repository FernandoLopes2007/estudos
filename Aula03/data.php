<?php
    class DATA{
        private $nome="";
        private $id="";

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getNome() {
            return $this-> nome;
        }
        
        public function setId($id) {
            $this->id = $id;
        }
        public function getId(){
            return $this-> id;
        }
    }
?>
