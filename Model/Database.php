<?php

namespace Model;

// class Database
// {
//     private $connexion;
//     private $host = 'localhost';
//     private $db = 'to_list';
//     private $username = 'root';
//     private $password = '';
//     private $database = null;
// }

class Database
{

    private $connexion = null;

    public function dbConnect()
    {
        try {
            $pdo = new \PDO('mysql:host=localhost;dbname=todo_list', username: 'root', password: '');
            $this->connexion = $pdo;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $this->connexion;
    }
}
