/**
 * Created by Artur on 11/27/2015.
 */


var quotesSmall = [
    "Het is de dynamische text1",
    "Het is andere bericht",
    "Het is een leuke bericht",
    "Het is een grappige bericht",
    "Ranom informatie",
    "Jaja wel live",
    "Tour door Pool gewonnen",
    "Wie gaat het winnen",
    "Luister je mee?",
    "Alles wat je nodig hebt"
];
var quotesBig = [

    "Het is de dynamische text1text1text1text1",
    "Het is andere berichtberichtbericht",
    "Het is een leuke berichtberichtbericht",
    "Het is een grappige berichtberichtbericht",
    "Ranom informatieinformatieinformatieinformatie",
    "Jaja wel livelivelivelivelivelivelivelivelive",
    "Tour door Pool gewonnengewonnengewonnengewonnen",
    "Wie gaat het winnenwinnenwinnenwinnenwinnen",
    "Luister je meemeemeemeemeemeemeemeemeemee?",
    "Alles wat je nodig hebthebthebthebthebthebthebt"
];


setInterval(function() {
    $("#smallDynamic p").fadeOut(1000, function () {
        var a = Math.random() + ""
        var rand1 = a.charAt(5)
        var quote = quotesSmall[rand1]

        $('#smallDynamic p').text(quote).fadeIn(2000);

    })
},1000)
setInterval(function() {
    $("#bigDynamic p").fadeOut(1000, function () {
        var a = Math.random() + ""
        var rand1 = a.charAt(5)
        var quote = quotesBig[rand1]

        $('#bigDynamic p').text(quote).fadeIn(2000);

    })
},1000)
