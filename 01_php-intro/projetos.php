
<?php 
    /**
 * 
 * Arquivo: 01_php-intro/projetos.php
 * Disciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 04 -- PHP para Web: Formulários, GET e POST
 * Autor: Spencer Cenko
 * 
 */
$nome = "Spencer Cenko";
$pagina_atual ="Projetos";
$caminho_raiz = "../";
$titulo_pagina = "Portfólio - ($nome)";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagina_atual?> - <?php echo $nome; ?></title>
    <?php include '../includes/cabecalho.php'; ?>
</head>

<body>
     <div>
        <h1 style="color: #3b579d;"> Projetos </h1>
    <h2>Projeto 1: Lista de Leis</h2>
    <p>
        Anteriormente na matéria do Celso criei um site com leis cadastradas em banco de dados, que mostra as leis em html
    </p>
    <h2>Projeto 2: Criação de Shaders</h2>
    <p>
        Planejo aprender a criar shaders(em glsl e hlsl)
    </p>
    <h2>Projeto 3: Mod no minecraft java</h2>
    <p>
        Tenho planejado de criar um mod em neoforge com meus amigos para minecraft java
</p>
</div>
    <?php include '../includes/rodape.php'; ?>
</body>
</html>