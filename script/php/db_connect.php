<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "database";

try {
    // Criar conexão usando PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configurar PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Conexão bem-sucedida (remova ou comente esta linha em produção)
    // echo "Conexão bem-sucedida";
} catch (PDOException $e) {
    // Logar o erro em vez de exibir
    error_log("Falha na conexão: " . $e->getMessage());
    die("Falha na conexão");
}
?>