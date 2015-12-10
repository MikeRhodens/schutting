<?php
class Date_pagination
{
    private $mysql;
    public function __construct(){
        $this->mysql=connection::getInstance();
    }
    public function select($selected_day){
        $query = 'SELECT * FROM songs WHERE day="'.$selected_day.'"';
        $result = $this->mysql->query($query);
        return $result;
    }
}