<?php
require_once('../../config.php');

class modelLogin
{

    private $user;
    private $passw;


    public function __set($atributo, $value)
    {
        $this->$atributo = $value;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function validationLogin($conexao, $dados)
    {

        $sql = 'SELECT * FROM login WHERE user = :user and passw =:senha';
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':user', $dados->__get('user'));
        $stmt->bindValue(':senha', $dados->__get('passw'));
        $stmt->execute();

        return $stmt->rowCount();
    }
}
