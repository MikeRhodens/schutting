<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/1/2015
 * Time: 10:40 PM
 */

class topList{
    private $connection;

    public function __construct(){
        $this->connection = connection::getInstance();
    }

    public function returnTop(){
        $data = $this->connection->query("SELECT id,name,artist FROM songs");
        return $data
                ? $data
                : false;
    }
}