/**
 * Created by Artur on 12/8/2015.
 */

$(document).ready(function () {
    var buttonSearch = $('#submitSearch');


    buttonSearch.click(function(){
        var searchWord = $('#inputSearch').val();
        $.get('index.php', {
                ajax: 2,
                phrase: searchWord
            },
            function (returnedData) {
                if(returnedData != "-1" && returnedData != "-2" && returnedData != "-3"){
                    var objects =  JSON.parse(returnedData);
                    $('#left').fadeOut(500).html('');
                    $.each(objects,function(k,object){
                        $('#left').append('' +
                        '<section>' +
                        ' <img src="img/random_Avatar.png" alt=""/>' +
                        ' <div class="inside"> <div class="header">' +
                        ' <div class="num">'+ object.hitNr +'</div>' +
                        ' <p>'+ object.name + ' : '+ object.artist +'</p> ' +
                        ' </div>'+ object.description.substring(0,270) +'' +
                        ' <div class="footer"> <img src="img/top_cloud.png" alt=""/>' +
                        ' <p><span>[2]</span>&nbsp;|&nbsp;<a href=""><span>Lees meer</span></a>' +
                        ' </p> <div class="social"> <img src="img/buttons/fb_icon.png" alt=""/>' +
                        ' <img src="img/buttons/twitter_icon.png" alt=""/>' +
                        ' <img src="img/buttons/mail_icon.png" alt=""/>' +
                        ' </div> </div> </div>' +
                        ' </section>')

                    })
                }else{
                    switch (returnedData){
                        case "-1":
                            $.notify("Veld moet worden ingevoeld", "error");
                            break;
                        case "-2":
                            $.notify("Uw zoekbericht moet minimaal uit 3 characters bestaan", "error");
                            break;
                        case "-3":
                            $.notify("Geen zoekresultaat gevonden", "error");
                            break;
                    }
                }

            })

    })


});