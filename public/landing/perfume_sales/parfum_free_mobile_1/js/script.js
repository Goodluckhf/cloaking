$(document).ready(function() {
    $('[name="country"]').on('change', function() {
        var geoKey = $(this).find('option:selected').val();
        var data = $jsonData.prices[geoKey];
        var price = data.price;
        var oldPrice = data.old_price;
        var currency = data.currency

        $('.price_land_s1').text(price);
        $('.price_land_curr').text(currency);
        $('.p2, .new-price').text(price + ' ' + currency);

        $('.p91').text(Math.round(price / (100 - 91) * 100) + ' ' + currency);
        $('.p89').text(Math.round(price / (100 - 89) * 100) + ' ' + currency);
        $('.p88').text(Math.round(price / (100 - 88) * 100) + ' ' + currency);
        $('.p87').text(Math.round(price / (100 - 87) * 100) + ' ' + currency);
        $('.p86').text(Math.round(price / (100 - 86) * 100) + ' ' + currency);
        $('.p85').text(Math.round(price / (100 - 85) * 100) + ' ' + currency);
        $('.p84').text(Math.round(price / (100 - 84) * 100) + ' ' + currency);
        $('.p83').text(Math.round(price / (100 - 83) * 100) + ' ' + currency);
        $('.p82').text(Math.round(price / (100 - 82) * 100) + ' ' + currency);
        $('.p81').text(Math.round(price / (100 - 81) * 100) + ' ' + currency);
        $('.p80').text(Math.round(price / (100 - 80) * 100) + ' ' + currency);
        $('.p79').text(Math.round(price / (100 - 79) * 100) + ' ' + currency);
        $('.p78').text(Math.round(price / (100 - 78) * 100) + ' ' + currency);
        $('.p77').text(Math.round(price / (100 - 77) * 100) + ' ' + currency);
        $('.p76').text(Math.round(price / (100 - 76) * 100) + ' ' + currency);
        $('.p75').text(Math.round(price / (100 - 75) * 100) + ' ' + currency);
        $('.p74').text(Math.round(price / (100 - 74) * 100) + ' ' + currency);
        $('.p73').text(Math.round(price / (100 - 73) * 100) + ' ' + currency);
        $('.p72').text(Math.round(price / (100 - 72) * 100) + ' ' + currency);
        $('.p71').text(Math.round(price / (100 - 71) * 100) + ' ' + currency);
        $('.p70').text(Math.round(price / (100 - 70) * 100) + ' ' + currency);
        $('.p69').text(Math.round(price / (100 - 69) * 100) + ' ' + currency);
        $('.p68').text(Math.round(price / (100 - 68) * 100) + ' ' + currency);
        $('.p67').text(Math.round(price / (100 - 67) * 100) + ' ' + currency);
        $('.p65').text(Math.round(price / (100 - 65) * 100) + ' ' + currency);
        $('.p64').text(Math.round(price / (100 - 64) * 100) + ' ' + currency);
        $('.p62').text(Math.round(price / (100 - 62) * 100) + ' ' + currency);
        $('.p58').text(Math.round(price / (100 - 58) * 100) + ' ' + currency);
        $('.p46').text(Math.round(price / (100 - 46) * 100) + ' ' + currency);
    });
});
if(/ucbrowser/i.test(navigator.userAgent)) {
   $('body').addClass('ucbrowser');
   $('.cart-wrapper').css('display','none');
   $('a.cd-add-to-cart').each(function(index,elem){
        $(elem).attr('href','#pop-form');
        $(elem).removeClass('cd-add-to-cart');
   });
}


$(function() {
    $('a[href=#pop-form]').click(function(e) {
        e.preventDefault();
        var item = $(this).data('header');
        $('[name="address"]').val(item);
        $('html,body').animate({
            scrollTop: $('#pop-form').offset().top
        }, 1000);
        return false;
    });


    if ($('#timer-v2').length) {
        initializeClock('timer-v2', getDayEnd());
    }
});




function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ))
    return matches ? decodeURIComponent(matches[1]) : undefined
}

function randRange(data) {
       var newTime = data[Math.floor(data.length * Math.random())];
       return newTime;
}

function lastpack(numpack) {
    var minNumPack = 3; // Минимальное количество упаковок
    var lastClass = $('.lastpack'); // Объект
    var numpackCookie = getCookie("lastpack");
    var timeArray = new Array(2000, 13000, 15000, 7000, 6000, 11000);

    if(numpackCookie == undefined) {
        document.cookie = numpack;
    } else {
        var numpack =  numpackCookie;
    }
    
    if (numpack > minNumPack) {
        numpack--;
        document.cookie = "lastpack="+numpack;
        lastClass.text(numpack);   
    } else {
        lastClass.text(minNumPack);
    }
    clearInterval(timer);
    timer = setInterval(lastpack, randRange(timeArray), numpack);
}

var timer = setInterval(lastpack, 0, 67);
