<?php
    include "conexao.php";

    class Action {
        public function cadastrar(Data $data){
            $bd = new Conexao();
            $con = $bd->getConexao();

            $sql = "insert into pessoa (nome_pessoa) values (?);";
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $data->getNome());
            $return = $stm->execute();

            if($return){
                echo "Cadastrado com sucesso!";
            }else{
                echo "Erro ao cadastrar";
            }
        }

        public function deletar(Data $data){
            $sql = "delete from pessoa where id_pessoa=(?)";
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $data->getId());
            $return = $stm->execute();
        }
    }

?>