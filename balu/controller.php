<?php
    $id = filter_input(type: INPUT_POST, var_name: "id");
    $nome = filter_input(type: INPUT_POST, var_name: "nome");
    $email = filter_input(type: INPUT_POST, var_name: "email");
    $telefone = filter_input(type: INPUT_POST, var_name: "telefone");
    $botao = filter_input(type: INPUT_POST, var_name: "botao");

    include 'data.php';
    $data = new Data();
    $data->setId($id);
    $data->setNome($nome);
    $data->setEmail($email);
    $data->setTelefone($telefone);
    
    include 'action.php';
    $action = new Action();
    if($botao=="CADASTRAR"){
        $action->cadastrar($data);
    }else if ($botao == "DELETAR"){
        $action->deletar($data);
    }else if ($botao == "ATUALIZAR"){
         $action->atualizar($data);
    }
?>

<script>
    setTimeout(() => {
        window.location.href = "form_cad.php"
    }, 2000)
</script>