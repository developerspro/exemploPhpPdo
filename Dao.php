<?php

class Dao
{

    private $dsn;
    private $user;
    private $passwd;
    private $pdo;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=exemplo";
        $this->user = "root";
        $this->passwd = "";
        try {
            $this->pdo = new PDO($this->dsn, $this->user, $this->passwd);
        } catch (Exception $e) {
            echo "erro ao conectar no banco de dados ";
        }
    }

    public function verificarLogin($user, $passwd)
    {
        $stmt = $this->pdo->query("select * from login where user=$user and password=$passwd");
        $login = $stmt->fetch();
        if ($login) {
            if ($user == $login['user'] && $passwd == $login['password']) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }

    public function cadastrar($user,$passwd){
        $stmt = $this->pdo->prepare("INSERT INTO login (user, password) VALUES (:usuario, :passwd)");
        $stmt->bindParam(':usuario', $user);
        $stmt->bindParam(':passwd', $passwd);
        try{
            $stmt->execute();
            return 1;
        }
        catch(PDOException $e){
           return 0;
        }
        
    }
}
