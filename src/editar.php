<?php
require_once './conexao.php';

if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM pessoas WHERE id = $id LIMIT 1";
$result = $mysqli->query($sql);
$pessoa = $result->fetch_assoc();

if (!$pessoa) {
    header("Location: ../index.php?msg=nao_encontrado");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Pessoa</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/table.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow p-4" style="max-width: 500px; margin: auto;">
        <h4 class="text-center mb-4"><i class="fa-solid fa-edit"></i> Editar Pessoa</h4>

        <form action="atualizar.php" method="POST">

            <input type="hidden" name="id" value="<?= $pessoa['id'] ?>">

            <div class="mb-3 input-group input-group-sm">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <input type="text" name="nome" class="form-control" value="<?= $pessoa['nome'] ?>" required>
            </div>

            <div class="mb-3 input-group input-group-sm">
                <span class="input-group-text"><i class="fa-solid fa-user-tag"></i></span>
                <input type="text" name="sobrenome" class="form-control" value="<?= $pessoa['sobrenome'] ?>" required>
            </div>

            <div class="mb-3 input-group input-group-sm">
                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                <input type="tel" name="telefone" class="form-control" value="<?= $pessoa['telefone'] ?>" required>
            </div>

            <div class="mb-3 input-group input-group-sm">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" value="<?= $pessoa['email'] ?>" required>
            </div>

            <button type="submit" class="btn btn-warning w-100">
                <i class="fa-solid fa-check"></i> Atualizar
            </button>

        </form>

        <a href="../index.php#tabela" class="btn btn-secondary w-100 mt-3">
            <i class="fa-solid fa-arrow-left"></i> Voltar
        </a>

    </div>
</div>

</body>
</html>

