<?php
    include "conexao.php";

    class Action {
        public function cadastrar(Data $data){
            $bd = new Conexao();
            $con = $bd->getConexao();

            $sql = "insert into contato (nome_contato, email_contato, telefone_contato) values (?,?,?);";
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $data->getNome());
            $stm->bindValue(2, $data->getEmail());
            $stm->bindValue(3, $data->getTelefone());
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

            $sql = "update contato set nome_contato=?, email_contato=?, telefone_contato=? where id_contato=?";
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $data->getNome());
            $stm->bindValue(2, $data->getEmail());
            $stm->bindValue(3, $data->getTelefone());
            $stm->bindValue(4, $data->getId());
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

            $sql = "delete from contato where id_contato=?;";
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $data->getId());
            $return = $stm->execute();

            if($return){
                echo "Deletado com sucesso!";
            }else{
                echo "Erro ao deletar";
            }
        }
    }

?>