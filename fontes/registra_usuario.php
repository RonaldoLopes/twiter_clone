<?php

    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $sql = " insert into usuarios(usuario, email, senha) VALUES('$usuario','$email','$senha')"

    //executar a query
    mysqli_query($link, $sql);

?>