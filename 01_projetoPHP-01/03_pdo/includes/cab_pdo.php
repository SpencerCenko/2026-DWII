<?php
/**
 * 
 * Arquivo: 03_pdo/includes/cab_pdo.php
 * Disciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 05 -- PHP + MariaDB: persistência de dados via PDO
 * Autor: Spencer Cenko
 
* Proxy local que reutiliza o cabecalho.php global da raiz
* /includes/ __DIR__ = 03_pdo/includes -> ../../includes/ = raiz/includes/
*/

if (!isset($titulo_pagina)) $titulo_pagina = "Catálogo de Tecnologias";
if (!isset($pagina_atual)) $pagina_atual = "";

$caminho_raiz = '../';

include __DIR__ . '/../../includes/cabecalho.php';
?>