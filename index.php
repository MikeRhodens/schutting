<?php
require 'app/core/init.php';
require 'app/views/header.php';
require 'app/views/sidebar.php';
require 'app/views/content.php';
switch_include::getInstance()->getPage(Input::get('page'));
require 'app/views/footer.php';

/*$this1 = connection::getInstance()->query("SELECT * FROM songs");
$filename = 'test.txt';
$contents = file($filename);
$array = [];
foreach($contents as $line) {
    $array[] = explode('–',$line,2);
    $array[] = 1;
}
$new_array=[];
foreach($array as $value) {
   $new_value = array_push($value,'1');
    $new_array[]= $new_value;
   //connection::getInstance()->query("INSERT INTO songs(`name`,`artist`) VALUES ('$value[0]','$value[1]')");

}
var_dump($array);*/
