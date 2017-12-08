<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Распродажа духов по 99 рублей</title>
	<!-- Favicon -->
	<link rel="icon" href="{{$publicPath}}//img/products_new/2195.png" type="image/png">
	<link rel="shortcut icon" href="{{$publicPath}}//img/products_new/2195.png" type="image/png">

	<!-- OG -->
	<meta property="og:url" content="http://{{$host}}/{{$thread}}" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Распродажа духов по 99 рублей" />
	<meta property="og:image" content="{{$publicPath}}/img/products_new/2195.png" />
	<meta property="og:site_name" content="Распродажа духов по 99 рублей" />
	<meta property="og:description" content="Распродажа духов по 99 рублей" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link type="text/css" href="{{$publicPath}}/files/parfum_promo_mobile_1/css/style.css?v=4" rel="stylesheet"/>

	<!-- JS -->
	<script type="text/javascript" src="{{$publicPath}}//files/_js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="{{$publicPath}}//files/_js/ab.min.js"></script>
	<script type="text/javascript" src="{{$publicPath}}//files/_js/timer.js"></script>
	<script type="text/javascript" src="{{$publicPath}}/files/_js/validation.js"></script>
	<script type="text/javascript">$jsonData = {"product":{"id":2195,"name":"Распродажа духов по 99 рублей","title":"Распродажа духов по 99 рублей","short_description":"Распродажа духов по 99 рублей","full_description":"Распродажа духов по 99 рублей"},"prices":{"271":{"price":99,"old_price":1990,"delivery_price":0,"tax_price":0,"upsale_price":0,"geo_key":"RU","name":"Россия","currency":"руб.","rate":1,"phone_template":"+7 928 827-22-53","address_template":"135999, Москва, ул. Ленина, д.10, кв.5","name_template":"Петров Петр Петрович","active":true}},"lowPrice":{"year":"2017","month":"12","day":"10"}};	var landDir = 'parfum_promo_mobile_1';</script>
</head>
<body > <script type="text/javascript">
    var ad1_notify = new Object(),
            price, currency, delivery_price;

	for (key in $jsonData.prices) {
		if ($jsonData.prices[key].active) {
			price = $jsonData.prices[key].price;
			currency = $jsonData.prices[key].currency;
			delivery_price = $jsonData.prices[key].price + $jsonData.prices[key].delivery_price;
		}
	}

	ad1_notify.params = { 
		city			: "Ростов-на-Дону",
		landDir			: "parfum_promo_mobile_1",
		sex				: "1",
		multiply		: "" || 0,
		no_price		: "" || false,
		delay			: ("" * 1000) || 12000,
		price			: price || 0,
		currency		: currency || "руб.",
		delivery_price	: delivery_price,
		geoKey			: "RU" || "RU",
		zdorov			: "" || false
	};
</script>

<script type="text/javascript" src="{{$publicPath}}/files/_blocks/notificators/func.js?9"></script>


<script>
	var formIsSubmitted = false;
</script>




	<link type="text/css" rel="stylesheet" href="{{$publicPath}}/files/_blocks/notificators/css/buyers.css?2">
	<script type="text/javascript">$(function(){setTimeout(function(){AD1.showSaleTips();setInterval(AD1.showSaleTips, ad1_notify.params.delay)},10000)});</script>



	<link type="text/css" rel="stylesheet" href="{{$publicPath}}/files/_blocks/notificators/css/delivery.css?4">
	<script type="text/javascript">$(function(){AD1.showDeliveryPopup()});</script>





	<link type="text/css" rel="stylesheet" href="{{$publicPath}}/files/_blocks/notificators/css/visitors.css?1">
	<script type="text/javascript">$(function(){AD1.showVisitorsPanel()});</script>



	
	<link type="text/css" rel="stylesheet" href="{{$publicPath}}/files/_blocks/notificators/css/online.css?4">
	<script type="text/javascript">$(function(){AD1.showOnlineUsersPanel()});</script>
	


        	
<link rel="stylesheet" href="{{$publicPath}}/files/_blocks/callback_popup/style.css">
<script type="text/javascript" src="{{$publicPath}}/files/_blocks/callback_popup/script.js"></script>

<div id="cbkr">
    <a title="Перезвонить Вам" modal="cbkr_form">
        <div class="cbkr-circle"></div>
        <div class="cbkr-circle-fill"></div>
        <div class="cbkr-img-circle"></div>
    </a>
</div>

<div id="cbkr_form" class="modal m1modal">
    <div id="m1-form">
        <a class="close-m1 icon-close"></a>
        <div>
            <div class="popup-m1-title">
                Вам понравилось это предложение?
            </div>
            <div class="popup-m1-cont">
                <div class="popup-m1-text1">
                    Мы расскажем Вам все об этом товаре, предложим наилучшие условия и ознакомим с подходящими акционными предложениями!
                </div>
                <form action="/{{$thread}}/order" class="popup-m1-form orderformcdn" method="post">
                                           <input type="hidden" name="country" value="0">
                                        <input name="name" placeholder="Введите ваше имя" required type="text">
                    <input name="phone" placeholder="Введите телефон" required type="text">
                    <div class="errField"></div>
                    <button>Перезвоните мне</button>
                    <input type="hidden" name="address" value="">
                    <input type="hidden" name="product_count" id="product_count"  value="1">
                    <input type="hidden" name="number_product"  value="2195">
                    <input type="checkbox" checked="checked" style="position: absolute;left: -9999px; opacity: 0;">
                    
<input type="hidden" name="split_test_id" 	value="0">
<input type="hidden" name="split_test" 		value="0">
<input type="hidden" name="split_test_host" value="promo.perfume-sales.com">
<input type="hidden" name="fchck"           value="d388c38ae2893e976c0b6d95bffc4340b1e4bee2">
<input type="hidden" name="ucfi" id="ucfi"  value="0">
                </form>
                <div class="popup-m1-text2">
                    Оператор перезвонит Вам через 5-10 минут
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	var cbkr_popup = "" || false;
</script>			
    









    <link rel="stylesheet" href="{{$publicPath}}/files/_blocks/notificators/css/vk_bar.css?2">
<div id="vk_bar">
	<div id="vk_bar-container">
		<div id="vk_bar-text">Только для пользователей <ins>ВКонтакте!</ins><br> Умопомрачительные скидки!</div>
		<div id="vk_bar-timer__container">
			<span id="vk_bar-heading">До конца акции осталось:</span>
			<div id="vk_bar-timer">
				<div class="dgs hours">00</div>
				<div class="dgs minutes">00</div>
				<div class="dgs seconds">00</div>
			</div>
		</div>
		<a id="vk_bar-close" title="Закрыть">&times;</a>
	</div>
</div>
<script type="text/javascript" src="{{$publicPath}}/files/_js/timer.js"></script>
<script type="text/javascript">
	var vk_bar = {
		el: '#vk_bar',
		pos: '1' || 'top',
		close: function() {
			$(this.el).remove();
		}
	}

	$(function() {
		initializeClock('vk_bar-timer', dayEndTimestamp);

		$('#vk_bar-close').on('click', function(){
			vk_bar.close();
		});
	});
</script>

                                                                                                                                                                                                                                                       
      <script>
   try {
     var geoKey = 271;
   } catch(e) {
      console.log(e);
   }
</script>
      <div class="page">
         <header>
            <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/main.jpg" alt="">
            <p style="font-weight: bold; color:red; font-size:1.4em; text-align: center;">Любой брендовый парфюм за <span class="price_land_s1">99</span> <span class="price_land_curr">руб.</span>* при заказе комлекта</p>
         </header>
         <div class="timer-land">
            <h2 class="title">Распродажа закрывается через:</h2>
            <div class="timer-container" id="land-time">
               <span>00</span>:<span class="hours">00</span>:<span class="minutes">00</span>:<span class="seconds">00</span>
            </div>
            <div class="time-labels">
               <span class="time-label">Дней</span>
               <span class="time-label">Часов</span>
               <span class="time-label">Минут</span>
               <span class="time-label">Секунд</span>
            </div>
            <p class="quantity">Осталось <span class="lastpack">67</span> флаконов</p>
         </div>
         <div class="shop">
            <div id="female">
                        <div class="item">
               <h2 value=14380 class="title">Cacharel NOA Perle  30ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/1.jpg" alt=''>
               <ul class="item_list">
                  Noa - новый ориентир для наших духовных поисков. Героиня Noa знает, что мы в силах изменить привычный ход вещей, придать своей жизни смысл и сделать мир лучше. Этот аромат воплощает мудрость, спокойствие и надежду. Noa - это имя, символизирующее совершенное слияние мужского и женского начала, инь и янь, которое лежит в основе всего сущего. Сегодня Noa от Cacharel - это еще и название недавно открытой звезды. Флакон аромата имеет форму шара и напоминает нам планету. Внутри флакона находится жемчужина, символ женственности и тайны жизни. Парфюмерная композиция Noa, объединяющая в себе нежность пиона и насыщенность редких пород дерева, несет в себе заряд мира и спокойствия. Ноты головы: кориандр, сочетание растительных нот, альдегиды. Ноты сердца: пион, перец. Ноты шлейфа: белый мускус, ладан, кофе, бензойная смола.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 016 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="1" data-image="/files/parfum_promo_mobile_1/img/1.jpg" data-header="Cacharel NOA Perle  30ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Carolina Herrera Chiс 30ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/2.jpg" alt=''>
               <ul class="item_list">
                  Оригинальный и вызывающий воспоминания баланс между тонкой свежестью и устойчивой чувственностью. Относящийся к древесно-мускусному семейству цветочных ароматов, Carolina Herrera Chic был создан для женщины, которая обожает импровизацию и не боится грядущих изменений, потому что она живет сегодняшним днем.
                                        
                                        
                                    
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 771 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="2" data-image="/files/parfum_promo_mobile_1/img/2.jpg" data-header="Carolina Herrera Chiс 30ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Cacharel Scarlett  woman edT 30ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/3.jpg" alt=''>
               <ul class="item_list">
                  Cacharel Scarlett (Кашарель Скарлет) – это известная туалетная вода, что была выпущена домом Cacharel в 2009 году. Этот аромат разрабатывали три гениальных парфюмера Honorine Blanc, Alberto Morillas и Olivier.

Несмотря на то, что нежность и покладистость женщины всегда считали достоинством, воля и сила характера притягивает не менее сильно. Поэтому аромат Cacharel Scarlett был выпущен для возвышения необычной красоты, и посвящался девушке из книги «Унесенные ветром» Скарлетт О’Хара
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 846 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="3" data-image="/files/parfum_promo_mobile_1/img/3.jpg" data-header="Cacharel Scarlett  woman edT 30ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Chanel Coco Mademoiselle 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/4.jpg" alt=''>
               <ul class="item_list">
                  Вся суть смелой, свободной женщины. Женственный восточный аромат с характером, однако поражающий своей свежестью.

Восточный аромат с характером, однако поражающий своей свежестью. 

Искристая прохлада апельсинового начала пробуждает все органы чувств. Светлое, обольстительное сердце наполнено прозрачным жасмином и майской розой. Чистые нотки пачулей и ветивера создают длинный шлейф, подчеркивающий стройность всей композиции.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 798 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="4" data-image="/files/parfum_promo_mobile_1/img/4.jpg" data-header="Chanel Coco Mademoiselle 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Chanel №5 Parfum 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/5.jpg" alt=''>
               <ul class="item_list">
                  N°5, самая суть женственности. 

Пудрово-цветочный букет, легенда, неподвластная времени. Духи – это самая драгоценная, самая завершенная форма аромата, которая создается с использованием самых благородных парфюмерных материалов. Духи подчеркнуто великолепны в своем минималистском флаконе, вручную запечатанном бодрюшем и увенчанном пробкой, ограненной как бриллиант.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 152 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="5" data-image="/files/parfum_promo_mobile_1/img/5.jpg" data-header="Chanel №5 Parfum 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Dior J`adore Live is Gold 30ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/6.jpg" alt=''>
               <ul class="item_list">
                  Christian Dior «Jadore La vie est en Or Limited Edition» сочетает в себе нежный цветочный аромат, способный поднять настроение и приворожить. Модный Дом Dior выпустил уникальный аромат, женская туалетная вода Jador Life is Gold. Восхитительный аромат-золото внутри и снаружи. Свежий, яркий, женственный, сексуальный — он будет вашим лучшим украшением и в скучные будни и на светском вечере.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 822 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="6" data-image="/files/parfum_promo_mobile_1/img/6.jpg" data-header="Dior J`adore Live is Gold 30ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Dior Poison Hypnotic 100ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/7.jpg" alt=''>
               <ul class="item_list">
                  Таинственность и гипноз, экстравагантность и очарование - все это Hypnotic Poison, волшебный эликсир нашего времени. Восхитительно яркий и женственный аромат - это гармония противоположностей
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 819 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="7" data-image="/files/parfum_promo_mobile_1/img/7.jpg" data-header="Dior Poison Hypnotic 100ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Davidoff Cool Water 30 ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/8.jpg" alt=''>
               <ul class="item_list">
                  Созданный в 1997 году аромат Davidoff Cool Water Woman стал классикой и воплощением женственности и естественности. Прохлада тумана и росы, энергия жизни, сила природы. Водная свежесть дополнена нотами цитруса, лилии, жасмина, персика и сандала. Cool Water - аромат первозданной красоты, чувственности и элегантности. Аромат волн, плещущихся у берега... Аромат лесного ручья и первого весеннего ливня... Легкость белых облаков, плывущих по небу... Cool Water - это чистота и гармония. Ноты аромата: цитрус, айва, черная смородина, ананас, нектар, цветы лотоса, водяная лилия, роза, жасмин, ландыш, корень фиалки, ветивер, сандал, персик, шелковица, янтарь.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 837 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="8" data-image="/files/parfum_promo_mobile_1/img/8.jpg" data-header="Davidoff Cool Water 30 ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Dolce &Gabbana Light Blue 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/9.jpg" alt=''>
               <ul class="item_list">
                  Этот аромат посвящен чувственным Богиням Средиземноморья, а любим женщинами всех возрастов во многих странах мира. Один из популярнейших ароматов на российском рынке. Мгновенно овладевающий вами, неотразимый как сама радость жизни! Импульсивная и яркая композиция сделала туалетную воду Dolce & Gabbana Light Blue постоянным бестселлером парфюмерного рынка. Бархатная упаковка небесно-голубого цвета, матовый флакон создают ощущение фирменной утонченной роскоши от Мастеров Моды! Классификация аромата: фруктовый, цветочный. Верхние ноты: сицилианский лимон, колокольчики, зеленые яблоки сорта Гренни Смит. Ноты сердца: жасмин, бамбук, белая роза. Ноты шлейфа: кедр, амбра, мускус. Ключевые слова: нежный, искрящийся, энергичный, очаровывающий, оптимистичный, чувственный!


               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 040 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="9" data-image="/files/parfum_promo_mobile_1/img/9.jpg" data-header="Dolce &Gabbana Light Blue 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Estee Lauder Beautiful  Духи 15ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/10.jpg" alt=''>
               <ul class="item_list">
                  Букет из тысячи цветов. Нежный букет из лилий, роз, календулы и флердоранжа, согретый богатой древесной основой и разбавленный яркой цитрусовой ноткой.Романтичный, нежный, незабываемый. Тип аромата: Цветочный Головные ноты: Роза, мандарин, лилия, тубероза, календула Срединные ноты: Флердоранж, ландыш, жасмин, иланг-иланг Базовые ноты: Сандаловое дерево, ветивер, амбра
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 052 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="10" data-image="/files/parfum_promo_mobile_1/img/10.jpg" data-header="Estee Lauder Beautiful  Духи 15ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Givenchy Ange ou Demon 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/11.jpg" alt=''>
               <ul class="item_list">
                  Аромат Ange ou Demon представляет собой настоящую ДНК GIVENCHY – французский стиль, элегантный шик, игривую спонтанность и истинно аристократическую душу. Аромат помещен в бутылочку, напоминающую волшебный кристалл, который светлеет от горлышка к основанию и украшен капельками. Роскошный Восточный - Цветочный. Хрупкий и величественный. Контраст цветочных и древесных нот. Верхние ноты: белый тимьян, мандарин из Калабрии, шафран. Средние ноты: орхидея максиллария, иланг-иланг. Нижние ноты: бобы тонка, ваниль,палисандровое дерево, древесина дуба.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 004 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="11" data-image="/files/parfum_promo_mobile_1/img/11.jpg" data-header="Givenchy Ange ou Demon 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Givenchy Oblique FFWD 2x20 ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/12.jpg" alt=''>
               <ul class="item_list">
                  это молодежный унисекс аромат, созданный в 2000 году. Такой парфюм придется по вкусу оригинальным людям, которые предпочитают не следовать устаревшим правилам, а жить, следуя собственным стремлениям и желаниям. Fast Forward – это аромат удовольствия, бодрый и тонизирующий, дарящий энергию и азартное настроение.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 870 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="12" data-image="/files/parfum_promo_mobile_1/img/12.jpg" data-header="Givenchy Oblique FFWD 2x20 ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Gucci Flora by Gucci 30ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/13.jpg" alt=''>
               <ul class="item_list">
                  Бесподобно женственный и глубоко чувственный, Flora by Gucci создан на игре контрастов. Как предполагает его название, аромат основан на цветочных нотах, одновременно являясь необычным и завораживающим. Сложность этого аромата заложена в его сердце, рожденном в союзе розы и цветка османтуса, редкого и нежного растения из Китая. Их комбинация звучит чувственно и изысканно, предлагая необычный взгляд на цветочную парфюмерную композицию. Свежесть цитрусовых и пеон использованы в верхних нотах для создания чувственного звучания юности. Их сладковатые оттенки смягчены базовым аккордом сандалового дерева и пачули, фирменными нотами парфюмерного мира Gucci.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 756 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="13" data-image="/files/parfum_promo_mobile_1/img/13.jpg" data-header="Gucci Flora by Gucci 30ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Giorgio Armani Acqua di Gio 35ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/14.jpg" alt=''>
               <ul class="item_list">
                  Мужчина Acqua di Gio пребывает в гармонии с природой и самим собой. Аромат, вобравший в себя всю энергию моря, придает ему силу и энергию. Этот аромат передает буйство морской стихии, он немного "соленый", как воды Средиземного моря, в нем так же слышны ноты бергамота, хурмы, мускуса, пачули и кедра.

Acqua di Gio pour homme - самый продаваемый мужской аромат в мире.

Знаете ли Вы, что... Основным источником вдохновения при создании аромата Acqua di Gio pour Homme послужило северное побережье острова Пантеллерия - дикий, скалистый, открытый всем ветрам край, где волны разбиваются о высокий каменистый берег. Это место, в котором Море и Солнце (символы жизни и энергии) сливаются воедино.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 879 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="14" data-image="/files/parfum_promo_mobile_1/img/14.jpg" data-header="Giorgio Armani Acqua di Gio 35ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Guy Laroche J`ai Ose 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/15.jpg" alt=''>
               <ul class="item_list">
                  Guy Laroche J'ai Ose это поистине качество, проверенное временем. Данный парфюм, созданный еще в далеком 1977 году, и на сегодняшний день остается востребованным и актуальным для женщин всего мира, умеющих ценить изысканность и стиль. Одна из основных особенностей, которым обладает туалетная вода J’ai Ose легкий аромат востока, сочетающийся с изысканным цветочным оттенком.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 837 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="15" data-image="/files/parfum_promo_mobile_1/img/15.jpg" data-header="Guy Laroche J`ai Ose 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Lanvin Eclat d`Arpege 50 ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/16.jpg" alt=''>
               <ul class="item_list">
                  Парфюм Eclat D'Arpege от LANVIN — это симфония цветочного аромата, представленного в изумительных восточных аккордах. Интенсивный запах сирени и распустившихся цветочных бутонов напоминает о весеннем пробуждении природы.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 176 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="16" data-image="/files/parfum_promo_mobile_1/img/16.jpg" data-header="Lanvin Eclat d`Arpege 50 ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Max Mara Le Parfum 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/17.jpg" alt=''>
               <ul class="item_list">
                  Чарующий женский аромат Max Mara Le Parfum впервые увидел свет в 2007 году. Создательницей этого парфюмерного шедевра стала известная и очень талантливая женщина-парфюмер Дафна Бугей. В этом удивительном аромате гармонично сочетается между собой строгость безупречно скроенного мужского костюма, а также нежность, элегантность, романтичность и чувственность женского платья из тонкого шёлка...
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 184 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="17" data-image="/files/parfum_promo_mobile_1/img/17.jpg" data-header="Max Mara Le Parfum 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Moschino Cheap & Chic Light Clouds 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/18.jpg" alt=''>
               <ul class="item_list">
                  Женский цветочный аромат Light Clouds от MOSCHINO приносит чувство легкости и позитива. Впервые он был представлен публике в 2009 году. Букет сочетает в себе сладость белых цветов со свежестью зелени. Туалетная вода предназначена для позитивных и мечтательных натур, которые постоянно пребывают в движении. Она подходит для нерабочего времени суток, когда хочется создать романтичный и непосредственный образ, пойти на свидание или отдохнуть на природе.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 792 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="18" data-image="/files/parfum_promo_mobile_1/img/18.jpg" data-header="Moschino Cheap & Chic Light Clouds 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Salvatore Ferragamo F By Ferragamo 30ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/19.jpg" alt=''>
               <ul class="item_list">
                  В композиции аромата F by Ferragamo Pour Homme гармонично сочетаются невероятная сила и чарующая нежность, соблазнительная мужественность и утонченность. Яркая, чувственная композиция аромата создана на основе бархатистого, древесного аккорда, дополненного нотами яблока, черного перца и амбры.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 831 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="19" data-image="/files/parfum_promo_mobile_1/img/19.jpg" data-header="Salvatore Ferragamo F By Ferragamo 30ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Valentino Rock`n Rose Pret-A-Porter 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/20.jpg" alt=''>
               <ul class="item_list">
                  Вдохновленная чувственным запахом розы, цветочно-зеленая композиция «Рок энд Роуз Прет-а-Порте» выкроена по лекалам элегантной свежести и манящей женственности, которыми пропитаны все коллекции одежды марки Валентино Гаравани. В ее состав по-прежнему входят ноты бергамота, черной смородины, хрустящей зелени, розы, гардении, флердоранжа, ландыша, ванили, мускуса, сандала, ириса, сандала и гелиотропа.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 092 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="20" data-image="/files/parfum_promo_mobile_1/img/20.jpg" data-header="Valentino Rock`n Rose Pret-A-Porter 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        </div>
            <h1 class="main-title">Ароматы для мужчин</h1>
            <div id="male">
                        <div class="item">
               <h2 value=14380 class="title">Alfred Dunhill Fresh 50 ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/21.jpg" alt=''>
               <ul class="item_list">
                  Dunhill Fresh - аромат для сильных духом мужчин, всегда верных себе и живущих в гармонии с окружающим миром. Бодрящие, чистые, свежие зеленые ноты смешиваются с мужским ароматом и смягчаются нотками кедра, кожи, янтаря и пачули.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 112 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="22" data-image="/files/parfum_promo_mobile_1/img/man/21.jpg" data-header="Alfred Dunhill Fresh 50 ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Burberry Touch  30 ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/22.jpg" alt=''>
               <ul class="item_list">
                  Фруктовый динамичный аромат калифорнийского апельсина, черной смородины, ежевики и нежного розового масла

Свежие верхние ноты соблазнительного жасмина, белой лилии и туберозы с тонким оттенком персика и малины

Кедровое дерево, дубовый мох и ваниль дополняют фруктовые ноты, добавляя в букет мягкую теплоту
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 080 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="23" data-image="/files/parfum_promo_mobile_1/img/man/22.jpg" data-header="Burberry Touch  30 ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Chanel Allure Homme Sport Eau Extreme  50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/23.jpg" alt=''>
               <ul class="item_list">
                  Стиль, не имеющий границ. Аромат, насыщенный энергией. Пряно-мускусная композиция, зовущая к преодолению себя.

Пряно-мускусный аромат с мощными, динамичными нотками.

Свежие игристые ноты итальянского мандарина в сочетании с зелеными хвойными нотами марокканского кипариса несут в себе стремительный импульс специй. Благодаря теплым миндальным аккордам венесуэльских бобов тонка набирают силу мускусные ноты, которые окутывают своим неотступным шлейфом.

Концентрированная парфюмированная вода. Аромат, как прилив адреналина.

Парфюмированная вода наносится широким движением на одежду или прямо на кожу и придает им насыщенный аромат. Она содержит еще более высокую концентрацию благородных парфюмерных компонентов, что делает ее характер более выдержанным и ярким. 

Усилить аромат в течение всего дня позволит полная гамма средств для бритья и тела.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 810 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="24" data-image="/files/parfum_promo_mobile_1/img/man/23.jpg" data-header="Chanel Allure Homme Sport Eau Extreme  50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">C.Dior Fahrenheit 50 ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/24.jpg" alt=''>
               <ul class="item_list">
                  Fahrenheit Parfum, новая концентрация. Гармония противоположностей в сочетании силы и утонченности. Аромат облачен в яркий и чувственный аккорд, объединяющий в себе ноты Фиалки и Кожи, звучание которых обогащено Абсолю Бурбонской Ванили. Невероятная притягательность этого необыкновенного парфюма усилена благородными ингредиентами.


               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 897 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="25" data-image="/files/parfum_promo_mobile_1/img/man/24.jpg" data-header="C.Dior Fahrenheit 50 ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Givenchy Intense Ultramarine  30ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/25.jpg" alt=''>
               <ul class="item_list">
                  Сильный и дерзкий аромат с нотами морской свежести, сочетающий в себе свободу и стремление к приключениям.

Верхние ноты благородного масла бергамота, гальбанума и листьев черной смородины сменяются пряным "сердцем", в составе которого мята, кардамон, гвоздика и шалфей. Древесный шлейф сочетает в себе ноты кедрового и сандалового деревьев, мха и ветивера.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 148 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="26" data-image="/files/parfum_promo_mobile_1/img/man/25.jpg" data-header="Givenchy Intense Ultramarine  30ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Gucci By Gucci Sport Pour Homme edT 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/26.jpg" alt=''>
               <ul class="item_list">
                  В аромате Gucci By Gucci Sport есть беззаботность и легкость, которые отражают активную сторону жизни мужчины Gucci. Его спортивный характер подчеркнут уникальной структурой аромата и яркими цитрусовыми нотами. Его настроение - прохлада, свежесть, мощь и энергия побуждает настроиться на игру и расслабиться. Он подходит как для моментов свободы, так и для повседневного использования. Вдохновленной свободой и мощью океана аромат Gucci By Gucci Sport напоминает о безграничной энергии открытого пространства и желания принимать вызов игры. Он свежий и беззаботный, однако, уникальная структура аромата делает его глубоким и насыщенным. Классификация аромата: цитрусовый. Верхние ноты: грейпфрут, мандарин, кипарис. Ноты сердца: инжир, кардамон, ягоды можжевельника. Ноты шлейфа: ветивер, пачули, семена гибискуса. Ключевые слова: Спортивный, яркий, свежий!
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 028 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="27" data-image="/files/parfum_promo_mobile_1/img/man/26.jpg" data-header="Gucci By Gucci Sport Pour Homme edT 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Hermes Terre D`Hermes 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/27.jpg" alt=''>
               <ul class="item_list">
                  «Лечь на землю и почувствовать ее запах, устремляя взгляд к небу». Jean-Claude Ellena 



Terre d’Hermes — это символическое повествование о материи и ее превращениях. Роман, передающий все могущество алхимии стихий. Вода, заключенная в пространство между землей и небом. Путешествие, полное силы и поэзии. Древесный, растительный, минеральный.



Туалетная вода. Вертикальная композиция на основе древесных нот: корни укрепляют аромат, а смолы обволакивают его.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 184 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="28" data-image="/files/parfum_promo_mobile_1/img/man/27.jpg" data-header="Hermes Terre D`Hermes 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Hugo Boss In Motion Electric Edition 40 ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/28.jpg" alt=''>
               <ul class="item_list">
                  Туалетная вода Hugo Boss Boss In Motion Electric Edition (Хьюго Босс Босс Ин Моушн Электрик Эдишн) объединяет в себе чистоту и динамику, бодрость и сдержанность, устремление к свободе и совершенству. Купить Hugo Boss In Motion Electric предпочтет целеустремленный человек, ведущий динамичный образ жизни, который близок к спорту, привык побеждать и не приучен сдаваться. Это воплощение настоящего азарта, это процесс достижения гармонии и самосовершенствования. Это бодрость духа, яркая энергия и вера в себя. Это сила и яркость, соединенные с мягкостью и утонченностью. Наконец, это чувственность и эмоциональность. Цитрусовый фужерный аромат от Hugo Boss отлично подойдет к летнему сезону.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 828 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="29" data-image="/files/parfum_promo_mobile_1/img/man/28.jpg" data-header="Hugo Boss In Motion Electric Edition 40 ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Hugo Boss In Motion Green Edition 40ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/29.jpg" alt=''>
               <ul class="item_list">
                  Hugo Boss Boss In Motion Green Edition (Хьюго Босс Босс Ин Моушн Грин Эдишн) лимитированный выпуск из серии Boss In Motion, выдержан в зеленой цветовой гамме и имеет свежий букет с пряно древесными штрихами. Композиция In Motion Green Edition напоминает энергию жизни, переданную свежестью зеленого цвета. Аромат Boss in Motion Green от Hugo Boss создан для молодых, целеустремленных мужчин, с неукротимым стремлением к покорению новых вершин. Аромат обладает достаточно универсальным характером и предназначен для повседневного использования.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 000 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="30" data-image="/files/parfum_promo_mobile_1/img/man/29.jpg" data-header="Hugo Boss In Motion Green Edition 40ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Kenzo L`eau par Eau Indigo 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/30.jpg" alt=''>
               <ul class="item_list">
                  Весенняя свежесть и легкость заключены в гармоничной паре L`Eau Par Kenzo Eau Indigo Pour Homme и L`Eau Par Kenzo Eau Indigo Pour Femme.

Мужская версия аромата привлекает внимание своей контрастностью и динамичностью: искрящиеся ноты лайма сменяются пряным кориандром, вслед за которым, дополняя друг друга, звучат ноты кедра и ветивера.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 036 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="31" data-image="/files/parfum_promo_mobile_1/img/man/30.jpg" data-header="Kenzo L`eau par Eau Indigo 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Kenzo L`eau par Kenzo Ice  50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/31.jpg" alt=''>
               <ul class="item_list">
                  Великолепная туалетная вода Кензо Ле Пар, как и духи, заключена в прекрасный флакон, дизайн которого имитирует ледяной слиток. Стилисты и дизайнеры рекомендуют использовать этот аромат в жаркие летние дни с летней, повседневной или спортивной одеждой. Однако истинные поклонницы опьяняюще-свежих ароматов используют парфюм Kenzo l Eau Par в любое время года. Кроме того, духи Лепар Кензо превосходно подходят как для дневных прогулок или похода в офис, так и для вечерних рандеву. Истинная находка – Кензо духи Ля Пар для молодых и жизнерадостных девушек, а также для женщин, предпочитающих активный образ жизни.

На сайте интернет-магазина «Бутик ароматов» представлены духи Kenzo Ice, купить которые вы можете быстро и легко за приемлемую цену. А доставляем мы l Eau Par Kenzo аромат любой транспортной компанией в любую точку страны.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 088 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="32" data-image="/files/parfum_promo_mobile_1/img/man/31.jpg" data-header="Kenzo L`eau par Kenzo Ice  50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Kenzo L`eau par Kenzo pour Homme 50 ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/32.jpg" alt=''>
               <ul class="item_list">
                  
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>5 036 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="33" data-image="/files/parfum_promo_mobile_1/img/man/32.jpg" data-header="Kenzo L`eau par Kenzo pour Homme 50 ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Lacoste L.12.12 Blanc pour Homme 30ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/33.jpg" alt=''>
               <ul class="item_list">
                  Элитный аромат Eau de LACOSTE L.12.12 Blanc ориентирван на энергичных, независимых и волевых мужчин, которые стремятся выгодно подчеркнуть свой брутальный образ и завоевать внимание женской аудитории.

Туалетная вода Eau de LACOSTE L.12.12 Blanc - это настоящий шедевр спортивной линейки ароматов от премиального французского бренда LACOSTE. Вдохновением для ее создания послужил образ элегантного и стильного мужчины, который ведет активный образ жизни и смело бросает вызов любым трудностям, возникающим на его пути.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 750 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="34" data-image="/files/parfum_promo_mobile_1/img/man/33.jpg" data-header="Lacoste L.12.12 Blanc pour Homme 30ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Lacoste L.12.12 Blue pour Homme 30ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/34.jpg" alt=''>
               <ul class="item_list">
                  Самые оригинальные и культовые рубашки, созданные Домом Lacoste, воплотились в трио ароматов, собранных в коллекцию Eau De Lacoste L.

12. 12. У каждого парфюма свой стиль и настроение, своя эмоция и свой цвет - один из самых популярных цветов спортивной гаммы Lacoste, в которой они выпускают свои знаменитые рубашки-поло (легендарную модель с «кодовым» названием L. 12. 12). Bleu – «королевский» синий, традиционно считающийся воплощением мужественности и силы, рисует образ победителя – человека, который умеет добиваться поставленных целей и доказывать свое превосходство! Композиция: мята, розовый грейпфрут, шалфей, цветы апельсина, пачули, дубовый мох, папоротник.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 852 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="35" data-image="/files/parfum_promo_mobile_1/img/man/34.jpg" data-header="Lacoste L.12.12 Blue pour Homme 30ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Lacoste L.12.12 Rouge pour Homme 30ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/35.jpg" alt=''>
               <ul class="item_list">
                  Вдохновившись дизайном спортивной рубашки поло, созданной (по легенде бренда Lacoste) примерно в 1930-х годах, парфюмеры французского бренда Lacoste выпустили серию ароматов Lacoste Eau De L.12.12 для мужчин, которые любят спорт и динамику в своей жизни. Туалетная вода Lacoste Eau De L.12.12 Rouge – особенно яркий экземпляр коллекции. Аромат заключен в красный флакон, на котором изображен зеленый крокодильчик – эмблема французского модного дома. 



В композиции Lacoste Eau De L.12.12 Rouge можно услышать приятные древесные и пряные нотки. В начальном аккорде также присутствуют цитрусовые переливы, которые дарят заряд бодрости. Пряности в «сердце» вносят свою долю уникальности в мужественный образ обладателя парфюма. Финальный шлейф состоит из древесных нот, слегка разбавленных оттенками акации и акцентом сиамского бензоина. Lacoste Eau De L.12.12 Rouge – это выбор современных мужчин, которые обладают яркой индивидуальностью.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 825 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="36" data-image="/files/parfum_promo_mobile_1/img/man/35.jpg" data-header="Lacoste L.12.12 Rouge pour Homme 30ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Lacoste L.12.12 Vert pour Homme 30mll</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/36.jpg" alt=''>
               <ul class="item_list">
                  Самые оригинальные и культовые рубашки-поло, созданные Домом Lacoste, воплотились в трио ароматов, собранных в коллекцию Eau De Lacoste L.12.12 (таким был кодовый номер легендарной модели). У каждого парфюма свой стиль и настроение, своя эмоция и свой цвет - один из самых популярных цветов спортивной гаммы Lacoste, в которой они выпускают свои знаменитые рубашки-поло. Eau de Lacoste L.12.12 Vert - аромат гармонии и спокойствии, напрямую связанный с природой, с прогулками на открытом воздухе, с тишиной и умиротворением, с обретением гармонии и получением наслаждения от приятного, расслабляющего отдыха. Композиция: итальянский бергамот, грейпфрут, замороженная дыня, вербена, инжир, лаванда, чабрец, листья березы, сандал. Аромат выпущен в 2011 г.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 257 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="37" data-image="/files/parfum_promo_mobile_1/img/man/36.jpg" data-header="Lacoste L.12.12 Vert pour Homme 30mll" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Montblanc Starwalker 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/37.jpg" alt=''>
               <ul class="item_list">
                  Осенью 2005 года компания Mont Blanc, специализирующаяся на производстве роскошных и утонченных аксессуаров, представила новый мужской аромат Starwalker.

Эта элегантная древесно-пряная композиция с нотами бергамота, мандарина, бамбука, имбиря, мускатного ореха, лесного кедра, сандалового дерева, белого мускуса и янтаря придется по вкусу успешным и респектабельным деловым мужчинам. Чувственный и мужественный парфюм создан для элегантного, современного мужчины, который умеет быть изысканным и строгим, уверенным и романтичным. Мелодичный и классически утонченный, этот аромат мгновенно выделяет своего обладателя из толпы.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 257 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="38" data-image="/files/parfum_promo_mobile_1/img/man/37.jpg" data-header="Montblanc Starwalker 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Paco Rabanne XS pour Homme 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/38.jpg" alt=''>
               <ul class="item_list">
                  
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 257 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="39" data-image="/files/parfum_promo_mobile_1/img/man/38.jpg" data-header="Paco Rabanne XS pour Homme 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        <div class="item">
               <h2 value=14380 class="title">Kenzo L`eau par Kenzo Wild Edition 50ml</h2>
               <img src="{{$publicPath}}/files/parfum_promo_mobile_1/img/man/39.jpg" alt=''>
               <ul class="item_list">
                  Аромат туалетной воды Kenzo «L'Eau Par Kenzo Wild Edition Pour Femme» (Кензо Ле Пар Кензо Вилд Эдишен Пур Фам) подчеркивает целеустремленность и независимость сильной натуры, энергия и оптимизм которой передаются окружающим. Волнующая свежесть и мягкая сладость этого парфюма делают очаровательную женщину неповторимой и исключительной. Яркие нотки мандарина и мяты взрываются в верхних нотах, окутывая свежестью и маня прохладой. Травянистые оттенки зеленой сирени и теплое звучание древесины розового дерева уносят в тенистую прохладу весеннего сада. Подчеркивает игривость туалетной воды острота перца, смягченная сладостью сочного персика и шлейфовыми аккордами чувственной ванили и благородного кедра.
               </ul>
               <div class="price-block">
                  <p class="old-price">Цена: <span>3 257 руб</span></p>
                  <p class="price"><span class="price_land_s1">99</span><span class="price_land_curr">руб.</span></p>
               </div>
               <a href="{{$publicPath}}/#cart" data-id="40" data-image="/files/parfum_promo_mobile_1/img/man/39.jpg" data-header="Kenzo L`eau par Kenzo Wild Edition 50ml" class="btn buy button product_type_simple add_to_cart_button cd-add-to-cart ajax_add_to_cart" data-price="99" data-currency="руб.">Купить сейчас</a>
            </div>
                        </div>
         </div>
         <div>
            <img width="100%" style="margin-top:10px;margin-bottom:10px;" src="{{$publicPath}}/files/parfum_promo_mobile_1/img/delivery.jpg"/>
         </div>
         <div class="footer">
            <div class="copyright"><img src="{{$publicPath}}/files/_blocks/copyright/img/rekv.png" style="display:block;margin:0 auto">
<img src="{{$publicPath}}/files/_blocks/copyright/img/logo.jpg" style="display:block;margin:0 auto"><br><a href="{{$publicPath}}/privacypolicy.html" target="_blank">Политика конфиденциальности</a></div>
         </div>
      </div>
      <div class="orderform">
         <div class="close"></div>
         <h3 class="order_form_style_1">Оформить заказ</h3>
         <form  action="/{{$thread}}/order" class="orderformcdn" method="post">
            <p style="text-align:center; font-size: 13px;">Уважаемые покупатели, оставляйте корректный номер телефона и будьте готовы принять звонок от оператора. 
               Мы позвоним вам в течение 15 минут
            </p>
                           <input type="hidden" name="country" value="0">
                        <div class="field">  
               <span>ФИО:</span>
               <input type="text" name="name" required="" id="order_form_name" />
            </div>
            <div class="field">  
               <span>Телефон:</span>
               <input type="text" required="" name="phone" id="order_form_phone"/>
            </div>
            <input type="submit" class="btn"  value="Получить духи">
            <input type="hidden" name="address" value="">
            <input type="hidden" name="dop_params[basket]" value="">
            <input type="hidden" name="product_count" id="product_count"  value="1">
            <input type="hidden" name="number_product"  value="2195">
            
<input type="hidden" name="split_test_id" 	value="0">
<input type="hidden" name="split_test" 		value="0">
<input type="hidden" name="split_test_host" value="promo.perfume-sales.com">
<input type="hidden" name="fchck"           value="d388c38ae2893e976c0b6d95bffc4340b1e4bee2">
<input type="hidden" name="ucfi" id="ucfi"  value="0">
         </form>
      </div>

<script type="text/javascript" src="{{$publicPath}}/files/parfum_promo_mobile_1/js/script.js?v=3"></script>



</body>
</html>




	
	

	
		
			
				
					
				
			

			

			
				
			
		
	
	
		
	    
	    
	    
			
				
			
		
	



<!-- 1 -->
