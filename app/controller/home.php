<?php
/**
 * Created by IntelliJ IDEA.
 * User: mikeweer
 * Date: 7-12-2015
 * Time: 13:28
 */
$home = new home();

$songs = $home->getSongs(Input::get('day'));
$days = date('d');
if($days < Input::get('day')){
    header('location:index.php?page=home&day='.$days.'');
}
$day_songs = '';

while ($current_song = $songs->fetch_assoc()) {
    $comment_amount = $home->commentsAmount($current_song['ID']);
    $day_songs .= '<section>
    <img src="img/random_Avatar.png" alt=""/>
    <div class="inside">
        <div class="header">
            <div class="num">' . $current_song['hitNr'] . '</div><p>' . $current_song['name'] . ' : ' . $current_song['artist'] . '</p>

        </div>
        ' . shortenString($current_song['description']) . '
        <div class="footer">
            <img src="img/top_cloud.png" alt=""/>
            <p><span>[' . $comment_amount . ']</span>&nbsp;|&nbsp;<a href="?page=details&id=' . $current_song['hitNr'] . '"><span>Lees meer</span></a></p>
            <div class="social">
                <img src="img/buttons/fb_icon.png" alt=""/>
                <img src="img/buttons/twitter_icon.png" alt=""/>
                <img src="img/buttons/mail_icon.png" alt=""/>
            </div>
        </div>
    </div>
</section>';
}
