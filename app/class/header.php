<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/8/2015
 * Time: 1:33 PM
 */


class Header{

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

    public function returnHeader($page){
        $pages = [
            'home' => 'Vandaag in de Radio 1 Tour Top 100',
            'top' => 'Complete Tour Top',
            'details' => 'In de Radio 1 Tour Top 100',
            'testimonials' => 'Tour Top lijsten van BN’ers',
            'prijsvraag' => 'Prijs vraag'

        ];
        if(array_key_exists($page,$pages)){
            return $pages[$page];
        }
        return '';
    }


}