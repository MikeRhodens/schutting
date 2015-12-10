/**
 * Created by Artur on 12/9/2015.
 */
$(document).ready(function(){
    $('#sendAnswer').click(function(){

        alert('xD');
        $.get('index.php', {
                ajax: 3,
                name: $('#senderName').val(),
                email: $('#emailSender').val(),
                answer: $('#answerSender').val()
            },
            function (returnedData) {
                if(returnedData == "-1") {
                    $.notify("Alle velden moeten worden ingevoeld", "error");
                }else if(returnedData == "-3"){
                    $.notify("Uw E-mail adres is niet correct", "error");
                }else if (returnedData == "-2"){
                    $.notify("Uw naam moet minimaal uit 3 karakters bestaan, uw antwoord van 5", "error");

                }else{
                    $.notify("Uw bericht werd verzonden", "success");
                    $('#senderName').val('')
                    $('#emailSender').val('')
                    $('#answerSender').val('')
                }
            })
    })
})