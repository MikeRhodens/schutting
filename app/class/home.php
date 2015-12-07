<?php

/**
 * Created by IntelliJ IDEA.
 * User: mikeweer
 * Date: 7-12-2015
 * Time: 13:46
 */
class home
{
    private $connection;

    public function __construct()
    {
        $this->connection = connection::getInstance();
    }

    public function getSongs($date_id)
    {
        $query = 'SELECT * FROM songs WHERE day = ' . $date_id.'';
        $data = $this->connection->query($query);
        return $data;
    }

    public function commentsAmount($id)
    {
        $query = "SELECT * FROM comments WHERE id_song = " . $id . "";
        $answersAmount = $this->connection->query($query)->num_rows;
        return $answersAmount;
    }
}

