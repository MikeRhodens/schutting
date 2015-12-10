<?php
require 'app/controller/details.php';
?>
    <script src="js/detail_addMessage.js"></script>
<div id="detailsHeader">
<?php echo $mintext ?>
    <div id="correct">
        <div id="number"><?php echo $songTopNr ?></div>
        <p> <?php echo $songWriter. '-'. $songTitle ?></p></div>
    <?php echo $plustext ?>
</div>



<div id="videoHolder">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $video ?>?rel=0&amp;showinfo=0"
                frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="DetailsContent">
        <p>
            <?php echo $description ?>
        </p>

        <div class="social">
            <img src="img/buttons/fb_icon.png" alt=""/>
            <img src="img/buttons/twitter_icon.png" alt=""/>
            <img src="img/buttons/mail_icon.png" alt=""/>
        </div>
    </div>
    <div class="smallDescHeaders">
        Reageer op dit bericht
        <div class="horizontal_dotted_line"></div>
    </div>
    <div id="addComment">
            <b>Name:</b><br>
            <input type="text" id="senderName"/><br>
            <b>E-mail:</b><br>
            <input type="text" id="emailSender"/><br>
            <b>Website:</b><br>
            <input type="text" id="websiteSender"/><br>
            <b>Reactie:</b><br>
            <textarea id="commentSender"></textarea><br>
            <input type="checkbox" id="checkboxRemember"/><b>Gegevens onthouden</b><br>
            <input type="checkbox" id="sendInfo"/><b>Mail mij bij nieuwe reacties</b>
            <input class="defaultButton" value="VERSTUUR" type="submit" id="sendMessage"/>
    </div>
    <script>

    </script>
<div class="smallDescHeaders">
    Reacties op dit bericht [<?php echo  '<span id="sendedMsg">' . $answersAmount . '</span>' ?>]
    <div class="horizontal_dotted_line"></div>
</div>
<div id="answer">
    <style>
        #paginationPlacement{
            width: 100%;
            text-align: center;
            display: inline-block;
            font-size: 11px;
            text-decoration: none;
            font-family: Tahoma;
            font-weight: bold;
            position: relative;
            margin-top: 120px;
        }
        .paginationNum{
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #ffde00;
            text-decoration: none;
            display: inline-block;
            margin-left: 3px;
        }
        .currentPaginationNr{
         background-color: transparent;
            border: 1px solid red;
            display: inline-block;
            padding-left: 8px;
            padding-right: 8px;
            padding-top: 4px;
            padding-bottom: 4px;
            margin-left: 3px;
        }
        #paginationPlacement a{
            text-decoration: none;
            color: #000000;
        }
        #paginationPlacement #next{
            position: absolute;
            right: 0;
            top: 3px
        }
        #paginationPlacement #previous{
            position: absolute;
            left: 0;
            top: 3px;
        }
    </style>
<?php

echo $answer;
echo '<div id="paginationPlacement">';
echo $navigation;
echo '</div>'
?>


</div>


