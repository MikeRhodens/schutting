<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/5/2015
 * Time: 11:35 AM
 */
$detail = new details();

if(Input::get("id") < (100-getSongsOnDay())){
    header('location:index.php?page=details&id='.(100-getSongsOnDay()+1).'');
};
if (Input::get("id") && $detail->doDetailExist()) {
    $answer = "";
    $items = $detail->this_objects;
    $songTopNr = $items->hitNr;
    $songTitle = $items->artist;
    $songWriter = $items->name;
    $description = $items->description;
    $video = $items->video;
    $answers = $detail->getComments();
    $answersAmount = $detail->answersAmount;
    while ($row = $answers->fetch_assoc()) {
        $date = createTrueTimeDate($row['date_written']);
        $answer .= '<div class="reactionPlace">
                                <b>' . $row['name'] . '</b><br/>
                                <span class="dateWritten">' . $date . '</span>
                                <p>' . $row['reaction'] . '</p>
                                <b class="raport"><a href="">Waarschuw de redactie over deze</a></b>
                                <div class="horizontal_dotted_line2"></div>
                </div>';
    }


    $plusMinNames = $detail->getNames($songTopNr);
    $plus = $plusMinNames->fetch_assoc();
    $min = $plusMinNames->fetch_assoc();
    $mintext = '';
    $plustext = '';
    if ($songTopNr == 100) {
        $plustext .= '    <div id="last"></div>';
    } else {
        $plustext .= '<div id="last">
        <div class="smallNumber"> ' . $plus['hitNr'] . '</div>
        <a href="?page=details&id=' . $plus['hitNr'] . '">' . $plus['name'] . ' - ' . $plus['artist'] . '</a>
    </div>';
    }
    $amountOfSongs = (100 - getSongsOnDay());
    if ($songTopNr <= $amountOfSongs + 1) {
        $mintext .= '<div id="upcoming"></div>';
    } else {
        $mintext .= ' <div id="upcoming">
        <div class="smallNumber">' . $min['hitNr'] . '</div>
        <a href="?page=details&id=' . $min['hitNr'] . '">' . $min['name'] . ' - ' . $min['artist'] . '</a>
    </div>';
    }


} else {

    user::getInstance()->redirectTo('home');
    die();
}