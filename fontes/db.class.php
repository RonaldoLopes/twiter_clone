<?php
class db{
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';

    private $database = 'twitter_clone';

    public function conecta_mysql(){
       
       $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        //ajusta o charset da comunicacao
        mysqli_set_charset($con, 'utf8');

        //veriricar se houve erro de conexão
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar ao banco: ' .mysqli_connect_error();
        }

        return $con;
    }
}
?>