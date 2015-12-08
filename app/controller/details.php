<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/5/2015
 * Time: 11:35 AM
 */
$detail = new details();
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
} else {

    user::getInstance()->redirectTo('home');
    die();
}