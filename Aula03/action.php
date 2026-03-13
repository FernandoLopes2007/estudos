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

        public function atualizar(Data $data){
            $bd = new Conexao();
            $con = $bd->getConexao();

            $sql = "update pessoa set nome=? where id=?";
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $data->getNome());
            $stm->bindValue(2, "id");
            $return = $stm->execute();
            if($return){
                echo "Atualizado com sucesso!";
            }else{
                echo "Erro ao atualizar";
            }
        }

        public function deletar(Data $data){
            $bd = new Conexao();
            $con = $bd->getConexao();

            $sql = "delete from pessoa where nome=?;";
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $data->getNome());
            $return = $stm->execute();

            if($return){
                echo "Deletado com sucesso!";
            }else{
                echo "Erro ao deletar";
            }
        }
    }

?>