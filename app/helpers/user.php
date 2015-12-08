<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/7/2015
 * Time: 9:42 PM
 */

class user{

    static $instance = null;
    public function redirectTo($siteToRedirect)
    {
        header("Location: index.php?page=" . $siteToRedirect . "");
    }

    public static function getInstance()
    {
        if(self::$instance === null)
        {
            self::$instance =  new self();
        }

        return self::$instance;
    }



}