<?php
/**
* ARQUIVO: projetos.php
* Disciplina: Desenvolvimento Web II (2026-DWII)
* Autor: Spencer Cenko
* Descrição: Lista PÚBLICA de projetos lidos do banco via PDO; Adaptada de 05_crud/index.php -
* sem autenticação e sem botões de editar/excluir.
 */


if (session_status() === PHP_SESSION_NONE) session_start();

$pagina_atual = 'projetos';
$titulo_pagina = 'Projetos | Portfólio DWII';
$nome = "Spencer Cenko";
$caminho_raiz = './';

require_once __DIR__ . '/includes/conexao.php';

$pdo = conectar();
// ANTES — pega tudo
// $stmt = $pdo->query('SELECT * FROM projetos ORDER BY criado_em DESC');

// DEPOIS — filtra pelo status
// Só projetos com status = 'publicado' aparecem ao visitante.
// Rascunhos (recém-criados) e arquivados (soft-deleted) ficam fora.
$stmt = $pdo->query(
    "SELECT * FROM projetos
       WHERE status = 'publicado'
       ORDER BY criado_em DESC"
);
$projetos = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include __DIR__ . '/includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h1 class="titulo-secao" style="margin: 0;">Projetos</h1>
            <?php if (!empty($projetos)): ?>
                <span style="color: #6b7280; font-size: 14px;">
                    <?php echo count($projetos); ?> projeto(s)
            </span>
            <?php endif; ?>
        </div>
    <?php if (empty($projetos)): ?>
        <div class="card" style="text-align: center; padding: 40px 20px; color: #6b7280;">
            <p style="font-size: 16px; margin: 0;">Nenhum projeto cadastrado ainda.</p>
        </div>
        <?php else: ?>
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
                <?php foreach ($projetos as $projeto): ?>
                    <div class="card">
                        <h3 style="margin: 0 0 8px; color: #3b579d; font-size: 17px;">
                            <?php echo htmlspecialchars($projeto['nome']); ?>
                        </h3>

                        <p style="margin: 0 0 10px; font-size: 14px; color: #374151; line-height: 1.6;">
                            <?php echo htmlspecialchars($projeto['descricao']); ?>
                        </p>


                        <p style="margin: 0 0 6px; font-size: 13px; color: #6b7280;">
                            <?php echo htmlspecialchars($projeto['tecnologias']); ?>
                        </p>

                        <p style="margin: 0 0 12px; font-size: 13px; color: #6b7280;">
                            <?php echo (int) $projeto['ano']; ?>
                        </p>

                        <?php if ($projeto['link_github']): ?>
                        <a href="<?php echo htmlspecialchars($projeto['link_github']); ?>"
                        target ="_blank" rel="noopener noreferrer" class="btn-secundario">
                    Ver no GitHub</a>
                    <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
            </div>
            <?php endif; ?>
    </div>
<?php include __DIR__ . '/includes/rodape.php'; ?>
</body>
</html>