<?php
class db{
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';

    private $database = 'twitter_clone';

    public function conecta_mysql(){
        mysqli_connect($host, $usuario, $senha);
    }
}
?>