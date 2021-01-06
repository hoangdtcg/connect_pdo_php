<?php


class DB
{

    static function connect(){
        $dsn = 'mysql:host=localhost;dbname=demodb';
        $user = 'root';
        $password = '';
        $conn = null;
        try {
            $conn = new PDO($dsn, $user, $password);
            echo 'success';
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return $conn;
    }

    static function closeConnect($conn){
        $conn = null;
    }
}