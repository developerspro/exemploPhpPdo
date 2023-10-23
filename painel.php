<?php
require_once "Layout.php";
require_once "Dao.php";

$dao = new Dao();//cria conexao com banco de dados
$layout = new Layout();// cria um objeto layout para tratar os layouts
$user = $_POST["user"];
$passwd = $_POST["password"];
$retorno = $dao->verificarLogin($user,$passwd);
echo "Retorno:".$retorno;
if($retorno ==1){
    $layout->index("content_panel");//
} else { 
    $layout->index("formulario_login");
}

