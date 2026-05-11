<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$pagina_atual  = 'sobre';
$caminho_raiz  = './';
$titulo_pagina = "Portfólio";





/**
 * 
 * Arquivo: 01_php-intro/sobre.php
 * Disciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 04 -- PHP para Web: Formulários, GET e POST
 * Autor: Spencer Cenko
 * 
 */

$formacoes = ['Educação Infantil - Completa', 'Ensino Fundamental 1 - Completo', 'Ensino Fundamental 2 - Completo',
 'Ensino médio integrado ao ensino Técnico em informática - Cursando'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include __DIR__ . '/includes/cabecalho.php';?>
</head>
<body>
    <div>
        <h1 style="color: #3b579d;"> Sobre mim </h1>
        <p>Olá! Sou <strong><?php echo $nome; ?></strong>, estudante de
        Técnico em informática no IFPR de Ponta Grossa, gosto muito de Tecnologia
    e quero um dia trabalhar com isso.</p>
        <p> Olá! Sou Spencer Cenko, Aluno do curso técnico em informática no IFPR de Ponta Grossa. <br>
    <br>Um dia quero fazer ciência da computação, quero aprender inglês e gosto de videogames, também quero um dia aprender glsl.</p>
    <br>
    <h3 style="color: #3b579d;">Formações: </h3>
    <?php
    foreach ($formacoes as $item) { // aq to usando foreach pra mostrar a array inteira, cada vez q ele repete ele pega uma informação da array e transforma em item
     echo $item . '<br>';
     }
     ?>
</div>
<?php require_once __DIR__ . '/includes/rodape.php'; ?>

</body>
</html>