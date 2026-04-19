<?php
/**
* ARQUIVO: 02_formularios/obrigado.php
* Disciplina: Desenvolvimento Web II (2026-DWII)
* Aula: 04 - PHP para Web: Formulários, GET e POST
* Autor: Spencer Cenko
* Conceitos: header() + exit (PRG), $_GET para parâmetros de confirmação, htmlspecialchars()

* Página de confirmação -- destino do redirecionamento PRG.
* Recebe o nome via GET apenas para exibição amigável.
* Nenhum dado de formulário é processado aqui.

*/

// VARIAVEIS DO TEMPLATE
$nome = "Spencer Cenko";
$pagina_atual = "contato";
$caminho_raiz = "../";
$titulo_pagina = "Obrigado!";

$nome_visitante = htmlspecialchars($_GET['nome'] ?? 'visitante');
?>

<?php include '../includes/cabecalho.php'; ?>
<div class="container confirmacao">
    <p class="confirmacao-icone"></p>
    <h1 class="confirmacao-titulo">
        Obrigado, <?php echo $nome_visitante; ?>!
</h1>
<p class="confirmacao-texto">
    Sua mensagem foi recebida. Entrarei em contato em breve.
</p>
<a href-"contato.php" class="btn"> <- Enviar outra mensagem</a>
</div>
<?php include '../include/rodape.php'; ?>
