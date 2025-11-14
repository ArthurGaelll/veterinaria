<?php
    session_start();
    require '../includes/conexao.php';    

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senhaHash = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (Nome, Telefone, CPF, Email, Senha)  
        VALUES (:nome, :telefone, :cpf, :email, :senha)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senhaHash);

    if ($stmt->execute()) {
        $_SESSION['usuario_nome'] = $nome;
        $_SESSION['usuario_email'] = $email;

        header("Location: ../cadastro_sucesso.php");
        exit;
    } else {
        echo "Erro ao cadastrar usuário.";
}
?>


    
    