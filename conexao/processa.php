<?php
    require "./inserir.php";

    $email = $_POST['email'];
    $nome = $_POST['nome'];

    if (empty($email) or empty($nome)) {
        
        $_SESSION['mensagem'] = "Preencha todos os campos!";
        header("Location: ../index.php");

    }else {
        salvarDados($email ,$nome,);
    }
    
?>