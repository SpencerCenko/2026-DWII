<?php
/**
 * 
 * Arquivo: includes/nav.php
 * Disciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 04 -- PHP para Web: Formulários, GET e POST
 * Autor: Spencer Cenko
 * Conceitos: Menu dinâmico, operador ternário, $caminho_raiz
 * 
 * Mesmo padrão do nav.php da Aula 03, com duas melhorias:
 * 1. Links montados via $caminho_raiz -> funciona de qualquer pasta
 * 2. Classe CSS "ativo" em vez de style inline -> CSS externo controla
 * 
 * Variáveis esperadas:
 * $página_atual -- string: identifica qual item destacar no menu
 * $caminho_raiz -- string: caminho relativo até a raiz
 */
// Valores padrão: evita erro se a página esquecer de declarar
$caminho_projeto = "02_projeto_PHP-02_refatorado/";
if (!isset($pagina_atual)) $pagina_atual = "";
if (!isset($caminho_raiz)) $caminho_raiz = "./";

/**
 * menu_class() -- retorna 'class="ativo"' se o item corresponde
 * à página atual, ou '' caso contrário
 * Substitui os quatro operadores ternários repetidos da Aula 03
 * por uma função reutilizável - menos código, mesma lógica.
 */
function menu_class(string $item, string $atual): string {
    return ($item === $atual) ? 'class="ativo"' : '';
}
$logado = isset($_SESSION['usuario']);
?>
<!-- nav usa a classe CSS definida em style.css -- sem style inline -->

 <nav>
    <!-- Links para o portfólio -- Aula 03 -->
     <a href="<?php echo $caminho_raiz; ?>index2.php"
     <?php echo menu_class("Inicio", $pagina_atual); ?>>
Inicio
  <a href="<?php echo $caminho_raiz ?>index.php"
 <?php echo menu_class("Apresentacao", $pagina_atual); ?>>
 Apresentação
</a>
</a>
<a href="<?php echo $caminho_raiz; ?>sobre.php"
    <?php echo menu_class("sobre", $pagina_atual); ?>>
Sobre
</a>
<a href="<?php echo $caminho_raiz; ?>projetos.php"
    <?php echo menu_class("Projetos", $pagina_atual); ?>>
Projetos
</a>
<!-- Link para o formulário -- Aula 04 -->
 <a href="<?php echo $caminho_raiz ?>contato.php"
 <?php echo menu_class("Contato", $pagina_atual); ?>>
 Contato
</a>
 <a href="<?php echo $caminho_raiz ?>catalogo.php"
 <?php echo menu_class("Catalogo", $pagina_atual); ?>>
 Catálogo
</a>
  <a href="<?php echo $caminho_raiz ?>04_sessoes/publico.php"
 <?php echo menu_class("Publico", $pagina_atual); ?>>
 Público
</a>
  <?php if ($logado): ?>
    <a href="<?php echo $caminho_raiz; ?>04_sessoes/painel.php"
       <?php echo menu_class('painel', $pagina_atual); ?>>
      Painel
    </a>
    <a href="<?php echo $caminho_raiz; ?>04_sessoes/logout.php">
      Sair
    </a>
        <a href="<?php echo $caminho_raiz; ?>admin.php"
       <?php echo menu_class('admin', $pagina_atual); ?>>
      Painel admin
    </a>

  <?php else: ?>
    <a href="<?php echo $caminho_raiz; ?>04_sessoes/login.php"
       <?php echo menu_class('login', $pagina_atual); ?>>
      Login
  </a>
      <?php endif; ?>
</nav>


<link rel="stylesheet" type="text/css" href="<?php echo $caminho_raiz ?>includes/style.css"/>