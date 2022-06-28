<?php
    //data source name
    //drive - 
    $DSN = "mysql:host=bdbiovolve.cl27uitpvadv.us-east-1.rds.amazonaws.com;dbname=bdSiteBiovolve;charset=utf8";
    $usuario = "admin";
    $senha = "biovolve2022";    
    //tratamento erro 
    try {
        //classe pdo conexão
        $conexao = new PDO($DSN, $usuario, $senha);
        //echo "conectado com sucesso";
        
    } catch(PDOException $erro) {
        echo $erro-> getMessage();
        exit;
      }
?>