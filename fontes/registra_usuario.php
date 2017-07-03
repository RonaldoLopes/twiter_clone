<?php

    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $objdb = new db();
    $link = $objdb->conecta_mysql();

    //$sql = " insert into usuarios(usuario, email, senha) VALUES('$usuario','$email','$senha')"

    //executar a query
    if(mysqli_query($link, "INSERT INTO usuarios(usuario, email, senha) VALUES('$usuario','$email','$senha')")){
        echo('Registrado com sucesso');
    }else{
        echo('Erro');
    }

?>