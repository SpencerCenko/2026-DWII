<?php
/**
 * 
 * Arquivo: 01_php-intro/sobre.php
 * Disciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 04 -- PHP para Web: Formulários, GET e POST
 * Autor: Spencer Cenko
 * 
 */
$pagina_atual = "Sobre";
$nome = "Spencer Cenko";
$caminho_raiz = "../";
$titulo_pagina = "Portfólio - ($nome);"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagina_atual?> - <?php echo $nome; ?></title>
    <?php include '../includes/cabecalho.php'; ?>
</head>
<body>
    <div>
        <h1 style="color: #3b579d;"> Sobre mim </h1>
        <p>Olá! Sou <strong><?php echo $nome; ?></strong>, estudante de
        Técnico em informática no IFPR de Ponta Grossa, gosto muito de Tecnologia
    e quero um dia trabalhar com isso.</p>
        <p> Olá! Sou Spencer Cenko, Aluno do curso técnico em informática no IFPR de Ponta Grossa. <br>
    <br>Um dia quero fazer ciência da computação, quero aprender inglês e gosto de videogames, também quero um dia aprender glsl.</p>
</div>
<?php include '../includes/rodape.php'; ?>

</body>
</html>