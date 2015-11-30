/**
 * Created by Artur on 11/27/2015.
 */
$(document).ready(function () {
    $('#reallySmall').click(function(){
        $('#fontChanger span').css( "color", "#b3b3b3" );
        $( this ).css( "color", "#07B4E7" );
        $('body').css( "font-size", "0.62em" );
        $('footer').css( "padding-top", "10px" );

    })
    $('#Medium').click(function(){
        $('#fontChanger span').css( "color", "#b3b3b3" );

        $( this ).css( "color", "#07B4E7" );
        $('body').css( "font-size", "1em" );
        //$('footer').css( "padding-top", "10px" );
    })
    $('#Big').click(function(){
        $('#fontChanger span').css( "color", "#b3b3b3" );

        $( this ).css( "color", "#07B4E7" );
        $('body').css( "font-size", "1.68em" );
        $('footer').css( "padding-top", "0px" );


    })
})
