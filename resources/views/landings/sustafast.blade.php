<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Сустафаст - средство для суставов за 99</title>
	<!-- Favicon -->
	<link rel="icon" href="{{$publicPath}}//img/products_new/2030.png" type="image/png">
	<link rel="shortcut icon" href="{{$publicPath}}//img/products_new/2030.png" type="image/png">

	<!-- OG -->
	<meta property="og:url" content="http://{{$host}}/{{$thread}}" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Сустафаст - средство для суставов за 99" />
	<meta property="og:image" content="{{$publicPath}}/img/products_new/2030.png" />
	<meta property="og:site_name" content="Сустафаст - средство для суставов за 99" />
	<meta property="og:description" content="Сустафаст - средство для суставов за 99" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width">

	<!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="{{$publicPath}}/files/sustafast_1/css/style.css"/>

	<!-- JS -->
	<script src="{{$publicPath}}//files/_js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="{{$publicPath}}/files/_js/validation.js"></script>
	<script type="text/javascript" src="{{$publicPath}}//files/_js/ab.min.js"></script>
	<script type="text/javascript" src="{{$publicPath}}//files/_js/timer.js"></script>
  	<script type="text/javascript" src="{{$publicPath}}/files/sustafast_1/js/script.js"></script>
  	<script type="text/javascript" src="{{$publicPath}}/files/sustafast_1/js/bun.js"></script>
	<script type="text/javascript">$jsonData = {"product":{"id":2030,"name":"Сустафаст - средство для суставов за 99","title":"Сустафаст - средство для суставов за 99","short_description":"Сустафаст - средство для суставов за 99","full_description":"Сустафаст - средство для суставов за 99"},"prices":{"271":{"price":99,"old_price":1980,"delivery_price":0,"tax_price":0,"upsale_price":0,"geo_key":"RU","name":"Россия","currency":"руб.","rate":1,"phone_template":"+7 928 827-22-53","address_template":"135999, Москва, ул. Ленина, д.10, кв.5","name_template":"Петров Петр Петрович","active":true},"272":{"price":99,"old_price":5990,"delivery_price":0,"tax_price":0,"upsale_price":0,"geo_key":"KZ","name":"Қазақстан","currency":"тенге","rate":5.3,"phone_template":"+7 705 1301111","address_template":"ул. Майлина, д.3, кв. 6, г. Костанай, 110003","name_template":"Алтынбаев Азат Тюлегенович","active":false},"357":{"price":1,"old_price":140,"delivery_price":0,"tax_price":0,"upsale_price":0,"geo_key":"BY","name":"Беларусь","currency":"бел. руб.","rate":0.032,"phone_template":"+37 529 186 24 65","address_template":"220035, г. Минск, пр-т Машерова, д. 76, кв. 17","name_template":"Матвеев Евгений Алексеевич","active":false}},"lowPrice":{"year":"2017","month":"12","day":"11"}};</script>
</head>
<body>

<script type="text/javascript">
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
		city			: "Москва",
		landDir			: "sustafast_1",
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
                    <input type="hidden" name="number_product"  value="2030">
                    <input type="checkbox" checked="checked" style="position: absolute;left: -9999px; opacity: 0;">
                    
<input type="hidden" name="split_test_id" 	value="0">
<input type="hidden" name="split_test" 		value="0">
<input type="hidden" name="split_test_host" value="vip.sustafast.com">
<input type="hidden" name="fchck"           value="1a3b812042a1dad2681778c9ea3d60963c52ec91">
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

                
                                                        
                                                                                                                                                                                                              
                    
<header>
	<div class="header-block">
		<div class="header-fact">
			<ul>
				<li>
					<p>Более <span>20 млн $</span> потрачено
						на создание препарата
						Сустафаст<sup>®</sup>
					</p>
				</li><!--
			 --><li>
					<p><span>7 лет</span> разработок и испытаний в ФГБУ ЦИТО
						им. Н.Н. Приорова
					</p>
				</li><!--
			 --><li>
					<p><span>Эффективность доказана</span>
						Сертифицирован и
						клинически одобрен
					</p>
				</li>
			</ul>
		</div><!--
	 --><div class="header-feed">
			<p data-toggle="scroll" data-id="#feed">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</p>
		</div><!--
	 --><div class="header-btn">
			<button data-toggle="scroll" data-id="#form">заказать</button>
		</div>
	</div>
</header>
<div class="main">
	<div class="info-block">
		<div class="info-block-body">
			<div class="info-block-list">
				<div class="ibl-info">
					<div class="ibl-logo">
						<img src="{{$publicPath}}/files/sustafast_1/img/logo.png" alt="" />
					</div>
					<div class="ibl-text">
						<p>Здоровье суставов, хрящей и мышц <span>за 10 дней!</span></p>
					</div>
					<div class="ibl-li">
						<ul>
							<li>
								Избавит от боли и отеков в суставах после <span>1 применения</span>
							</li>
							<li>
								Помогает при артрите, артрозе, остеохондрозе <span>за 10 дней</span>
							</li>
							<li>
								<span>Уничтожает воспаление,</span> вызывающую заболевания
							</li>
							<li>
								Запатентованный состав из <span>натуральных компонентов</span>
							</li>
						</ul>
					</div>
				</div><!--
			 --><div class="ibl-img">
					<img src="{{$publicPath}}/files/sustafast_1/img/legs.png" alt="" />
				</div>
			</div>
			<div class="info-block-content">
				<div class="info-block-content-info">
					<div class="info-block-price">
						<div class="ibp-block">
							<div class="ibp-old">
								<p><span class="old_price_val"><span class="price_land_s2">1980</span></span> <span class="old_price_cur"><span class="price_land_curr">руб.</span></span></p>
							</div>
							<div class="ibp-new">
								<p><span class="new_price_val"><span class="price_land_s1">99</span></span><span class="new_price_cur"><span class="price_land_curr">руб.</span></span></p>
							</div>
						</div>
						<div class="ibp-mid">
							<p>Средняя цена в
								аптеках города
								<span>1 500</span> рублей
							</p>
						</div>
						<div class="ibp-note">
							<p>при заказе через сайт цена ниже!</p>
						</div>
						<!--мобильная версия-->
						<div class="ibp-pack-mobile">
							<img src="{{$publicPath}}/files/sustafast_1/img/pack-mobile.png" alt="" />
						</div>
					</div>
				</div>
				<div class="info-block-akcia">
					<p>До конца акции осталось:</p>
					<div id="countdown-1"></div>
					<div class="cd-name">
						<ul>
							<li>часов</li>
							<li>минут</li>
							<li>секунд</li>
						</ul>
					</div>
				</div>
				<div class="info-block-form">
					<form class="landing__form orderformcdn" action="/{{$thread}}/order" method="POST" id="form">
												<input type="hidden" name="country" value="0">
												<div class="ibf-pole-input">
							<input type="text" required="" name="name" placeholder="Ваше имя">
						</div>
						<div class="ibf-pole-input">
							<input type="tel" required="" name="phone" placeholder="Номер телефона">
						</div>
						<div class="ibf-pole-btn">
							<button type="submit"><span>заказать сейчас</span></button>
						</div>
						<input type="hidden" name="address" value="">
						<input type="hidden" name="product_count" id="product_count"  value="1">
						<input type="hidden" name="number_product"  value="2030">
						
<input type="hidden" name="split_test_id" 	value="0">
<input type="hidden" name="split_test" 		value="0">
<input type="hidden" name="split_test_host" value="vip.sustafast.com">
<input type="hidden" name="fchck"           value="1a3b812042a1dad2681778c9ea3d60963c52ec91">
<input type="hidden" name="ucfi" id="ucfi"  value="0">
					</form>
				</div>
			</div>
			<!--мобильная версия-->
			<div class="info-block-list-mobile">
				<div class="ibl-li">
					<ul>
						<li>
							Избавит от боли и отеков в суставах после <span>1 применения</span>
						</li>
						<li>
							Помогает при артрите, артрозе, остеохондрозе <span>за 10 дней</span>
						</li>
						<li>
							<span>Уничтожает воспаление,</span> вызывающую заболевания
						</li>
						<li>
							Запатентованный состав из <span>натуральных компонентов</span>
						</li>
					</ul>
				</div>
				<div class="ibl-btn">
					<button data-toggle="scroll" data-id="#form3"><span>заказать сейчас</span></button>
				</div>
			</div>
		</div>
		<!--мобильная версия-->
		<div class="bg-mobile">
			<img src="{{$publicPath}}/files/sustafast_1/img/legs-m.png" alt="" />
		</div>
	</div>
	<!--мобильная версия-->
	<div class="consequence-block">
		<div class="consequence-block-body">
			<div class="consequence-block-name">
				<h2>последствия заболевания суставов, костей и мышц</h2>
			</div>
			<div class="consequence-block-list">
				<ul>
					<li>
						<div class="cb-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/con1.png" alt="" />
						</div>
						<div class="cb-text">
							<p>Периартрит</p>
						</div>
					</li><!--
				 --><li>
						<div class="cb-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/con2.png" alt="" />
						</div>
						<div class="cb-text">
							<p>Синовит</p>
						</div>
					</li><!--
				 --><li>
						<div class="cb-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/con3.png" alt="" />
						</div>
						<div class="cb-text">
							<p>инвалидность</p>
						</div>
					</li><!--
				 --><li>
						<div class="cb-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/con4.png" alt="" />
						</div>
						<div class="cb-text">
							<p>Сильные боли</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="garanty-block">
		<div class="garanty-block-name">
			<h2>СустаФаст<sup>®</sup> – <span>гарантия здоровых суставов!</span></h2>
			<p>Свобода движений и радость активной жизни!</p>
		</div>
		<div class="garanty-block-info">
			<div class="garanty-block-left">
				<div class="gbl-name">
					<p>Боли в суставах нельзя игнорировать!</p>
				</div>
				<div class="gbl-text">
					<p>Заболевания хрящевой ткани занимают 1 место в мире по распространенности среди населения вне зависимости от возраста.
						В России 87 % населения страдают от проблем с суставами, сухожилиями, связками и мышцами.
					</p>
				</div>
			</div><!--
		 --><div class="garanty-block-right">
				<div class="gbl-name">
					<p>Сразу принимайте меры!</p>
				</div>
				<div class="gbl-text">
					<p>Заболевания суставов, костей и мышц снижают качество жизни. У 7 из 10 человек приводят к воспалению
						окружающих сустав тканей, воспалению оболочки сустава, деформации, болям и инвалидности!
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="outcome-block">
		<div class="outcome-block-name">
			<h2>последствия заболевания суставов, костей и мышц</h2>
		</div>
		<div class="outcome-block-list">
			<ul>
				<li>
					<p>Периартрит</p>
				</li><!--
			 --><li>
					<p>Синовит</p>
				</li><!--
			 --><li>
					<p>Инвалидность</p>
				</li><!--
			 --><li>
					<p>Сильные <br />боли</p>
				</li><!--
			 --><li>
					<p>Деформации <br />хрящей</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="number1-block">
		<div class="number1-block-name">
			<h2><span>СустаФаст<sup>®</sup> – <br /><span>Средство №1 в борьбе за здоровье</span></span><br /> суставов, хрящей и мышц!</h2>
		</div>
		<div class="number1-block-list">
			<ul>
				<li>
					<div class="nbl-img">
						<img src="{{$publicPath}}/files/sustafast_1/img/num1.png" alt="" />
					</div>
					<div class="nbl-name">
						<p>Медицинское вмешательство</p>
					</div>
					<div class="nbl-li">
						<ul>
							<li>
								Травматично, высокий риск осложнений
							</li>
							<li>
								Устраняет только следствие,
								а не причину
							</li>
							<li>
								Болезненная процедура,
								оставляет рубцы
							</li>
							<li>
								Убирает проблему на время,
								возможны рецидивы
							</li>
						</ul>
					</div>
				</li><!--
			 --><li>
					<div class="nbl-img">
						<img src="{{$publicPath}}/files/sustafast_1/img/num2.png" alt="" />
					</div>
					<div class="nbl-name">
						<p>сустафаст<sup>®</sup></p>
					</div>
					<div class="nbl-li">
						<ul>
							<li>
								Безопасно в применении, не вызывает осложнений
							</li>
							<li>
								Устраняет причину и
								следствия
							</li>
							<li>
								Восстанавливает суставы без боли, рубцов
							</li>
							<li>
								Убирает боль в суставах, хрящах и  мышцах раз и навсегда
								исключает рецидивы
							</li>
						</ul>
					</div>
				</li><!--
			 --><li>
					<div class="nbl-img">
						<img src="{{$publicPath}}/files/sustafast_1/img/num3.png" alt="" />
					</div>
					<div class="nbl-name">
						<p>Гомеопатия и<br > народные средства</p>
					</div>
					<div class="nbl-li">
						<ul>
							<li>
								Риск возникновения осложнений
							</li>
							<li>
								Лишь ослабляет симптомы, не устраняя причины
							</li>
							<li>
								Временное снижение болевых ощущений, без рубцов
							</li>
							<li>
								Высокий риск рецидивов и хронической формы болезни суставов и мягких тканей
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="stop-block">
		<div class="stop-block-text">
			<p class="stop">Остановитесь!</p>
			<p class="sbt1">Хватит переплачивать за болезненные медицинские процедуры и заниматься самолечением.</p>
			<p class="sbt2">ЭТО ПРИВЕДЕТ ВАС К ИНВАЛИДНОСТИ!</p>
			<p class="sbt3">сустафаст<sup>®</sup> – за 10 дней</p>
			<p class="sbt4">избавит от ПРИЧИН и ПОСЛЕДСТВИЙ заболеваний суставов, костей и мышц.</p>
		</div>
	</div>
	<div class="effectiv-block">
		<div class="effectiv-block-info">
			<div class="eb-text">
				<p class="eb1"><span><span>Эффективность</span> сустафаст<sup>®</sup></span> доказана клиническими испытаниями.</p>
				<!--мобильная версия--><img src="{{$publicPath}}/files/sustafast_1/img/ef-img.jpg" alt="" class="people-m"/>
				<p class="eb2">67 000 человек </p>
				<p class="eb3">избавились от боли и отеков</p>
				<p class="eb4">НАВСЕГДА!</p>
			</div><!--
		 --><div class="eb-pack">
				<img src="{{$publicPath}}/files/sustafast_1/img/ef-pack.png" alt="" />
			</div><!--
		 --><div class="eb-img">
				<img src="{{$publicPath}}/files/sustafast_1/img/ef-img.jpg" alt="" />
			</div>
		</div>
		<div class="effectiv-block-graf">
			<ul>
				<li>
					<div class="ebg-text">
						<p>Снятие воспалительного процесса</p>
					</div><!--
				 --><div class="ebg-img">
						<div class="ebg-img-orange"></div>
						<p>100%</p>
					</div>
				</li>
				<li>
					<div class="ebg-text">
						<p>Избавление от боли и отеков в суставах</p>
					</div><!--
				 --><div class="ebg-img">
						<div class="ebg-img-yellow"></div>
						<p>100%</p>
					</div>
				</li>
				<li>
					<div class="ebg-text">
						<p>Подавление проявлений артрита, артроза</p>
					</div><!--
				 --><div class="ebg-img">
						<div class="ebg-img-green"></div>
						<p>93%</p>
					</div>
				</li>
				<li>
					<div class="ebg-text">
						<p>Укрепление суставных структур</p>
					</div><!--
				 --><div class="ebg-img">
						<div class="ebg-img-blue"></div>
						<p>97%</p>
					</div>
				</li>
				<li>
					<div class="ebg-text">
						<p>Деформация тканей, усугубление болезни</p>
					</div><!--
				 --><div class="ebg-img">
						<div class="ebg-img-red"></div>
						<p>0%</p>
					</div>
				</li>
				<li>
					<div class="ebg-text">
						<p>Рецидивы, повторное появление</p>
					</div><!--
				 --><div class="ebg-img">
						<div class="ebg-img-cyan"></div>
						<p>0%</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="consist-block">
		<div class="consist-block-body">
			<div class="consist-block-name">
				<h2><span><span>Сустафаст<sup>®</sup></span> доверьтесь целительной силе</span> редких компонентов!</h2>
			</div>
			<div class="consist-block-list">
				<ul>
					<li class="cb-active" id="c1">
						<div class="cbl-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/consist2.png" alt="" />
						</div>
						<div class="cbl-name">
							<p>Экстракт клевера</p>
						</div>
						<div class="cbl-text">
							<p>Избавляет от боли в суставах, питает соединительную ткань</p>
						</div>
					</li><!--
				 --><li id="c2">
						<div class="cbl-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/consist3.png" alt="" />
						</div>
						<div class="cbl-name">
							<p>Хондроитин</p>
						</div>
						<div class="cbl-text">
							<p>Укрепляет хрящи, сухожилия,  связки, снимает воспаления и отеки, способствует регенерации хряща </p>
						</div>
					</li><!--
				 --><li id="c3">
						<div class="cbl-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/consist1.png" alt="" />
						</div>
						<div class="cbl-name">
							<p>Печень акулы</p>
						</div>
						<div class="cbl-text">
							<p>Увеличивает подвижность суставов, борется с инфекциями, убирает застойные образования, улучшает кровоток</p>
						</div>
					</li><!--
				 --><li id="c4">
						<div class="cbl-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/consist4.png" alt="" />
						</div>
						<div class="cbl-name">
							<p>Глюкозамин</p>
						</div>
						<div class="cbl-text">
							<p>Препятствует разрушению суставов и связок, полностью закрепляет результат лечения</p>
						</div>
					</li><!--
				 --><li id="c5">
						<div class="cbl-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/consist5.png" alt="" />
						</div>
						<div class="cbl-name">
							<p>Экстракт сабельника</p>
						</div>
						<div class="cbl-text">
							<p>Останавливает кровотечения, способствует образованию защитной пленки на воспаленных тканях</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="consist-block-nav">
				<div class="cbn-prev">
					<img src="{{$publicPath}}/files/sustafast_1/img/con-prev.png" alt="" />
				</div>
				<div class="cbn-round">
					<ul>
						<li class="c1">
							<p></p>
						</li>
						<li class="c2">
							<p></p>
						</li>
						<li class="c3">
							<p></p>
						</li>
						<li class="c4">
							<p></p>
						</li>
						<li class="c5">
							<p></p>
						</li>
					</ul>
				</div>
				<div class="cbn-next">
					<img src="{{$publicPath}}/files/sustafast_1/img/con-next.png" alt="" />
				</div>
			</div>
		</div>
	</div>
	<div class="sertificat">
		<div class="sertificat-text">
			<p><span class="st-orange">Инновационная технология разработки</span> компонентов <span class="st-blue">сустафаст<sup>®</sup></span>
				удостоилась 13 патентов на изобретения.
			</p>
			<p>Многоступенчатые тесты подтвердили <span class="st-orange">эффективность разработки</span>, получившей все необходимые сертификаты и лицензии. </p>
		</div>
		<div class="sertificat-img">
			<img src="{{$publicPath}}/files/sustafast_1/img/sertificat.png" alt="" />
		</div>
	</div>
	<div class="how-block">
		<div class="how-block-body">
			<div class="how-block-name">
				<h2>Как применять <span>сустафаст<sup>®</sup></span></h2>
			</div>
			<div class="how-block-list">
				<ul>
					<li class="hb-active" id="h1">
						<div class="hbl-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/how1.png" alt="" />
						</div>
						<div class="hbl-text">
							<p><span>Средство имеет удобный аппликатор,</span> который сэкономит средство при нанесении.</p>
						</div>
					</li><!--
				 --><li id="h2">
						<div class="hbl-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/how2.png" alt="" />
						</div>
						<div class="hbl-text">
							<p><span>1–2 раза в день</span> наносите гель на кожу по 3–5 см в зависимости от площади болезненного участка.</p>
						</div>
					</li><!--
				 --><li id="h3">
						<div class="hbl-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/how3.png" alt="" />
						</div>
						<div class="hbl-text">
							<p>Мягкими массажными движениями <span>наносите гель на очаг возникновения боли</span> до полного впитывания.</p>
						</div>
					</li><!--
				 --><li id="h4">
						<div class="hbl-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/how4.png" alt="" />
						</div>
						<div class="hbl-text">
							<p>Для выздоровления воспользуйтесь специальным пластырем из комплекта, <span>заклеив им очаг воспаления.</span> </p>
						</div>
					</li>
				</ul>
			</div>
			<div class="how-block-nav">
				<div class="hbn-prev">
					<img src="{{$publicPath}}/files/sustafast_1/img/con-prev.png" alt="" />
				</div>
				<div class="hbn-round">
					<ul>
						<li class="h1">
							<p></p>
						</li>
						<li class="h2">
							<p></p>
						</li>
						<li class="h3">
							<p></p>
						</li>
						<li class="h4">
							<p></p>
						</li>
					</ul>
				</div>
				<div class="hbn-next">
					<img src="{{$publicPath}}/files/sustafast_1/img/con-next.png" alt="" />
				</div>
			</div>
		</div>
	</div>
	<div class="expert-block">
		<div class="expert-block-body">
			<div class="expert-block-name">
				<!--мобильная версия--> 
				<div class="exb-img-mobile"><img src="{{$publicPath}}/files/sustafast_1/img/expert.png" alt="" /></div>
				<h2><span>Эффективность СУСТАФАСТ<sup>®</sup></span><br /> уже доказана врачами и пациентами</h2>
			</div>
			<div class="expert-block-info">
				<div class="expert-block-img">
					<img src="{{$publicPath}}/files/sustafast_1/img/expert.png" alt="" />
				</div><!--
			 --><div class="expert-block-text">
					<p>Только 3 из 10 обращают внимание на первые признаки заболевания. А около 47 % считают,
						что <span>незначительные проявления болезни</span>, такие как хруст в коленях, ноющие кости, периодические боли в мышцах не требуют внимания. Цена такого бездействия
						– <span>деформация тканей</span>. И, конечно, деньги, ведь с течением времени болезнь развивается,
						а ее лечение становится все дольше и дороже. Я советую своим пациентам с заболеваниями
						суставов и хрящей <span>гель Сустафаст<sup>®</sup></span>. 
					</p>
					<p>Гель <span>глубоко проникает</span> в полость суставной сумки и <span>направленно действует</span> на воспаленный участок.
						Уникальный состав геля Сустафаст<sup>®</sup> <span>регенерирует поврежденную хрящевую ткань</span> на 80 %, в отличие
						от аналогичных препаратов, устраняет боли и воспаления суставов и восстанавливает их нормальное
						функционирование. 
					</p>
					<p>Стимулирует выработку синовильной жидкости, <span>синтез гиалурона и протеогликанов</span>, препятствует
						отложениям солей и процессам разрушения хрящевой ткани и суставов.
					</p>
					<p>Пригожина А.Р. </p>
					<p>Ведущий специалист ЦИТО им. Н.Н. Приорова, к.м.н., специалист высшей категории</p>
					<p>травматологии и ортопедии, стаж работы – 27 лет  </p>
					<img src="{{$publicPath}}/files/sustafast_1/img/stamp.png" alt="" />
				</div>
			</div>
		</div>
	</div>
	<div class="feedback" id="feed">
		<div class="feedback-name">
			<h2>Десятки тысяч <span class="fn-orange">довольных клиентов</span>
				навсегда избавились от боли с <span class="fn-grey">сустафаст<sup>®</sup></span>
			</h2>
		</div>
		<div class="feedback-info">
			<div class="feedback-body">
				<div class="feedback-content feed-active" id="f1">
					<div class="feed-body">
						<div class="fc-top">
							<div class="fc-img">
								<img src="{{$publicPath}}/files/sustafast_1/img/feed1.png" alt="" />
							</div>
							<div class="fc-name">
								<p>Лера, 35 лет (г. Ростов-на-Дону)</p>
							</div>
						</div>
						<div class="fc-text">
							<p>Попала с опухшим плечем, сказали плечевой сустав. Лечили витаминами, уколами, клали под капельницы, все зря.
								Через время повторилось. На форумах с моей проблемой узнала о разработке сустафаст, хотела дополнить мед.
								лечение, а в итоге заменила им все полностью и не пожалела!
							</p>
						</div>
					</div><!--
				 --><div class="feed-body">
						<div class="fc-top">
							<div class="fc-img">
								<img src="{{$publicPath}}/files/sustafast_1/img/feed2.png" alt="" />
							</div>
							<div class="fc-name">
								<p>Сергей, 52 года (г. Нижний Новгород)</p>
							</div>
						</div>
						<div class="fc-text">
							<p>болей в коленном суставе нет только трение и хруст врач сказал лечить бесполезно старость мне за 50
								сустафаст дал сосед и спас меня. Хороший рабочий перпарат спасибо тем кто сделал!!!
							</p>
						</div>
					</div>
				</div>
				<div class="feedback-content" id="f2">
					<div class="feed-body">
						<div class="fc-top">
							<div class="fc-img">
								<img src="{{$publicPath}}/files/sustafast_1/img/feed3.png" alt="" />
							</div>
							<div class="fc-name">
								<p>Ирина, 53 года (г. Киев)</p>
							</div>
						</div>
						<div class="fc-text">
							<p>Смотрю и понимаю что не мне одной помог этот гель! Я с ним операции избежала, толковый
								врач сразу выписал Сустафаст. После курса восстановился сустав, прошли боли, отеки.
								Гель что надо!
							</p>
						</div>
					</div><!--
				 --><div class="feed-body">
						<div class="fc-top">
							<div class="fc-img">
								<img src="{{$publicPath}}/files/sustafast_1/img/feed4.png" alt="" />
							</div>
							<div class="fc-name">
								<p>Яна, 27 лет (г. Москва)</p>
							</div>
						</div>
						<div class="fc-text">
							<p>У моего отца артроз коленного сустава. В колено ему одно время что-то кололи, но из-за
								отсутствия результата отменили.Врач назначал все подряд, вдруг что да поможет, пока
								гель коллеги по работе не рекомендовали. Сейчас всё нормально, помогает. И цена доступная.
								Так что всякое бывает.
							</p>
						</div>
					</div>
				</div>
				<div class="feedback-content" id="f3">
					<div class="feed-body">
						<div class="fc-top">
							<div class="fc-img">
								<img src="{{$publicPath}}/files/sustafast_1/img/feed5.png" alt="" />
							</div>
							<div class="fc-name">
								<p>Владимир, 42 года (г. Москва)</p>
							</div>
						</div>
						<div class="fc-text">
							<p>Сделал рентген больного колена, диагноз- артрит. Еле ходил. Предлагали операцию... Страшно.
								Начал альтернативы искать, и когда вышел на гель Сустафаст, то заказал на официальном сайте.Мазал,
								как в инструкции, а уже день на 12 бегал бз боли, без проблем!!
							</p>
						</div>
					</div><!--
				 --><div class="feed-body">
						<div class="fc-top">
							<div class="fc-img">
								<img src="{{$publicPath}}/files/sustafast_1/img/feed6.png" alt="" />
							</div>
							<div class="fc-name">
								<p>Светлана, 47 лет (Санкт-Петербург)</p>
							</div>
						</div>
						<div class="fc-text">
							<p>Терпеть боль вредно!!! А лечить такое серьезное заболевание гомеопатией бессмыслено, поверьте!!!
								Я постарадала от такого сама! Мне доктор уже после советовал Сустафаст. Почему о нем только
								раньше не говорили?!!!
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="feedback-nav">
				<ul>
					<li class="f1">
						<p></p>
					</li>
					<li class="f2">
						<p></p>
					</li>
					<li class="f3">
						<p></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--мобильная версия-->
	<div class="feed-mobile">
		<div class="feedback-name">
			<h2>100 000 <span class="fn-orange">довольных клиентов</span>
				навсегда избавились от боли с <span class="fn-grey">сустафаст<sup>®</sup></span>
			</h2>
		</div>
		<div class="feedback-info">
			<div class="feedback-body">
				<div class="feed-body feed-active" id="fb1">
					<div class="fc-top">
						<div class="fc-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/feed1.png" alt="" />
						</div>
						<div class="fc-name">
							<p>Лера, 35 лет (г. Ростов-на-Дону)</p>
						</div>
					</div>
					<div class="fc-text">
						<p>Попала с опухшим плечем, сказали плечевой сустав. Лечили витаминами, уколами, клали под капельницы, все зря.
							Через время повторилось. На форумах с моей проблемой узнала о разработке сустафаст, хотела дополнить мед.
							лечение, а в итоге заменила им все полностью и не пожалела!
						</p>
					</div>
				</div>
				<div class="feed-body" id="fb2">
					<div class="fc-top">
						<div class="fc-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/feed2.png" alt="" />
						</div>
						<div class="fc-name">
							<p>Сергей, 52 года (г. Нижний Новгород)</p>
						</div>
					</div>
					<div class="fc-text">
						<p>болей в коленном суставе нет только трение и хруст врач сказал лечить бесполезно старость мне за 50
							сустафаст дал сосед и спас меня. Хороший рабочий перпарат спасибо тем кто сделал!!!
						</p>
					</div>
				</div>
				<div class="feed-body" id="fb3">
					<div class="fc-top">
						<div class="fc-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/feed3.png" alt="" />
						</div>
						<div class="fc-name">
							<p>Ирина, 53 года (г. Киев)</p>
						</div>
					</div>
					<div class="fc-text">
						<p>Смотрю и понимаю что не мне одной помог этот гель! Я с ним операции избежала, толковый
							врач сразу выписал Сустафаст. После курса восстановился сустав, прошли боли, отеки.
							Гель что надо!
						</p>
					</div>
				</div>
				<div class="feed-body" id="fb4">
					<div class="fc-top">
						<div class="fc-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/feed4.png" alt="" />
						</div>
						<div class="fc-name">
							<p>Яна, 27 лет (г. Москва)</p>
						</div>
					</div>
					<div class="fc-text">
						<p>У моего отца артроз коленного сустава. В колено ему одно время что-то кололи, но из-за
							отсутствия результата отменили.Врач назначал все подряд, вдруг что да поможет, пока
							гель коллеги по работе не рекомендовали. Сейчас всё нормально, помогает. И цена доступная.
							Так что всякое бывает.
						</p>
					</div>
				</div>
				<div class="feed-body" id="fb5">
					<div class="fc-top">
						<div class="fc-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/feed5.png" alt="" />
						</div>
						<div class="fc-name">
							<p>Владимир, 42 года (г. Москва)</p>
						</div>
					</div>
					<div class="fc-text">
						<p>Сделал рентген больного колена, диагноз- артрит. Еле ходил. Предлагали операцию... Страшно.
							Начал альтернативы искать, и когда вышел на гель Сустафаст, то заказал на официальном сайте.Мазал,
							как в инструкции, а уже день на 12 бегал бз боли, без проблем!!
						</p>
					</div>
				</div>
				<div class="feed-body" id="fb6">
					<div class="fc-top">
						<div class="fc-img">
							<img src="{{$publicPath}}/files/sustafast_1/img/feed6.png" alt="" />
						</div>
						<div class="fc-name">
							<p>Светлана, 47 лет (Санкт-Петербург)</p>
						</div>
					</div>
					<div class="fc-text">
						<p>Терпеть боль вредно!!! А лечить такое серьезное заболевание гомеопатией бессмыслено, поверьте!!!
							Я постарадала от такого сама! Мне доктор уже после советовал Сустафаст. Почему о нем только
							раньше не говорили?!!!
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="feedback-nav-mobile">
			<div class="fbn-prev">
				<img src="{{$publicPath}}/files/sustafast_1/img/con-prev.png" alt="" />
			</div>
			<div class="fbn-round">
				<ul>
					<li class="fb1">
						<p></p>
					</li>
					<li class="fb2">
						<p></p>
					</li>
					<li class="fb3">
						<p></p>
					</li>
					<li class="fb4">
						<p></p>
					</li>
					<li class="fb5">
						<p></p>
					</li>
					<li class="fb6">
						<p></p>
					</li>
				</ul>
			</div>
			<div class="fbn-next">
				<img src="{{$publicPath}}/files/sustafast_1/img/con-next.png" alt="" />
			</div>
		</div>
	</div>
</div>
<div class="work-block">
	<div class="work-block-name">
		<h2>Как мы работаем</h2>
	</div>
	<div class="work-block-info">
		<ul>
			<li>
				<div class="wbi-img">
					<img src="{{$publicPath}}/files/sustafast_1/img/work1.png" alt="" />
				</div>
				<div class="wbi-text">
					<p>Заполните форму заказа на нашем сайте</p>
				</div>
			</li><!--
		 --><li>
				<div class="wbi-img">
					<img src="{{$publicPath}}/files/sustafast_1/img/work2.png" alt="" />
				</div>
				<div class="wbi-text">
					<p>В кратчайшие сроки вам перезвонит наш менеджер</p>
				</div>
			</li><!--
		 --><li>
				<div class="wbi-img">
					<img src="{{$publicPath}}/files/sustafast_1/img/work3.png" alt="" />
				</div>
				<div class="wbi-text">
					<p>Выберите удобный способ доставки</p>
				</div>
			</li><!--
		 --><li>
				<div class="wbi-img">
					<img src="{{$publicPath}}/files/sustafast_1/img/work4.png" alt="" />
				</div>
				<div class="wbi-text">
					<p>Гибкая системы оплаты для наших клиентов!</p>
				</div>
			</li><!--
		 --><li>
				<div class="wbi-img">
					<img src="{{$publicPath}}/files/sustafast_1/img/work5.png" alt="" />
				</div>
				<div class="wbi-text">
					<p>Получите результат от <span>Сустафаст<sup>®</sup></span> уже сегодня!</p>
				</div>
			</li>
		</ul>
	</div>
</div>
<div class="sale-block">
	<div class="sale-block-name">
		<h2>Скидка при покупке через сайт 95%</h2>
	</div>
	<div class="sale-block-price">
		<div class="sbp-mark">
			<img src="{{$publicPath}}/files/sustafast_1/img/map-mark.png" alt="" />
		</div>
		<div class="sbp-price">
			<div class="sbp-mark-mobile">
				<img src="{{$publicPath}}/files/sustafast_1/img/map-mark.png" alt="" />
			</div>
			<div class="sbp-price-body">
				<div class="sbp-price-min">
					<p>Минимальная цена в аптеке: <span><span class="price_land_s2">1980</span> <span class="price_land_curr">руб.</span></span></p>
				</div>
				<div class="sbp-price-site">
					<p>Цена на сайте: <br /><span><span class="new_price_val"><span class="price_land_s1">99</span></span> <span class="new_price_cur"><span class="price_land_curr">руб.</span></span> <span>(скидка 95%)</span></span></p>
				</div>
			</div>
			<div class="sbp-price-text">
				<p><span class="sbp-bold">Скидка предоставляется</span> производителем в рамках акции
					<span class="sbp-grey">"НЕДЕЛЯ КРАСОТЫ И ЗДОРОВЬЯ!"</span>, <span class="sbp-orange">количество товара ограничено</span>.
				</p>
			</div>
		</div>
		<div class="sbp-btn"><button data-toggle="scroll" data-id="#form2"><span>заказать</span></button>
		</div>
	</div>
	<div class="sale-block-description">
		<div class="sbd-body">
			<ul>
				<li>
					<ul>
						<li>
							<p>Общее описание:</p>
						</li><!--
					 --><li>
							<p>нестероидные противовоспалительные
								препараты (НПВП) для местного применения 
							</p>
						</li>
					</ul>
				</li>
				<li>
					<ul>
						<li>
							<p>Форма выпуска: </p>
						</li><!--
					 --><li>
							<p>гель для наружного применения, по 1 тубе вместе
								с инструкцией по применению в картонной пачке 
							</p>
						</li>
					</ul>
				</li>
				<li>
					<ul>
						<li>
							<p>Условия хранения:</p>
						</li><!--
					 --><li>
							<p>при температуре не выше 30° С, в недоступном
								для детей месте 
							</p>
						</li>
					</ul>
				</li>
				<li>
					<ul>
						<li>
							<p>Условия отпуска
								из аптек:  
							</p>
						</li><!--
					 --><li>
							<p>отпускаются без рецепта</p>
						</li>
					</ul>
				</li>
				<li>
					<ul>
						<li>
							<p>Страна: </p>
						</li><!--
					 --><li>
							<p>Россия </p>
						</li>
					</ul>
				</li>
			</ul>
		</div><!--
	 --><div class="sbd-map">
			<p>Цена в аптеке</p>
			<img src="{{$publicPath}}/files/sustafast_1/img/map.jpg" alt="" />
		</div>
	</div>
</div>
<footer>
	<div class="footer-body">
		<div class="info-block">
			<div class="info-block-body">
				<div class="info-block-list">
					<div class="ibl-info">
						<div class="ibl-logo">
							<img src="{{$publicPath}}/files/sustafast_1/img/logo.png" alt="" />
						</div>
						<div class="ibl-text">
							<p>Здоровье суставов, хрящей и мышц <span>за 10 дней!</span></p>
						</div>
						<div class="ibl-li">
							<ul>
								<li>
									Избавит от боли и отеков в суставах после <span>1 применения</span>
								</li>
								<li>
									Помогает при артрите, артрозе, остеохондрозе <span>за 10 дней</span>
								</li>
								<li>
									<span>Уничтожает воспаление,</span> вызывающее заболевания
								</li>
								<li>
									Запатентованный состав из <span>натуральных компонентов</span>
								</li>
							</ul>
						</div>
					</div><!--
				 --><div class="ibl-img">
						<img src="{{$publicPath}}/files/sustafast_1/img/legs.png" alt="" />
					</div>
				</div>
				<div class="info-block-content">
					<div class="info-block-content-info">
						<div class="info-block-price">
							<div class="ibp-block">
								<div class="ibp-old">
									<p><span class="old_price_val"><span class="price_land_s2">1980</span></span> <span class="old_price_cur"><span class="price_land_curr">руб.</span></span></p>
								</div>
								<div class="ibp-new">
									<p><span class="new_price_val"><span class="price_land_s1">99</span></span><span class="new_price_cur"><span class="price_land_curr">руб.</span></span></p>
								</div>
							</div>
							<div class="ibp-mid">
								<p>Средняя цена в
									аптеках города
									<span>1 500</span> рублей
								</p>
							</div>
							<div class="ibp-note">
								<p>при заказе через сайт цена ниже!</p>
							</div>
							<!--мобильная версия-->
							<div class="ibp-pack-mobile">
								<img src="{{$publicPath}}/files/sustafast_1/img/pack-mobile.png" alt="" />
							</div>
						</div>
					</div>
					<div class="info-block-akcia">
						<p>До конца акции осталось:</p>
						<div id="countdown-2"></div>
						<div class="cd-name">
							<ul>
								<li>часов</li>
								<li>минут</li>
								<li>секунд</li>
							</ul>
						</div>
					</div>
					<div class="info-block-form">
						<form class="landing__form orderformcdn" action="/{{$thread}}/order" method="POST" id="form2">
														<input type="hidden" name="country" value="0">
														<div class="ibf-pole-input">
								<input type="text" required="" name="name" placeholder="Ваше имя">
							</div>
							<div class="ibf-pole-input">
								<input type="tel" required="" name="phone" placeholder="Номер телефона">
							</div>
							<div class="ibf-pole-btn">
								<button type="submit"><span>заказать сейчас</span></button>
							</div>
							<input type="hidden" name="address" value="">
							<input type="hidden" name="product_count" id="product_count"  value="1">
							<input type="hidden" name="number_product"  value="2030">
							
<input type="hidden" name="split_test_id" 	value="0">
<input type="hidden" name="split_test" 		value="0">
<input type="hidden" name="split_test_host" value="vip.sustafast.com">
<input type="hidden" name="fchck"           value="1a3b812042a1dad2681778c9ea3d60963c52ec91">
<input type="hidden" name="ucfi" id="ucfi"  value="0">
						</form>
					</div>
				</div>
				<!--мобильная версия-->
				<div class="info-mobile">
					<div class="info-block-akcia">
						<p>До конца акции осталось:</p>
						<div id="countdown-3"></div>
						<div class="cd-name">
							<ul>
								<li>часов</li>
								<li>минут</li>
								<li>секунд</li>
							</ul>
						</div>
					</div>
					<div class="info-block-form">
						<form class="landing__form orderformcdn" action="/{{$thread}}/order" method="POST" id="form3">
														<input type="hidden" name="country" value="0">
														<div class="ibf-pole-input">
								<input type="text" required="" name="name" placeholder="Ваше имя">
							</div>
							<div class="ibf-pole-input">
								<input type="tel" required="" name="phone" placeholder="Номер телефона">
							</div>
							<div class="ibf-pole-btn">
								<button type="submit"><span>заказать сейчас</span></button>
							</div>
							<input type="hidden" name="address" value="">
							<input type="hidden" name="product_count" id="product_count"  value="1">
							<input type="hidden" name="number_product"  value="2030">
							
<input type="hidden" name="split_test_id" 	value="0">
<input type="hidden" name="split_test" 		value="0">
<input type="hidden" name="split_test_host" value="vip.sustafast.com">
<input type="hidden" name="fchck"           value="1a3b812042a1dad2681778c9ea3d60963c52ec91">
<input type="hidden" name="ucfi" id="ucfi"  value="0">
						</form>
					</div>
				</div>
			</div>
			<div class="bg-mobile">
				<img src="{{$publicPath}}/files/sustafast_1/img/legs-m.png" alt="" />
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="copyright">
						    <img src="{{$publicPath}}/files/_blocks/copyright/img/rekv.png" style="display:block;margin:0 auto">
<img src="{{$publicPath}}/files/_blocks/copyright/img/logo.jpg" style="display:block;margin:0 auto">
						<p><a href="{{$publicPath}}/privacypolicy.html" target="_blank">Политика конфиденциальности</a></p>
		</div>
	</div>
</footer>




</body>
</html>




	
	

	
		
			
				
					
				
			

			

			
				
			
		
	
	
		
	    
	    
	    
			
				
			
		
	



<!-- 1 -->
