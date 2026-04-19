<?php
include __DIR__ . '/includes/cabecalho.php';
$pagina_atual  = 'inicio';
$caminho_raiz  = './';
$titulo_pagina = 'Portfólio — Spencer Cenko';

// ── 3. Dados de apresentação ─────────────────────────────────

$nome      = 'Spencer Cenko';
$descricao = 'Estudante de Técnico em Informática no IFPR, '
           . 'apaixonado por desenvolvimento web e tecnologia. '
           . 'Este portfólio documenta minha jornada de aprendizado '
           . 'ao longo da disciplina de Desenvolvimento Web II.';
$email     = '20241ctb0100028@escola.ifpr.edu.br';
?>

<!DOCTYPE html>

<html lang="pt-BR">
<head>



</head>
<body>

  <main>
    <section class="apresentacao">

  <!-- Foto de perfil -->
  <div class="foto-container">
    <img
      src="<?php echo $caminho_raiz; ?>00_apresentacao/imgs/foto.jpg"
      alt="Foto de <?php echo htmlspecialchars($nome); ?>"
      class="foto-perfil">
  </div>

  <!-- Bloco de texto + cards informativos -->
  <div class="texto-container">

    <h2>
      Olá, eu sou <?php echo htmlspecialchars($nome); ?>! 👋
    </h2>

    <?php
    ?>
    <p><?php echo htmlspecialchars($descricao); ?></p>

    <div class="info-cards">

      <div class="info-card">
        <span class="card-icon">🎓</span>
        <span class="card-texto">Técnico em Informática — IFPR CRPG</span>
      </div>

      <div class="info-card">
        <span class="card-icon">💻</span>
        <span class="card-texto">Desenvolvimento Web II — 2026</span>
      </div>

      <div class="info-card">
        <span class="card-icon">📧</span>
        <span class="card-texto">
          <?php echo htmlspecialchars($email); ?>
        </span>
      </div>

    </div><!-- /info-cards -->

  </div><!-- /texto-container -->

</section>

  </main>

  <?php include __DIR__ . '/includes/rodape.php'; ?>

</body>
</html>