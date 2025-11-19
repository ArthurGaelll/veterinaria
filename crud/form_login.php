<?php
session_start();
require_once __DIR__ . '/../includes/conexao.php';

// validação básica
if (!isset($_POST['email'], $_POST['senha'])) {
    header('Location: ../login_falha.php');
    exit;
}

$email = $_POST['email'];
$senhaDigitada = $_POST['senha'];

// Busca com nomes corretos
$sql = "SELECT 
            ID_usuario AS id, 
            Nome AS nome, 
            Email AS email, 
            Senha AS senha
        FROM usuario
        WHERE Email = :email
        LIMIT 1";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario && password_verify($senhaDigitada, $usuario['senha'])) {

    // Login OK
    session_regenerate_id(true);
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['nome'];
    $_SESSION['usuario_email'] = $usuario['email'];

    header('Location: ../dashboard_cliente.php');
    exit;
}

// Login inválido
header('Location: ../login_falha.php');
exit;




