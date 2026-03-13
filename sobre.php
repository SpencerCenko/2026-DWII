<!-- 01_php-intro/sobre.php -->
 <!--
    Disciplina : Desenvolvimento Web II (DWII)
    Aula       : 03 - Arquitetura Web e Introdução ao PHP
    Autor      : Spencer Antunes da Rosa Cenko
    Data       : [08/03/2026]
    Repositório: https://github.com/SpencerCenko/2026-DWII
-->
<?php

$pagina_atual = "sobre";
$nome = "Spencer Cenko";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - <?php echo $nome; ?></title>
</head>
<link rel="stylesheet" type="text/css" href="phpcs.css">
<body>
    <?php include '../includes/cabecalho.php'; ?>
    <div >
        <h1 style="color: #3b579d;"> Sobre mim </h1>
        <p>Olá! Sou <strong><?php echo $nome; ?></strong>, estudante de
        Técnico em informática no IFPR de Ponta Grossa, gosto muito de Tecnologia
    e quero um dia trabalhar com isso.</p>
        <p> Olá! Sou Spencer Cenko, Aluno do curso técnico em informática no IFPR de Ponta Grossa. <br>
    <br>Um dia quero fazer ciência da computação, quero aprender inglês e gosto de videogames, também quero um dia aprender glsl.</p>
        <a href="index.php"> Voltar ao inicio</a>
</div>
<?php include '../includes/rodape.php'; ?>
    
</body>
</html>