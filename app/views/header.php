<?php
require 'app/controller/header.php';
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Radio 1 Tour Top 100</title>
    <script src="js/jquery.js"></script>
    <script src="js/small_dynamic.js"></script>
    <script src="js/fontSize_Chaner.js"></script>
    <script src="js/jqueryCookie.js"></script>
    <script src="js/notifyjs.js"></script>
    <script src="js/header_liveSearch.js"></script>
    <script src="js/prijsvraag_SendAnswer.js"></script>
    <link rel="shortcut icon" href="http://www.villapinedo.nl/wp-content/uploads/2013/09/radio1-png.png">
</head>
<body>
<script>
$(document).ready(function(){
    $('.upcomming').click(function(){
        var daysLeft = $(this).data('upcommingin');
        $.notify('Deze dag is over '+ daysLeft +' dagen beschrikbaar', 'warning')
    })
});
</script>
<script></script>
<div id="container">
    <header>

        <ul class="nav">
            <li><a href="#">nieuwsbrief</a></li>
            <li><a href="#">mobiel</a></li>
            <li><a href="#">contact</a></li>
            <li><a href="#">meld een fout</a></li>
            <li><a href="#">frequenties</a></li>
            <li><a href="#">help</a></li>
            <li><a href="#">rss</a></li>
        </ul>

        <a href="index.php?page=home"><img id="logo" src="img/logo.png" alt=""/></a>
        <style>

        </style>
        <div id="menuContainer">
            <h1>TOUR TOP 100</h1>

            <div id="menu">
                <div id="radioBtn"></div>
                <a href="index.php?page=top"><div id="top100Btn"></div></a>
                <div id="search">
                    <input type="text" placeholder="zoek binnen Radio 1" id="inputSearch"/>
                    <input type="submit" value="" id="submitSearch"/>
                </div>
            </div>
        </div>
        <div id="rightContent" style="margin-top: 20px">
            <div id="fontChanger">
                <span id="reallySmall">A</span>
                <span id="Medium">A</span>
                <span id="Big">A</span>
            </div>
            <img src="img/buttons/luister_live.png"/>
        </div>
    </header>
    <div id="date">
        <div id="month"></div>
        <?php
        $date_array = get_days();
        foreach($date_array as $value){
            echo $value;
        }
        ?>
        <div id="rightEnd" style="float: right"></div>
    </div>
    <div class="titlePageHeader">
        <p><?php echo $current_PageTitle ?></p>

        <div class="horizontal_dotted_line"></div>
    </div>