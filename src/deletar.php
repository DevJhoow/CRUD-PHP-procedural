<?php 

    require_once 'conexao.php';

    if(isset($_GET['id'])) {

        $id = intval($_GET['id']); // só para garantir que o ID é um numero 

        $sql = " DELETE FROM pessoas WHERE id = $id ";

        if($mysqli->query($sql)) {
            header("Location: ../index.php?msg=deletado");
            exit;


        } else {
            echo "Erro ao deletar o Registro =/";
        }
    }

?>