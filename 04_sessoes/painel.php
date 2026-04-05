<?php 
/**
 * Disciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 06 -- Autenticação com sessões e controle de acesso
 * Arquivo: 04_sessoes/painel.php
 * Autor: Spencer Cenko
 * Data: 23/03/2026
 */
/**
 * session_start();
 * if (!isset($_SESSION['usuario'])) {
 * header('Location: login.php');
 * exit;
 * }
*/
require_once __DIR__ . '/includes/auth.php';
requer_login();
if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}
$_SESSION['visitas']++;

$titulo = 'Painel - Área Restrita';
$caminho_raiz = '../';
$pagino_atual = '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php require_once __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <div class="alerta-sucesso">
            <h3> Você está autenticado!</h3>
            <p><strong>Usuário:</strong>
            <?php echo htmlspecialchars($_SESSION['usuario']); ?>
        </p>
            <p><strong>Login realizado em:</strong>
            <?php echo htmlspecialchars($_SESSION['logado_em'] ?? '-'); ?>
        </p>
        <p><strong>Visitas:</strong>
            <?php echo htmlspecialchars($_SESSION['visitas']); ?>
        </p>
        </div>

        <div class="card">
            <h3>Painel de controle</h3>
            <p>Este conteúdo só é vísivel para usuários autenticados.
            </p>
            <p>
                Nas próximas aulas este painel terá funcionalidades reais(CRUD).
            </p>
        </div>
        <p style="margin-top: 24px; text-align:center;">
            <a href="../05_crud/index.php"
            style="background: lightblue; color:white; padding:10px 24px;
            border-radius: 6px; text-decoration: none; font-weight:bold">
            Cadastrar novo Projeto
        </a>
         <p style="margin-top: 24px; text-align:center;">
               <a href="perfil.php"
               style="background: green; color:white; padding:10px 24px;
            border-radius: 6px; text-decoration: none; font-weight:bold">
            Informações da conta
        </a>
        <p style="margin-top: 24px; text-align:center;">
            <a href="logout.php"
            style="background: #cf1c21; color:white; padding:10px 24px;
            border-radius: 6px; text-decoration: none; font-weight:bold">
            Sair
        </a>
        </p>
    </div>
    <?php require_once __DIR__ . '/../includes/rodape.php'; ?>
    
</body>
</html>