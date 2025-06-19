<?php

class Conexao {
    public static function getConexao(){
        $hostname = 'localhost';
        $dbusername = 'root';
        $password = 'usbw';
        $database = 'crud';
        $conn = new mysqli($hostname, $dbusername, $password, $database);
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }
        return $conn;
    }
}