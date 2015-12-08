<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/8/2015
 * Time: 1:33 PM
 */


class header{

    private $db;

    public function __construct(){
        $this->db = connection::getInstance();
    }

    public function returnSearchResult($key){
        $query = "SELECT * FROM songs WHERE name LIKE '%{$key}%' OR artist LIKE '%{$key}%'";
        $result = $this->db->query($query);
        return $result;
    }
    public function resultsExist($key){
        $query = "SELECT * FROM songs WHERE name LIKE '%{$key}%' OR artist LIKE '%{$key}%'";
        $result = $this->db->query($query)->num_rows;
        return $result;
    }


}