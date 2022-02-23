<?php


use Doctrine\DBAL\DriverManager;

class Connection
{
    protected array $params = [
        'dbname' => 'registry',
        'user' => 'root',
//        'password' => 'secret',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    ];

    protected function connect()
    {
//        try {
//            $username = "root";
//            $password = '';
//            $dbh = new PDO('mysql:host=localhost;dbname=registry', $username, $password);
//            return $dbh;
//        } catch (PDOException $e) {
//            print "Error!: ". $e->getMessage(). "<br/>";
//            die();
//        }

        return DriverManager::getConnection($this->params);
    }
}
