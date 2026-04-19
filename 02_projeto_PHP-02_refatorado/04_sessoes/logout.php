<?php
/**
 * Disciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 06 -- Autenticação com sessões e controle de acesso
 * Arquivo: 04_sessoes/logout.php
 * Autor: Spencer Cenko
 * Data: 23/03/2026
 */
session_start();

// 1. Limpar todos os dados da sessão
session_unset();

//2. Destruit a sessão no servidor
session_destroy();

header('Location: login.php');
exit;
?>