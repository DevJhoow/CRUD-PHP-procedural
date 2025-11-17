<?php 

    require_once 'conexao.php';

    //exibir no formato decrescente , ex: 5,4,3,2,1
    $sql = "SELECT * FROM pessoas ORDER BY id DESC";
    $dados = $mysqli->query($sql);

    //formatar telefone para (19) 98888-888
    function formatar_telefone($telefone) {
        // garante que só tenha números
        $tel = preg_replace('/[^0-9]/', '', $telefone);

        // DDD (19) + número 98888-8888
        return "(" . substr($tel, 0, 2) . ") " . substr($tel, 2, 5) . "-" . substr($tel, 6);
    }

    //formatar nome e sobrenome ex: Jonathan Luis 
    function formatar_nome($texto) {
        $texto = strtolower($texto);   // tudo minúsculo
        return ucfirst($texto);        // primeira letra maiúscula
    }

?>