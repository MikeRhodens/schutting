<?php
function get_days()
{
    $date = date("d");
    $days = 2;
    $days_array = [];

    while ($days < 25) {
        if ($days < $date) {
            array_push($days_array, '<div class="past"><a href=""><p>' . $days . '</p></a></div>');
        } else if ($days == $date) {
            array_push($days_array, '<div class="correct"><a href=""><p>' . $days . '</p></a></div>');
        } else {
            array_push($days_array, '<div class="upcomming"><p>' . $days . '</p></div>');
        }
        $days = $days + 1;
    }
    return $days_array;
}