<?php 

require_once "Dao.php";

$dao = new Dao();
$user = $_POST["user"];
$passwd = $_POST["password"];

$retorno  = $dao->cadastrar($user,$passwd);

if($retorno ==1){
echo "usuario cadastrado";
} else { 
    echo "erro ao cadastrar usuario";
}


?>

<a href="index.php">Login</a>