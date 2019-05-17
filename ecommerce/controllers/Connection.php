<?php
class Connection{
    $dbhost = "localhost";
    $dbuser = "app";
    $dbpass = $_ENV['DB_PASSWORD'];
    static public function open()
    {
        
    }
}