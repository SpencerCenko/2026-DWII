<?php
$pagina_atual = "Perfil";
require_once __DIR__ . '/includes/auth.php';
requer_login();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagina_atual?></title>
    <?php require_once __DIR__ . '/../includes/cabecalho.php'; ?>
</head>
<body>
    <main>
        <p id="perfil">
        Nome do Usuário: <?php echo htmlspecialchars($_SESSION['usuario']); ?>
        </p>
        <p id="perfil">
        Senha:  <?php echo htmlspecialchars($_SESSION['senha']); ?>
        </p>
        <p id="perfil">
        Data de Login: <?php echo htmlspecialchars($_SESSION['logado_em']); ?>
         </p>
        <p style="margin-top: 24px; text-align:center;">
            <a href="painel.php"
            style="background: #cf1c21; color:white; padding:10px 24px;
            border-radius: 6px; text-decoration: none; font-weight:bold">
            Sair
        </a>
        </p>
    </main>
</body>
<?php require_once __DIR__ . '/../includes/rodape.php'; ?>
</html>