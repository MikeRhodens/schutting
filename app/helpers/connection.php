<?php
class Connection
{
    private static $instance;
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new mysqli(
                Config::get('mysqli/host'),
                Config::get('mysqli/username'),
                Config::get('mysqli/password'),
                Config::get('mysqli/db_name')
            );
        }
        mysqli_set_charset(self::$instance,'utf8');
        if (self::$instance->connect_error) {
            die("Unable to connect to database");
        }
        return self::$instance;
    }
}
