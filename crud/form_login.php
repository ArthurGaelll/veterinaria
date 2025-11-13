<?php 
    include_once '../includes/conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha ";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    $stmt->execute();

    $registros = $stmt->rowCount();

    if ($registros == 1) {
            // echo 'OK VALIDADO';
            header('Location: ../dashboard_cliente.php');
    } else {
            // echo 'NÂO VALIDADO';
            header('Location: ../login_falha.php');
    }





?>





