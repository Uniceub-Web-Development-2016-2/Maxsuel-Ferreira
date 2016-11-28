<?php

include_once('httpful.phar');

if(isset($_POST['name']) &&  isset($_POST['email']) &&
    isset($_POST['generated']) && isset($_POST['datanasc'])){

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $datanasc = $_POST['datanasc'];


    /*
    if(validaEmail($email)){
        header('location: ../home.php?pagina=cadastro&msg=6');
        die;
    }
    */
    $register_array = array('usuario' => $usuario, 'nome' => $nome, 'senha' => $senha, 'email' => $email, 'genero' => $genero, 'datanasc' => $datanasc);
    $body = json_encode($register_array);
    $url = "http://localhost/Trabalho/Servidor";

    $response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();
    $array = json_decode($response->body, true);
    if(!empty($array)){

        header('Location: ../home.php?pagina=cadastro&msg=5');

    }
    else{

        header('Location: ../home.php?pagina=cadastro&msg=2');
    }
}
?>