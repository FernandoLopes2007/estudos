<?php
    $nome = filter_input(type: INPUT_POST, var_name: "nome");

    include 'data.php';

    $data = new Data();

    $data->setNome($nome);

    include 'action.php';

    $action = new Action();

    $action-> print($data);
?>