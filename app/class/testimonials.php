<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/9/2015
 * Time: 1:58 PM
 */

class Testimonials{

    private $connection;

    public function __construct(){
        $this->connection = connection::getInstance();
    }

    public function getTestimonials(){
        $query = "SELECT * FROM testimonials";
        $data = $this->connection->query($query);
        return $data;
    }


}