<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/10/2015
 * Time: 2:53 PM
 */

class Instance{

    static $instance = null ;

    public static function getInstance()
    {
        if(self::$instance === null)
        {
            self::$instance =  new self();
        }

        return self::$instance;
    }
}