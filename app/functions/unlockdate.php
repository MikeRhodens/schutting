<?php
function get_days()
{
    $date = date("d");
    $days = 0;
    $days_array = [];

    while ($days < 24) {
        if ($days < $date) {
            array_push($days_array, '<div class="past"><p>' . $days . '</p></div>');
        } else if ($days == $date) {
            array_push($days_array, '<div class="correct"><p>' . $days . '</p></div>');
        } else {
            array_push($days_array, '<div class="upcomming"><p>' . $days . '</p></div>');
        }
        $days = $days + 1;
    }
    return $days_array;
}