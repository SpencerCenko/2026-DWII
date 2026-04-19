<?php


$caminho_raiz = "../";

// incluir a conexão PDO
require_once 'includes/conexao.php';

// Validar o ID recebido via GET - retorna false qnd n for inteiro valido
$pdo = conectar();
$nome = htmlspecialchars($_POST['nome'] ?? '');
if ($nome === '') 
    {
    header('Location: index.php');
    exit;
    }
    else {
$stmt = $pdo->prepare('SELECT * FROM projetos where nome like :termo or descricao like :termo2');
$stmt->execute(['termo' => "%$nome%", 'termo2' => "%$nome%"]); //aparentemente tem q colocar 2 parametros, o pdo n gosta de usar o mesmo para os 2, tambem descobri q os %%
// tem q ser aq, n funciona no sql(nao sei pq)
$tec = $stmt->fetch();
if (!$tec) {
    // Registro não encontrado -- redirecionar para a lista
    header('Location: index.php');
    exit;
}

// Variáveis para o cabeçalho global
$titulo_pagina = htmlspecialchars($tec['nome']) . " - Cadastro";
$pagina_zatual = "catalogo";
/**
 * , 'descr' => "%$nome%"
 */
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body
<div class="container">

<a href="index.php" style="color: #3b579d; font-weight: bold;"> <br><-- Voltar à listagem</a>
<div class="card" style="margin-top: 20px">
    <div style="display: flex; justify-content: space-between; align-items: flex-start";>
        <h1 style="color: #3b579d; margin: 0 0 8px; font-size: 24px">
            <?php echo htmlspecialchars($tec['nome']); ?>
</h1>
<span style="background: #e8edf5; color: #3b579d; padding: 4px 12px; border-radius: 20px; font-size: 13px; font-weight: bold; white-space: nowrap;">
    <?php echo htmlspecialchars($tec['tecnologias']); ?>
</span>
</div>
<p style="font-size: 16px; margin: 16px 0;">
    <?php echo htmlspecialchars($tec['descricao']); ?>
</p>

<!-- Tabela de metadados do registro -->
 <table style="width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 14px;">
    <tr style="background: #f3f4f6;">
        <td style="padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; width: 160px;">ID</td>
        <td style="padding:10px; border: 1px solid #e5e7eb;">
            <?php echo $tec['id']; ?>
</td>
</tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; width: 160px;">Ano da criação</td>
        <td style="padding:10px; border: 1px solid #e5e7eb;">
            <?php echo $tec['ano']; ?>
</td>
</tr>
    <tr style="background: #f3f4f6;">
        <td style="padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; width: 160px;">Cadastrado em</td>
        <td style="padding:10px; border: 1px solid #e5e7eb;">
            <!-- Formatar timestamp para padrão BR -->
             <?php echo date('d/m/Y \à\s H:i', strtotime($tec['criado_em'])); ?>          
</td>
</tr>
    <tr>
        <td style="padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; width: 160px;">GitHub</td>
        <td style="padding:10px; border: 1px solid #e5e7eb;">
            <?php echo $tec['link_github']; ?>
</td>
</tr>
</table>
</div>
</div>

<!-- Rodapé global via proxy local -->
<?php require_once __DIR__ . '/../includes/rodape.php'; ?>

</body>
</html>
