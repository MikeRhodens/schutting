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
function convertDateToString($day){
    $months = [
        "00" => 'none',
        '01' => 'january',
        '02' => 'february',
        '03' => 'march',
        '04' => 'april',
        '05' => 'may',
        '06' => 'june',
        '07' => 'july',
        '08' => 'augustus',
        '09' => 'september',
        '10' => 'october',
        '11' => 'november',
        '12' => 'december'
    ] ;
    return ucfirst($months[$day]);
}

function createTrueTimeDate($timeDate){
    $splitDateTime = explode(' ', $timeDate, 2);
    $day = explode('-', $splitDateTime[0], 3);
    $hour = explode(':', $splitDateTime[1], 3);
    $currentMonthString = convertDateToString($day[1]);
    return $day[2] . ' ' . $currentMonthString . ' ' . $day[0] . ' ' . $hour[0] . ':' . $hour[1];
}