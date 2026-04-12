<?php 
/**
 * Disciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 08 -- CRUD COMPLETO: Update
 * Arquivo: 05_crud/index.php
 * Descrição: Implementa o D do CRUD (Delete).
 *            Este arquivo tem três responsabilidades:
 *            1. Validar o ID recebido via GET
 *            2. Exibir tela de confirmação (GET)
 *            3. Processar o DELE após confirmação (POST)
 * 
 *            Regra: DELETE nunca é executaado via GET
 *            Somente um POST intencional dispara a remoção.
 * Autor: Spencer Cenko
 * Data: 30/03/2026
 */
// --- Proteção: apenas usuários autenticados ---
require_once __DIR__ . '/../04_sessoes/includes/auth.php';
requer_login();

// --- Dependências ---
require_once __DIR__ . '/includes/conexao.php';

// --- Validação do ID -- Cmada 1: formato ---
// O ID chega pela URL: editar.php?id=5
// (int) converte para inteiro -- "abc" vira 0, "5" vira 5.

$id = (int) ($_GET['id'] ?? 0);

// ID deve ser positivo -- 0 ou negativo é entrada inválida
if ($id <= 0) {
    header('Location: index.php?erro=id_invalido');
    exit;
}

// --- Validação do ID -- Camada 2: existência no banco ---
// Buscamos apenas o nome - suficiente para a tela de confirmação

$pdo = conectar();
$stmt = $pdo->prepare('SELECT nome FROM projetos WHERE id = :id');
$stmt->execute([':id' => $id]);
$projeto = $stmt->fetch();
// fetch() retorna array associativo se encontrar, ou false se não

if (!$projeto) {
    header('Location: index.php?erro=nao_encontrado');
    exit;
}

// --- Processamento do POST (DELETE) ---
// Por que POST e não GET?
// GET Pode ser acionado por bots, prefetch de navegador ou links
// em e=mails - sem interação intencional do usuário.
// POST exige submissão deliberada de formulário.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // WHERE id = :id é obrigatório
    // Sem ele, TODOS os registros da tabela seriam alterados.
    $stmt = $pdo->prepare('DELETE FROM projetos WHERE id = :id');
    $stmt->execute([':id' => $id]);

    //Padrão PRG: redireciona após o DELETE.
    header('Location: index.php?excluido=ok');
    exit;
}

// --- Variáveis para cabecalho.php ---
// Só chegamos aqui na requisição GET (exibir confirmação).
$titulo_pagina = 'Meus Projetos - Portfólio';
$caminho_raiz = '../';
$pagina_atual = '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php require_once __DIR__ . '/../includes/cabecalho.php';?>
</head>
<body>
 <div class="container">
    <h1 class="titulo-secao"> Confirmar Exclusão</h1>
    <!-- Tela de confirmação -- exibida apenas via GET -->
     <div class="card" style="max-width: 480px;">
        <p style="font-size: 16px; margin: 0 0 8px;">
            Você está prestes a excluir o projeto:
        </p>
        <p style="font-size: 18px; font-weight: bold; color: #3b579d; margin: 0 0 16px;">
            <?php echo htmlspecialchars($projeto['nome']); ?>
            <!-- htmlspecialchars() previne XSS: se o nome tiver caracteres HTML,
             eles são exibidos como texto. -->
        </p>
                <p style="font-size: 14px; color: #cf1c21; margin: 0 0 20px;">
                    Esta ação <strong> não pode ser desfeita </strong>
</p>

<!-- Formulário de confirmação
 O formulário submete via POST para este mesmo arquivo,
 mantendo O ID na URL para o block de DELETE acima. -->
 <form action="excluir.php?id=<?php echo $id; ?>" method="post">
    <div style="display: flex; gap: 12px;">
        <!-- Confirma: dispara o POST -> executa DELETE -->
         <button type="submit" class="btn-perigo"> Sim, excluir</button>
         <!-- Cancela: volta para a listagem sem alterar o banco -->
          <a href="index.php"
          class="btn-secundario"> Cancelar</a>
    </div>
 </form>
     </div>
</div>
<?php require_once __DIR__ . '/../includes/rodape.php'; ?>
</body>
</html>