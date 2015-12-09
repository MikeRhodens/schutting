<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/9/2015
 * Time: 2:00 PM
 */

$testimonial = new testimonials();
$members = $testimonial->getTestimonials();
$viewMembers = "";

while($row = $members->fetch_object()){
    $viewMembers .= '<section>
    <img class="shadow" src="'. $row->img .'" alt=""/>
    <div class="inside">
        <div class="header">
            <p class="testimonials">' . $row->name . ' '. $row->lastname .'</p>

        </div>
        '. $row->content .'
        <div class="footer">
            <img src="img/top_cloud.png" alt=""/>
            <p><span>[2]</span>&nbsp;|&nbsp;<a href=""><span>Lees meer</span></a></p>
            <div class="social">
                <img src="img/buttons/fb_icon.png" alt=""/>
                <img src="img/buttons/twitter_icon.png" alt=""/>
                <img src="img/buttons/mail_icon.png" alt=""/>
            </div>
        </div>
    </div>
</section>';
}