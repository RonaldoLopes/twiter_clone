<?php
    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios  WHERE usuario = '$usuario' AND senha = '$senha'";

    $objdb = new db();
    $link = $objdb->conecta_mysql();

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['usuario'])){
            echo 'tem usuario';
        }else{
            header('Location: index.php?erro=1');
        }
    }else{
        echo 'Errou de novo';
    }

    
?>