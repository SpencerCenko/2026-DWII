<!-- 01_php-intro/projetos.php -->
 <!--
    Disciplina : Desenvolvimento Web II (DWII)
    Aula       : 03 - Arquitetura Web e Introdução ao PHP
    Autor      : Spencer Antunes da Rosa Cenko
    Data       : [08/03/2026]
    Repositório: https://github.com/SpencerCenko/2026-DWII
-->
<?php $nome = "Spencer Cenko";
$pagina_atual ="projetos";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="phpcs.css">
<body id="a">
    <?php include '../includes/cabecalho.php'; ?>
     <div>
    <h2>Projeto 1: lista de Leis</h2>
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