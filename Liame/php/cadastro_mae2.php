<?php
    session_start();
    include ('conexao.php');
//variavel da sessao
    $nome_mae = $_POST["nome_mae"];
    $apelido_mae = $_POST["apelido_mae"];
    $email_mae = $_POST['email_mae'];
    $senha_mae = $_POST['senha_mae'];
    $confirmarsenha_mae = $_POST['confirmarsenha_mae'];



//Para ver se está entrando dos os dados da sessão
    echo "ver se a sessão está funcionado</br>
    nome: " . $nome_mae . "</br>
    apelido: " . $apelido_mae . "</br>
    email: " . $email_mae . "</br>
    senha: " . $senha_mae . "</br>
    confirmar senha: " . $confirmarsenha_mae . "</br></br></br>";




// validacao da senha
    if($confirmarsenha_mae == $senha_mae){
        //checando se o email ja existe
        $user_check_query = "SELECT * FROM mae WHERE email_mae = '$email_mae'";
        $resultado = mysqli_query($link, $user_check_query);
        $conta = mysqli_num_rows($resultado);
        if($conta>=1){
                echo "Esse email já está em uso";
        }else{
            //criptografar senha
            $senha_criptografada_mae = md5($senha_mae);

            echo "senha criptografada </br>". $senha_criptografada_mae . "</br></br>";

            //inserir no banco de dados
            $query = 'INSERT INTO mae (nome_mae, apelido_mae, email_mae, senha_mae) VALUES ("'.$nome_mae.'", "'.$apelido_mae.'", "'.$email_mae.'", "'.$senha_criptografada_mae.'")';
            
            echo "saber se o insert está funcionado</br>".$query."</br></br>";
            
            $inserir = mysqli_query($link, $query);
            if($inserir==TRUE){
                echo "Cadastrado com sucesso";
            }else{
                echo "Erro ao cadastrar";
            }
        }
    }else{
        echo "Senhas precisam ser iguais";
    }     
    //session_destroy();   
?>