<?php
    require '../includes/conexao.php';    

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuario (Nome, Telefone, CPF, Email, Senha)  VALUES (:nome, :telefone, :cpf, :email, :senha)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    if ($stmt->execute()) {
        // Redireciona para a página de sucesso (que está fora da pasta /crud)
        header("Location: ../cadastro_sucesso.php");
        exit;
    } else {
        echo "Erro ao cadastrar usuário.";
}
    

?>    
    
    
    