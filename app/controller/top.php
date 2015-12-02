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
            $display .= '<div style="width: 100%;height: 30px;font-family: Tahoma; font-weight: bold;font-size: 11px; position: relative">
                        <div style="padding: 5px; width: 20px;height: 20px; background-color: red; text-align: center; position: absolute; left: 26px;color: #ffffff; font-family: frankin_gothic;font-size: 16px">' . $each['id'] . '</div>
                            <p style="display: inline-block; position: absolute; left: 100px; margin-top: 10px">' . $each['name'] . '</p>
                    </div>';
        } else {
            $display .= '<div style="width: 100%;height: 30px;font-family: Tahoma; font-weight: bold;font-size: 11px; position: relative">
                        <div style="padding: 5px; width: 20px;height: 20px; background-color: #B3B3B3; text-align: center; position: absolute; left: 26px;color: #ffffff; font-family: frankin_gothic;font-size: 16px">' . $each['id'] . '</div>
                            <p style="display: inline-block; position: absolute; left: 100px; margin-top: 10px">' . $each['name'] . '</p>
                    </div>';
        }
    }
}