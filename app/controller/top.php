<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/1/2015
 * Time: 10:45 PM
 */
$top100 = new topList();
$result = $top100->returnTop();
$display = "";
$number = 1;


if ($result) {
    foreach ($result as $each) {
        if ($number < 26) {
            $number++;
            $display .= '<div class="rootContainer">
                        <div  class="numbers plus" style="">' . $each['id'] . '</div>
                            <p class="title">'.$each['artist']. '-' . $each['name'] . '</p>
                        </div>';
        } else {
            $display .= '<div class="rootContainer">
                        <div  class="numbers minus" style="">' . $each['id'] . '</div>
                            <p class="title">'.$each['artist']. '-' . $each['name'] . '</p>
                        </div>';
        }
    }
}