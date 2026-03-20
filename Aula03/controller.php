<?php
    $id = filter_input(type: INPUT_POST, var_name: "id");
    $nome = filter_input(type: INPUT_POST, var_name: "nome");
    $botao = filter_input(type: INPUT_POST, var_name: "botao");

    include 'data.php';
    $data = new Data();
    $data->setid($id);
    $data->setNome($nome);
   

    include 'action.php';
    $action = new Action();
    if($botao=="CADASTRAR"){
        $action->cadastrar($data);
    }else if ($botao == "DELETAR"){
        $action->deletar($data);
    }else if ($botao == "ATUALIZAR"){
         $action->atualizar($data);
    }else if ($botao == "CONSULTAR"){
        $action->consultar($data);
        foreach($action->consultar() as $consulta){
            echo $consulta['id'];
            echo $consulta['nome'];
        }
    }
?>