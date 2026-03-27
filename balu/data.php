<?php
    class DATA{
        private $nome="";
        private $email="";
        private $telefone="";
        private $id="";

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getNome() {
            return $this-> nome;
        }
        
        public function setEmail($email) {
            $this->email = $email;
        }
        public function getEmail(){
            return $this-> email;
        }

          public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        public function getTelefone(){
            return $this-> telefone;
        }

         public function setId($id) {
            $this->id = $id;
        }
        public function getId(){
            return $this-> id;
        }
    }
?>