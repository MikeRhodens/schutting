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
$number = 0;
$position = [
    $leeg = [],
    $pos1 = [1, 4, 8, 10, 19, 22, 26, 28, 37, 40, 44, 46, 55, 58, 62, 64, 83, 86, 90, 92],
    $pos2 = [5, 12, 16, 23, 30, 34, 41, 48, 52, 59, 66, 70, 73, 77, 80, 87, 94, 98],
    $pos3 = [3, 6, 9, 11, 13, 15, 18, 21, 24, 29, 31, 33, 36, 39, 42, 47, 49, 51, 54, 57, 60, 65, 67, 69, 72, 74, 76, 79, 82, 85, 88, 93, 95, 97, 100],
    $pos4 = [2, 7, 14, 17, 20, 25, 25, 32, 35, 38, 43, 45, 50, 53, 56, 56, 61, 63, 68, 71, 75, 78, 81, 84, 89, 91, 96, 99]
];

$c = (100- getSongsOnDay());

if ($result) {
    foreach ($result as $each) {
        if ($number < $c) {
            $number++;
            if(in_array($number,$pos1)){
                $current_pos = 1;
            }elseif(in_array($number,$pos2)){
                $current_pos = 2;
            }elseif(in_array($number,$pos3)) {
                $current_pos = 3;
            }else{
                $current_pos = 4;
            }

            $block = '<div class="rootContainer">
                        <div  class="numbers plus pos'.$current_pos.'" style="">' . $each['id'] . '</div>
                            <a href="index.php?page=details&id='. $each['id'] .'"><p class="title">' . $each['artist'] . '-' . $each['name'] . '</p></a>
                        </div>';

            $display .= $block;
        } else {
            $number++;
            if(in_array($number,$pos1)){
                $current_pos = 1;
            }elseif(in_array($number,$pos2)){
                $current_pos = 2;
            }elseif(in_array($number,$pos3)) {
                $current_pos = 3;
            }else{
                $current_pos = 4;
            }

            $block = '<div class="rootContainer">
                        <div  class="numbers minus pos'.$current_pos.'" style="">' . $each['id'] . '</div>
                            <a href=index.php?page=details&id='. $each['id'] .'"><p class="title">' . $each['artist'] . '-' . $each['name'] . '</p></a>
                        </div>';
            $display .= $block;
        }

    }
}
?>
