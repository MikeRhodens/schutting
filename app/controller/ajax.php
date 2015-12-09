<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 12/6/2015
 * Time: 5:49 PM
 */
$details = new details();
$header = new header();
if (Input::get('ajax')) {
    switch (Input::get('ajax')) {
        case '1':
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
                $details->addComment(Input::get('id'), Input::get('name'), Input::get('email'), Input::get('website'), Input::get('comment'), $sendEmails, $currentDate);
                echo '1';
                die();
            } else {
                echo '0';
                die();
            }
            break;
        case '2':
            if(Input::get('phrase')){
                echo Input::get('phrase');
                die();
            }else{
                echo '-1';
                die();
            }
            break;
    }

}
