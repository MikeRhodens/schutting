    /**
 * Created by Artur on 12/6/2015.
 */
$(document).ready(function () {

    var nameSender = $('#senderName');
    var websiteSender = $('#websiteSender');
    var emailSender = $('#emailSender');
    var commentSender = $('#commentSender');
    var siteId = $('#detailsHeader').data('id')
    $("#checkboxRemember").change(function() {
        if($.cookie('name')) {
            if (!this.checked) {
                $.removeCookie('name');
                $.removeCookie('email');
                $.removeCookie('website');
                nameSender.val('');
                emailSender.val('');
                websiteSender.val('');
            }
        }
    });
    if($.cookie('name')){
        nameSender.val($.cookie('name'));
        emailSender.val($.cookie('email'));
        websiteSender.val($.cookie('website'));
        $( "#checkboxRemember" ).prop( "checked", true );
    }
    var currentDate = new Date();
    var button = $('#sendMessage');
    var checkboxSendEmails, checkboxRemember;
    button.click(function () {
        var day = currentDate.getDate();
        var month = currentDate.getMonth() + 1;
        var year = currentDate.getFullYear();
        var objDate = new Date(),
            locale = "en-us",
            month = objDate.toLocaleString(locale, { month: "long" });
        var hour = currentDate.getHours();
        var minuts = currentDate.getMinutes();
        var itemID = location.search.split('id=')[1];
        var sendMessagesAmount = $('#sendedMsg');

        if ($("#sendInfo").is(':checked'))
            checkboxSendEmails = 1;
        else
            checkboxSendEmails = 0;
        if ($("#checkboxRemember").is(':checked')){
            $.cookie('name', nameSender.val());
            $.cookie('email', emailSender.val());
            $.cookie('website', websiteSender.val());
        }else{
            $.removeCookie('name');
            $.removeCookie('email');
            $.removeCookie('website');
            $( "#checkboxRemember" ).prop( "checked", false );
        }
        $.get('index.php', {
                ajax: 1,
                id: itemID,
                name: nameSender.val(),
                email: emailSender.val(),
                website: websiteSender.val(),
                comment: commentSender.val(),
                checkboxSendEmails: checkboxSendEmails,
                checkboxRemember: checkboxRemember
            },
            function (returnedData) {
                var answer;
                switch (returnedData) {
                    case "0":
                        answer = 0;
                        break;
                    case "-1":
                        answer = -1;
                        break;
                    case "1":
                        var append = true;
                        answer = 1;
                        break;
                }
                if(append){
                    $('#answer').prepend('<div class="reactionPlace addedRightNow"><b>' + nameSender.val() +
                    '<br></b><span class="dateWritten">' + day + ' ' + month +' '+ year + ' ' + hour + ':' + minuts + '</span><p>' + commentSender.val() +
                    '</p><b class="raport"><a href="">Waarschuw de redactie over deze</a></b><div class="horizontal_dotted_line2"></div></div>');
                    $('.addedRightNow').hide().fadeIn(2000)

                    $('.reactionPlace').removeClass('addedRightNow');
                    if($('div[class=reactionPlace]').length > 2) {
                        $("#answer").children("div[class=reactionPlace]:last").detach();
                    }
                    if(!$.cookie('name')){
                        nameSender.val('');
                        emailSender.val('');
                        websiteSender.val('');
                    }
                    commentSender.val('');
                    sendMessagesAmount.html(parseInt(sendMessagesAmount.html())+1).hide().fadeIn('fast');
                    if(isEven(parseInt($(sendMessagesAmount).text()))){
                        var newValue = parseInt($("div[class=paginationNum]:last").text()) + 1;
                        $('#paginationPlacement').append('<div class="paginationNum"><a href="index.php?page=details&id='+ siteId +'&reactionPage='+newValue+'">'+ newValue +'</a></div>');
                    }else{
                        console.log('Odd');
                    }
                    $.notify("Uw bericht werd toegevoegd", "success");
                }
                if(answer == 0) {
                    $.notify("Alle velden moeten worden ingevoeld", "error");
                }else if(answer == -1){
                    $.notify("Uw E-mail adres is niet correct", "error");
                }
            })
    })
})

