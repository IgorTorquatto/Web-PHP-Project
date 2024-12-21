<?php
//Iniciar Sessão
session_start();

//Verificar Formulário
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Valores enviados
    $email = filter_input(INPUT_POST,'inputEmail',FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST,'inputPassword',FILTER_SANITIZE_STRING);
    $assunto = filter_input(INPUT_POST,'inputAssunto',FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST,'inputMessage',FILTER_SANITIZE_STRING);

    //Validação básica
    $errors = [];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[] = "O e-mail informado é inválido.";
    }

    if(empty($password)){
        $errors[] = "O campo da senha está vazio.";
    }

    if (empty($assunto)) {
        $errors[] = "O campo Assunto está vazio.";
    }

    if (empty($mensagem)) {
        $errors[] = "O campo Mensagem está vazio.";
    }

    //Se existem erros vamos apresentá-los
    if(!empty($errors)){
        echo "<h2>Erros encontrados pelo back-end:</h2>";
        echo "<ul>";
        foreach ($errors as $erro){
            echo "<li>". $erro . "</li>";
        }
        echo "</ul>";
    }else{
    //Senão existem erros vamos redirecionar o usuário para outra página

        //Salvar dados do usuário na sessão
        $_SESSION['dados'] = [
            'email' => $email,
            'password' => $password,
            'assunto' => $assunto,
            'mensagem' => $mensagem,
        ];

        header('Location: mensagens.php');
        exit;
    }
}else{
    //Formulário não enviado, redirecionamento
    header("Location: index.html");
    exit;
}