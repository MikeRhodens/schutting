<?php
require 'app/core/init.php';
require 'app/views/header.php';
require 'app/views/sidebar.php';
require 'app/views/content.php';
switch_include::getInstance()->getPage(Input::get('page'));
require 'app/views/footer.php';
/*
$filename = 'songs.txt';
$contents = file($filename);
$array = [];
foreach($contents as $line) {
    $array[] = explode('-',$line,4);
}

foreach($array as $value) {
    connection::getInstance()->query("INSERT INTO songs(`hitNr`,`name`,`artist`,`day`) VALUES ('$value[0]','$value[1]','$value[2]','$value[3]')");
}*/
