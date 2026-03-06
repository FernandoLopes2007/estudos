<?php
    class Action {
        public function print(Data $data): void{
            echo $data->getNome();
        }
    }

?>