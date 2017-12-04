var cApp = {};
cApp.scrollTo = function(o) {
    o.preventDefault();
    var e = $($(this).attr("href"));
    return e.length && $("html, body").animate({
        scrollTop: e.offset().top
    }, 1e3), !1
}, $(function() {
    $(".js-scrollto").on("click", cApp.scrollTo), $(".js-reviews-carousel").owlCarousel({
        loop: !1,
        margin: 30,
        nav: !1,
        dots: !0,
        responsive: {
            0: {
                items: 1
            },
            570: {
                items: 2
            },
            990: {
                items: 3
            }
        }
    })
});

$(document).ready(function() {
    $('[name="country"]').on('change', function() {
        var geoKey = $(this).find('option:selected').val();
        var data = $jsonData.prices[geoKey];
        var price = data.price;
        var oldPrice = data.old_price;
        var currency = data.currency;
        $("[value = "+geoKey+"]").attr("selected", true).siblings().attr('selected', false);

        $('.promo-der-label__price, .s-mbret-form__price').text(price + ' ' + currency);
        $('.s-mbret-form__oldprice').text(oldPrice  + ' '  + currency);
        $('.price_land_curr').text(currency);
    });
});