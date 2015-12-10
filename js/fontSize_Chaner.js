/**
 * Created by Artur on 11/27/2015.
 */
$(document).ready(function () {
    if($.cookie('fontSize')){
        switch ($.cookie('fontSize'))
        {
            case "small":
                $.cookie('fontSize','small');
                $('#reallySmall').addClass('correct');
                $('body').css( "font-size", "0.62em" );
                break;

            case "medium":
                $.cookie('fontSize','medium');
                $('#Medium').addClass('correct');
                $('body').css( "font-size", "1em" );

                break;

            case "big":
                $.cookie('fontSize','big');
                $('#Big').addClass('correct');
                $('body').css( "font-size", "1.68em" );
                break;
        }
    }else{
        $('#Medium').addClass('correct');
        $.cookie('fontSize','medium');
    }
    $('#reallySmall').click(function(){
        $('#fontChanger').children().removeClass("correct");
        $( this ).css( "color", "#07B4E7" );
        $('body').css( "font-size", "0.62em" );
        $(this).addClass('correct');
        $.cookie('fontSize','small');
    })
    $('#Medium').click(function(){
        $('#fontChanger').children().removeClass("correct");
        $('body').css( "font-size", "1em" );
        $(this).addClass('correct');
        $.cookie('fontSize','medium');

    })
    $('#Big').click(function(){
        $('#fontChanger').children().removeClass("correct");
        $('body').css( "font-size", "1.68em" );
        $(this).addClass('correct');
        $.cookie('fontSize','big');


    })
})
