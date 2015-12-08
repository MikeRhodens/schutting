<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/6/2015
 * Time: 5:49 PM
 */
$ajax = new details();
if (Input::get('ajax')) {
    if (Input::get('name') &&
        Input::get('email') &&
        Input::get('website') &&
        Input::get('comment') &&
        Input::get('id')
    ) {

        $sendEmails = 0;
        if (Input::get('checkboxSendEmails')) {
            $sendEmails = 1;
        }
        if (!filter_var(Input::get('email'))) {
            echo '-1';
            die();
        }
        $currentDate = date("Y-m-d H:i:s");
        $ajax->addComment(Input::get('id'), Input::get('name'), Input::get('email'), Input::get('website'), Input::get('comment'), $sendEmails, $currentDate);
        echo '1';
        die();
    } else {
        echo '0';
        die();
    }
}
