<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    

    <?php

    $nome = "Matheus Pereira";
    $nascimento = "1996-05-05";
    
    $nascimento = new DateTime($nascimento);
    $data_atual = new DateTime();
    $idade = $data_atual->diff($nascimento)->y;
    
    echo "<p>Cadastro realizado com sucesso! Nome: $nome. Idade: $idade anos.</p>";
    ?>
    
</body>
</html>