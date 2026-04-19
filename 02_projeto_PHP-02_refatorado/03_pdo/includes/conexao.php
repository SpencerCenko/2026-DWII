<?php
/**
 * includes/conexao.php
 * Arquivo de conexao PDO - incluir em qualquer página que use o banco
 */

$host = '127.0.0.1';
$db = 'dwii_db';
//MARIADB_DATABASE
$user = 'dwii_user';
$pass = 'dwii2026';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;sslmode=disabled";

$opcoes = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Erros sql viram exceções
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Resultado como array associativo
    PDO::ATTR_EMULATE_PREPARES => false, // Prepared statements reais do banco
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opcoes);
} catch (PDOException $e) {
    die('Erro de conexão com o banco de dados. Verifique o servidor.');

}
?>