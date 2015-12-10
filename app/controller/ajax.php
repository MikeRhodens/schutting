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
                $Phrase = Input::get('phrase');
                if(strlen($Phrase) >= 3){
                    if($header->resultsExist($Phrase)){
                        $rows = array();
                        foreach($header->returnSearchResult($Phrase) as $row){
                            $rows[] = $row;
                        }
                        print json_encode($rows);
                    }else{
                        echo '-3';
                        die();
                    }
                }else{
                    echo '-2';
                    die();
                }
                    die();
            }else{
                echo '-1';
                die();
            }
            break;
        case '3':
            if(Input::get('name') && Input::get('email') && Input::get('answer')){
                $name = Input::get('name');
                $antwoord = Input::get('answer');
                $email = Input::get('email');
                if(strlen($name) >= 3  && strlen($antwoord) >= 5){
                    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                        connection::getInstance()->query("INSERT INTO winprice(email,name,antwoord) VALUES ('". $email ."','". $name ."','". $antwoord ."')");
                        echo '1';
                        die();
                    }else{
                        echo '-3';
                        die();
                    }
                }else {
                    echo '-2';
                    die();
                }
            }else{
                echo '-1';
                die();
            }
            break;
        die();
    }

}
