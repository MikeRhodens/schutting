<?php
function unlock()
{
    $date = date("d");
    $days = 0;
    $day_array = [
        $active = [],
        $current = [],
        $not_active = []
    ];

    while ($days < 30) {
        if ($days < $date) {
            array_push($day_array[0], '<a href=\""')
            echo "<a href=\"?action=" . $days . "\">" . $days . "</a><br>";
        } else {
            echo $days . "<br>";
        }
        $days = $days + 1;
    }
}