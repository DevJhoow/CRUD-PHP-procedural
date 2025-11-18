<?php
require_once './conexao.php';

$id = intval($_POST['id']);
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sql = "UPDATE pessoas 
        SET nome='$nome', sobrenome='$sobrenome', telefone='$telefone', email='$email'
        WHERE id=$id";

$mysqli->query($sql);

header("Location: ../index.php?msg=atualizado");
exit;
