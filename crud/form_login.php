<?php 
        session_start();    
        include_once '../includes/conexao.php';

        $email = $_POST['email'];
        $senhaDigitada = $_POST['senha']; // senha pura digitada

        // Busca apenas pelo email
        $sql = "SELECT * FROM usuario WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verifica se o usuário existe
        if ($usuario && password_verify($senhaDigitada, $usuario['Senha'])) {

                // Login OK
                 $_SESSION['usuario_id'] = $usuario['ID'] ?? $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['Nome'];
                $_SESSION['usuario_email'] = $usuario['Email'];

                header('Location: ../dashboard_cliente.php');
                exit;
}

        // Login inválido
        header('Location: ../login_falha.php');
        exit;
?>






