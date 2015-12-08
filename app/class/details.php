<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/5/2015
 * Time: 11:37 AM
 */

class details{
    private $db;
    public $this_objects;
    public $topicId;
    public $answersAmount;
    public function __construct(){
        $this->db = connection::getInstance();
        $this->commentsAmount();
    }

    public function doDetailExist(){
        $query = "SELECT * FROM songs WHERE id = ".Input::get('id')."";
        $request = $this->db->query($query);
        if($request->num_rows == 1){
            $this->this_objects = $object = $request->fetch_object();
            $this->topicId = Input::get('id');
            return true;
        }
        return false;
    }
    public function getComments(){
        $query = "SELECT date_written,name,reaction FROM comments WHERE id_song = ".Input::get('id')." ORDER BY ID DESC";
        $result = $this->db->query($query);
        return $result;
    }
    private function commentsAmount(){
        if(Input::get('page') == "details"){
            $query = "SELECT * FROM comments WHERE id_song = ".Input::get('id')."";
            $this->answersAmount = $this->db->query($query)->num_rows;

        }

    }
    public function addComment($id_song,$name,$email,$website,$reaction,$receveEmail,$dateWritten){
        $this->db->query("INSERT INTO comments (id_song,name,email,website,reaction,send_repeat,date_written) VALUES ('". $id_song."','". $name."','". $email."','". $website."','". $reaction."','".$receveEmail."','".$dateWritten."')");
    }
}