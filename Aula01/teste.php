<?php
    $nome = filter_input(type: INPUT_POST, var_name: "nome");
    $idade = filter_input(type: INPUT_POST, var_name: "idade");
    $valor = filter_input(type: INPUT_POST, var_name: "valor");
    $sexo = filter_input(type: INPUT_POST, var_name: "sexo");
    $checksexo;
    if($sexo=='m'){
        $checksexo=1.1;
    }else{
        $checksexo=0.9;
    }
    echo "$nome - $idade" - "$valor" - "$sexo";
    if($idade >=18 && $idade <26){
          $basecalculo;
        echo "Maior de idade";
    }else{
        echo "Menor de idade";
    }

    $novovalor = ($valor * $basecalculo)*$checksexo;
    echo "$nome o valor final do seu seguro é $novovalor";
?>