<?php
    function salvarDados($email, $nome) {
        session_start();
        require "./conexao.php";

        $consulta = "SELECT * FROM tbInfos WHERE email = :Email"; 
        // prepara a instrução SQL para receber uma variavel no momento de execução 
        $consulta = $conexao->prepare($consulta);
    
        // faz o vinculo entre uma variavel e uma intrução SQL
        $consulta->bindParam(':Email', $email);
    
        // executa a função 
        $consulta->execute();
    
        if ($consulta->rowCount() > 0) {
                $_SESSION['mensagem'] = "Você ja se cadastrou para receber informações!";
                header("Location: ../index.php");
        } else {
            //Cadastrando um novo
            $str_sql = "INSERT INTO tbInfos (email, nome)";
            $str_sql = $str_sql . "VALUES (:Email, :Nome)";
    
            $str_salvar = $conexao->prepare($str_sql);
            $str_salvar->bindParam(':Email', $email);
            $str_salvar->bindParam(':Nome', $nome);
           
    
            if($str_salvar->execute()){
                //Salvo com sucesso
                $_SESSION['mensagem'] = "Obrigado por se cadastrar!";
                header("Location: ../index.php");
                //echo "cadastrado com sucesso";
            }else {
                //Ocorreu um erro
                header("Location: ../index.php");
                //echo "Houve problemas!";  
            }
        } 
    }

?>