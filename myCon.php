<?php
class myCon {
    public static function getCon() {
        $host = 'sql6.freesqldatabase.com';
        $database = 'sql6631689';
        $username = 'sql6631689';
        $password = 'dqiZgHiEHL';

        $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";

        try {
            $con = new PDO($dsn, $username, $password);
            return $con;
        } catch (PDOException $e) {
            throw new Exception('Connection failed: ' . $e->getMessage());
        }
    }
}
?>
