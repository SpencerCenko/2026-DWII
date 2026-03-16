
    <?php
    /**
 * 
 * Arquivo: 01_php-intro/index.php
 * Disciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 04 -- PHP para Web: Formulários, GET e POST
 * Autor: Spencer Cenko
 * 
 */
    // Variáveis PHP - serão usadas no HTML abaixo
    $nome = "Spencer Cenko";
    $profissao = "Estudante de Tecnologia";
    $curso = "Técnico em informática - IFPR";
    $pagina_atual = "Inicio";
    $caminho_raiz = "../";
    $titulo_pagina = "Portfólio - ($nome)";

    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagina_atual?> - <?php echo $nome; ?></title>
    
</head>
<?php include '../includes/cabecalho.php'; ?>
<body>
    <div class="hero">
    <h1><?php echo $nome; ?></h1>
    <p><?php echo $profissao; ?></p>
</div>
<div class="container">
    <h2>Bem-vindo ao meu pórtfólio</h2>
    <p>Esta página foi gerada pelo PHP em: <strong><?php echo date("d/m/Y \à\s H:i"); ?></strong></p>
</div>

<?php include '../includes/rodape.php'; ?>
</body>
</html>