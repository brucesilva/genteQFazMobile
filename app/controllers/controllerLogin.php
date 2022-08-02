<?php
require_once('../models/modelLogin.php');

$user = $_POST['user'];
$passw = $_POST['passw'];

// pegando o usuário e senha e passando passando para a classe model para encapsular
$model = new modelLogin();
$model->__set('user', $user);
$model->__set('passw', $passw);


$conexao = new  modelLogin();
$validation = $conexao->validationLogin($pdo, $model);

if ($validation == 1) {
    header('location:votacao.php');
} else {
    header('location:../../index.php?v=0');
}
