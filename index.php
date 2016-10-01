<?
	
	require_once "process_date.php";
	
?>


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мобильная адаптация сайта - заказать услугу в веб-студии Up-Site</title>
	<meta name='description' content='Если вы хотите, чтобы ваш сайт прекрасно выглядел на смартфонах и был удобен для мобильных пользователей - заказывайте мобильную адаптацию прямо сейчас!'>	<meta charset="UTF-8">
	<meta name="keywords" content="Мобильная адаптация, нейминг, SMM, партнерская программа, оптимизация под мобильные устройства, 
	целевая аудитория, up-site, be creative, разработка и продвижение сайтов - рост бизнеса и доверие клиентов">   

	<script type="text/javascript" src="js/incrementalNumber.js"> </script>
	<script src="js/jquery.min.js"></script>
    <script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
		 	 <!--<script src="js/popper.js"> </script> -->
	
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/parallax.css"/>
	<link rel="stylesheet" href="css/examples.css" type="text/css">
	<script type="text/javascript">
	/*jQuery(document).ready(function(){
	$objWindow = $(window);
	$('div[data-type="background"]').each(function(){
		var $bgObj = $(this);
		$(window).scroll(function() {
			var yPos = -($objWindow.scrollTop() / $bgObj.data('speed')); 
           
			var coords = '100% '+ yPos + 'px';
            // Animate the background
			 $bgObj.css({ backgroundPosition: coords });
           
		});
		
		});
	});*/
	</script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>			
 
		<script>
				function AjaxFormRequest(result_id,formMain,url) {
					jQuery.ajax({
						url:     url,
						type:     "POST",
						dataType: "html",
						data: jQuery("#"+formMain).serialize(), 
						success: function(response) {
						/*document.getElementById(result_id).innerHTML = response;*/
						},
						error: function(response) {
						document.getElementById(result_id).innerHTML = "<p>Возникла ошибка при отправке формы. Попробуйте еще раз</p>";
						}
					});

           
				}
		</script>
	
     
		<div class="container-fluid" >
			<div  class=" navbar navbar-default navbar-fixed-top" style="background: #fff;">
				<div id="header"  class="container text-uppercase">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
								<span class="sr-only">Открыть навигацию</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="images/logo_up-site-w.png"/></a>
					</div>
					<div class="collapse navbar-collapse" id="responsive-menu">
						<ul class="nav navbar-nav">
							<li><a href="#about-company-in-numbers">О компании</a></li>
							<li><a href="#adaptation">Устройства</a></li>
							<li><a href="#mobile-optimization-profit">Преимущества</a></li>
							<li><a href="#auditory">Целевая аудитория</a></li>
							<li><a href="#our-clients">Клиенты</a></li>
							<li><a href="#thanks">Отзывы</a></li>
							<li><a href="#map">Контакты</a></li>
						</ul>
					</div>
				</div>
				<script>
										var $page = $('html, body');
						$('a[href*="#"]').click(function() {
							$page.animate({
								scrollTop: $($.attr(this, 'href')).offset().top
							}, 1000);
							return false;
						});
				</script>
			</div>
		</div>
		
		
	<div id="mobile-devices" class="container-fluid carousel slide text-center text-uppercase" data-interval="3000" data-ride="carousel">
			
			
			<ol class="carousel-indicators">
				<li class="active" data-target="#mobile-devices" data-slide-to="0"></li>
				<li data-target="#mobile-devices" data-slide-to="1"></li>
				<li data-target="#mobile-devices" data-slide-to="2"></li>
			</ol>
			
			
			<div class="carousel-inner">
				
				<div class="item active ">
					<img class="mobile-devices-background " src="images/sld-1-image.jpg" alt="">
					<div class="carousel-caption mobile-devices-bottom">
						<h2>нет продаж с мобильных устройств?</h2>
				<h3>По статистике из всей онлайн аудитории украины 28,2%<br/><br/>
				пользователи мобильных устройств</h3>
					</div> 
				</div>
				
				<div class="item">
					<img class="mobile-devices-background" src="images/sld-2-image.jpg" alt="">
					<div class="carousel-caption mobile-devices-bottom">
						<h2>нет продаж с мобильных устройств?</h2>
				<h3>По статистике из всей онлайн аудитории украины 28,2%<br/><br/>
				пользователи мобильных устройств</h3>
					</div>
				</div>
				
				<div class="item">
					<img class="mobile-devices-background" src="images/sld-3-image.jpg" alt="">
					<div class="carousel-caption mobile-devices-bottom">
						<h2>нет продаж с мобильных устройств?</h2>
				<h3>По статистике из всей онлайн аудитории украины 28,2%<br/><br/>
				пользователи мобильных устройств</h3>
					</div>
			    </div>
			</div>		
	    </div>

		<div class="container-fluid text-center " id="about-company-in-numbers" >
			<h2 class="text-uppercase">О компании в цифрах</h2>
			<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<p class="numbers-value"><span class="incrementalNumber" set-time="100" data-value="7"></span></p>
						<img src="images/underline.png" />
						
						<p class="numbers-title">лет успешной работы</p>
					</div>
					
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<p class="numbers-value"><span class="incrementalNumber" set-time="1" data-value="1087"></span></p>
						<img src="images/underline.png" />
						<p class="numbers-title">дополнительных клиентов</p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<p class="numbers-value"><span class="incrementalNumber" set-time="100" data-value="11"></span></p>
						<img src="images/underline.png" />
						<p class="numbers-title">представительств по всему миру</p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
						<p class="numbers-value"><span class="incrementalNumber" set-time="100" data-value="354"></span></p>
						<img src="images/underline.png" />
						<p class="numbers-title">крупных проектов</p>
					</div>
											
			</div>
			<script type="text/javascript">
														  $(document).ready(function(){
															incrementalNumber();
														  });
											</script>
		</div>
		   
		


		<div class="container-fluid text-center"  id="adaptation" >
			
			<div class="container">
				<div class="container" id="adaptation-title" >
					<h2>Адаптация п<!--<span class="glyphicon glyphicon-heart-empty"></span>--><span><img style="    padding: 0 0 7px 2px;" src="images/heart.png"/></span>д все</h2>
					<h2>Популярные устройства</h2>
				</div>
				<div class="container text-left" id="adaptation-main" >
					<p>Цель заказа услуги “Мобильная адаптация” - корректное отображение сайта на всех типах мобильных устройств.</p>
					<p>В первую очередь нужно разобраться, что подразумевается под “мобильной адаптацией”.</p>
				</div>
				<div class="container" id="adaptation-footer" >
					<img src="images/border.png" />
					
					<button id="open-more-btn" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Открыть описание</button>
					<script>
					
					$(function(){
						var i=1;
						$('#open-more-btn').click(function(){
					i++;
					if(i%2 == 0)
						$('#open-more-btn').text('Закрыть описание');
					else if(i%2 != 0)	
						$('#open-more-btn').text('Открыть описание');
					});
					});
					</script>
				</div>
					<div class="collapse" id="collapseExample">
					
								<h2 style="">Вам не нужно заказывать мобильную адаптацию, если:</h2>

								<ol class="ne-nuzhna-mob-adaptation">
										<li>У вас нет сайта.</li>
										<li>На ваш сайт не заходят люди и вас это устраивает.</li>
										<li>Ваша целевая аудитория принципиально не использует смартфоны и планшеты.</li>
										<li>Ваш сайт получает оценки 100/100 от Google по <a href="https://developers.google.com/speed/pagespeed/insights/?hl=ru" target="_blank">скорости загрузки</a> и удобству для пользователей.</li>
								</ol>

								<h2>Оптимизация сайтов под мобильные устройства: всё по полочкам</h2>

								<p>Цель заказа услуги &ldquo;Мобильная адаптация&rdquo; - корректное отображение сайта на всех типах мобильных устройств.</p>

								<p>В первую очередь нужно разобраться, что подразумевается под &ldquo;мобильной адаптацией&rdquo;.</p>

										<p class="ne-nuzhna-mob-adaptation-h3">Виды оптимизации сайта под мобильные устройства</p>
										<ul >
											<li>Адаптивный дизайн (адаптивная верстка, Responsive Design) - простыми словами, сайт делается “резиновым”, контент страниц подстраивается под разрешение экрана.</li>
											<li>Динамическая подстановка контента - устанавливается тип устройства, с которого пользователь зашел на страницу, и выдается соответствующий вариант отображения контента.</li>
											<li>Мобильная версия (m.site.ua) - для мобильных пользователей создается отдельный сайт, как правило, на поддомене “m.”.</li>
										</ul>
										<p>Каждый из методов имеет свои преимущества и недостатки. Мы можем реализовать любой из трех вариантов оптимизации под мобильные устройства. Если не оговаривается отдельно, под мобильной адаптацией мы имеем в виду именно адаптивный дизайн. Этот вариант официально одобряется и поощряется Google и имеет наиболее существенные преимущества по сравнению с другими решениями: относительная простота реализации, небольшие расходы на поддержку, дополнительные плюсы в поисковом продвижении.</p>

										<p>Если вы заказываете в Up-Site разработку нового сайта, мы делаем его адаптивным по умолчанию. В век мобильных технологий по-другому нельзя.</p>



								<h2>Как проверить, оптимизирован ли сайт под мобильные устройства</h2>

								<ol class="ne-nuzhna-mob-adaptation-ol">
									<li><p>Зайти на него со смартфона и проверить:</p>
									<ul class="ne-nuzhna-mob-adaptation">
										<li>все ли правильно, красиво отображается;</li>
										<li>можете ли вы читать текст сразу, без увеличения;</li>
										<li>легко ли попадать пальцем по кнопкам, ссылкам;</li>
										<li>нет ли необходимости прокручивать страницу вправо-влево.</li>
									</ul>
									</li>
									<li>Воспользоваться <a href="https://www.google.com/webmasters/tools/mobile-friendly/?hl=ru" target="_blank">инструментом проверки удобства просмотра на мобильных устройствах</a> от Google.</li>
								</ol>

								<h2>Зачем нужна мобильная адаптация</h2>
								<p>28,2% от всех пользователей Интернета Украины используют мобильные устройства для выхода во всемирную сеть.</p>

								<p>Почти треть - это много или мало? Подумайте о том, что это не просто цифра, а огромное количество людей, которые хотят и готовы покупать ваши товары или услуги!</p>
								
								<h2>Ответьте, пожалуйста, на три вопроса о вашей целевой аудитории</h2>
								<ul class="ne-nuzhna-mob-adaptation">
										<li>Это в основном жители крупных городов?</li>
										<li>Их средний возраст - от 18 до 45 лет?</li>
										<li>Уровень достатка - средний и выше?</li>
								</ul>
								<p>Если вы утвердительно киваете, прогнозируемая доля мобильных пользователей в вашей целевой аудитории - 56%. Больше половины!</p>
								<h2>И вы еще сомневаетесь, сделать ли сайт удобным для людей, которые хотят укрепить ваше финансовое благосостояние?</h2>
								<p class="ne-nuzhna-mob-adaptation-h3">Виды оптимизации сайта под мобильные устройства</p>
								<p>Клиенты, зашедшие на сайт, страдают от неудобства и уходят к конкурентам, у которых сайт нормально работает на смартфонах. Поисковые системы занижают позиции неоптимизированных сайтов, в результате чего потенциальные клиенты не видят ваш сайт в поиске и не попадают на него.</p>
								<p class="ne-nuzhna-mob-adaptation-h3">А вот что происходит на сайтах, адаптированных под мобильные устройства</p>
								<p>Посетители влюбляются в ваш интернет-магазин, с удовольствием проводят на нем время, делают заказы и рассказывают друзьям.Поисковые системы также не остаются равнодушными: быстрым, mobile friendly сайтам выдаются более высокие позиции в поиске, что обеспечивает вам приток клиентов.</p>
								
								<p>Цена услуги “Мобильная адаптация” - 2500 грн.</p>

								<p>Окончательная стоимость формируется после согласования технического задания с заказчиком.</p>

								<p>Сроки выполнения - 2-3 недели.</p>

								<p>Нужно быстрее? Сообщите нам об этом.</p>
								
								<h2>Почему стоит заказать услугу “Мобильная адаптация” в веб-студии Up-Site</h2>
								
								<ol class="ne-nuzhna-mob-adaptation">
										<li>Профессионализм: делаем работу качественно. </li>
										<li>Порядочность: если сайт адаптировать нецелесообразно (например, по причине того, что он безнадежно устарел, морально или функционально), мы честно говорим об этом и предлагаем другие решения.</li>
										<li>Ответственность: если наши менеджеры назвали вам сроки, вы получите выполненную работу в срок. Внутренние бизнес-процессы и эффекты законов Мерфи не должны влиять на результаты.</li>
										<li>Цены: ниже средних по рынку и на них также распространяется принцип ответственности, согласованная цена не меняется.</li>
								</ol>

						
					</div>
			</div>
		</div>


		<div class="container-fluid  text-uppercase" id="mobile-optimization-lesion">
			<h2 class="text-center">если ваш сайт не оптимизирован под мобильные устройства:</h2>
			<div class="row">
				<div class="col-lg-4  col-lg-offset-2  col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-1
				col-xs-6 col-xs-offset-1" id="mobile-optimization-lesion-left">
						<ul>
							<li>посетителям неудобно</li>
							<li>в поиске низкие позиции</li>
							<li>клиенты не попадают на сайт</li>
							<li>клиенты уходят к конкурентам</li>
						</ul>
				
				</div>
				<div class="col-lg-4  col-lg-offset-0  col-md-5 col-sm-5 col-xs-5" id="mobile-optimization-lesion-right">
					<img src="images/arrow.png" />
					<button type="button">Убытки</button>
				</div>
			
			</div>
		</div>
	
	

      
		
		<div class="container-fluid text-center text-uppercase" id="mobile-optimization-profit">
			<h2 class="text-center">что дает м<span><img style="    padding: 0 0 7px 0;" src="images/heart-2.png"/></span>бильная оптимизация:</h2>
			<div class="row">
				<div class="col-lg-4  col-lg-offset-2  col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-1
				col-xs-6 col-xs-offset-1" id="mobile-optimization-profit-left">
						<ul>
							<li>удобство для пользователей</li>
							<li>высокие позиции в поиске</li>
							<li>клиенты возвращаются</li>
							<li>высокая посещаемость</li>
						</ul>
				
				</div>
				<div class="col-lg-4 col-lg-offset-0 col-md-5  col-sm-5 col-xs-5" id="mobile-optimization-profit-right">
				



					<img src="images/arrow-2.png" />
					<button type="button">Прибыль</button>
				</div>
			
			</div>
		</div>
		
		<section id="section-mobile-optimization-zakazat">
			<div class="section-bg bg-mobile-optimization-zakazat parallax-bg" data-parallax='{"y":"70vh"}'>
				<div class="container-fluid text-center text-uppercase" id="mobile-optimization-zakazat">
					<h2>закажи мобильную адаптацию от up-site прямо сейчас!</h2>
					<button  type="button"  data-toggle="modal" data-target=".bs-example-modal-sm" >Заказать</button>
				</div>
			</div>
			
			<script>
			/*	$(document).ready(function() {
			$(window).resize(function() {
                if ($(window).width() <= '995'){
           $('#section-mobile-optimization-zakazat div').removeClass("section-bg parallax-bg");
            return this;}
			else   {
              
            }

			});
			});*/
			</script>
			<div class="modal fade bs-example-modal-sm" id="modal-window" tabindex="-1" role="dialog" style="	">
				<div class="" role="document">
					<div class="">
						<h2 style='    text-align: center;  color: #fff;'>До конца акции осталось:</h2>
	
		
						<div id="countdown_dashboard_3" class="container-fluid" style=" width: 90%;" >
							<div class="row" style="padding-left: 8.33%;" >
			
			
								<div class="dash days_dash col-lg-2  col-md-2 col-sm-2 col-xs-2">
									<div class="row">
										<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['days'][0]?></div>
										<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['days'][1]?></div>
									</div>
									<p class="dash_title">дней</p>
								</div>
			
								<div class="dash hours_dash col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
									<div class="row">
										<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['hours'][0]?></div>
										<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['hours'][1]?></div>
									</div>
									<p class="dash_title">часов</p>
								</div>
		
								<div class="dash minutes_dash col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
									<div class="row">
										<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['mins'][0]?></div>
										<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['mins'][1]?></div>
									</div>
									<p class="dash_title">минут</p>
								</div>
			
								<div class="dash seconds_dash col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 	col-xs-2 col-xs-offset-1">
									<div class="row">
										<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['secs'][0]?></div>
										<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['secs'][1]?></div>
									</div>
									<p class="dash_title">секунд</p>
								</div>
							</div>
		
		
							<script language="javascript" type="text/javascript">
								jQuery(document).ready(function() {
									$('#countdown_dashboard_3').countDown({
										targetDate: {
											'day': 		<?=$config['targetDate']['day']?>,
											'month': 	<?=$config['targetDate']['month']?>,
											'year': 	<?=$config['targetDate']['year']?>,
											'hour': 	<?=$config['targetDate']['hour']?>,
											'min': 		<?=$config['targetDate']['minute']?>,
											'sec': 		<?=$config['targetDate']['second']?>
										}
									});
									
									// Функции подписки
									/*$('#email_field').focus(email_focus).blur(email_blur);
									$('#subscribe_form').bind('submit', subscribe_submit);*/
								});
							</script>
						</div>
		
				
						<div class="form">
							<div style="height: 30px;" id="messegeResult">
								<p class="zakazat-result" id="zakazat-result_1"> Оставьте ваши контакты и наш консультант свяжется с вами </p>
							</div>
							   
							<form method="post" action=""  class="formMain" id="formMain" name="formMain">
								<label for="text-inpt ">Ваше имя</label>
									<input id="text-inpt" type="text"  name="text-inpt"   placeholder="" maxlength="30" autocomplete="off" required/>
								<label for="text-inpt ">Телефон</label>
									<input id="phone-inpt" type="Tel" name="phone-inpt" placeholder="" maxlength="30" autocomplete="off" required/>
								<label for="text-inpt ">Ваш сайт</label>
									<input id="site-inpt" type="url" name="site-inpt" placeholder="" maxlength="30" autocomplete="off" required/>
									<input style="border: 1px solid #fff;"  class="btn-zakazat" id="button" type="button"  value="Заказать" onclick="AjaxFormRequest('messegeResult', 'formMain', 'form.php')"/>
							</form>
							  <script>
								$(function(){
									$('#button').click(function(){
										if($('#text-inpt').val() == "")
										$('#text-inpt').css({'border' : '1px solid red'});
										
										if($('#phone-inpt').val() == "")
										$('#phone-inpt').css({'border' : '1px solid red'});
									
										if($('#site-inpt').val() == "")
										$('#site-inpt').css({'border' : '1px solid red'});
									
									if(($('#text-inpt').val() != "") && ($('#phone-inpt').val() != "") && ($('#site-inpt').val() != ""))
									{$('#zakazat-result_1').hide();
									 $('#zakazat-result_1').show(1000).text("Сообщение успешно отправлено");
									 $('#text-inpt').val("") ;
									 $('#phone-inpt').val("") ;
									 $('#site-inpt').val("") ;
									}
									else {$('#zakazat-result_1').hide();
										 $('#zakazat-result_1').show().text("Заполните все поля");
									}
								
									});
									
									
									
									$( "#text-inpt" ).change(function() {
										$('#text-inpt').css({'border' : 'none'});
									});
									$( '#phone-inpt' ).change(function() {
										$('#phone-inpt').css({'border' : 'none'});
									});
									$( '#site-inpt' ).change(function() {
										$('#site-inpt').css({'border' : 'none'});
									});
									
								});
							  </script>
						</div>
					
						<button  id="close-btn-1" style="border: 1px solid #fff;" type="button" class="" data-dismiss="modal">Закрыть </button>
        
					</div>
				</div>
			
			</div>
		</section>
      
        <div class="spacer container-fluid  text-uppercase" id="auditory">
				<div class="row">
					<div class=" text-center col-lg-5  col-lg-offset-1  col-md-offset-1  col-md-5  col-sm-5 col-sm-offset-1
					col-xs-12" id="auditory-left">
							<h2>Ваша целевая аудитория</h2>
							<center><ul>
								<li>Жители крупных городов?</li>
								<li>Возраст 18-45 лет?</li>
								<li>Достаток средний и выше?</li>
							</ul></center>
					
					</div>
				
					<div class="col-lg-4 col-lg-offset-0 col-md-offset-0 col-md-5  col-sm-5 col-sm-offset-0 col-xs-12 text-center" id="auditory-right"
					>
						<h2>Ваша онлайн аудит<span><img style="    padding: 0 0 7px 0;" src="images/heart-2.png"/></span>рия</h2>

						<img src="images/Ellipse-1-copy-21.png" /><span id="pos-56">56%</span>
						<p>56% - пользователи мобильных устройств</p>
						
						
					</div>
				
				</div>
		</div>
		
	

		<div class="container-fluid  text-uppercase" id="stock">
			<div class="row">
				<div class=" text-center col-lg-5  col-lg-offset-1  col-md-offset-1  col-md-5  col-sm-12
				col-xs-10 col-xs-offset-1" id="stock-left">
						<h2>Акция!</h2>
						<p>Стоимость услуги 5000 грн.</p>
						<p>Только сегодня Вы можете заказать</p>
						<p>данную услугу со скидкой 50%</p>
						<p id="cost">2500 грн</p>
				</div>
				
				<div class="col-lg-5 col-md-offset-1 col-md-5  col-sm-11 col-sm-offset-1 col-xs-10 col-xs-offset-2 text-center" id="stock-right">
					<h2>До конца акции осталось:</h2>
					<div id="countdown_dashboard_2" class="container-fluid" style=" width: 100%;" >
					    <div class="row" style="padding-left: 8.33%;" >
			
			
							<div class="dash days_dash col-lg-2  col-md-2 col-sm-2 col-xs-2">
								<div class="row">
								
									<div class="digit col-lg-5 col-md-5 col-sm-5 col-xs-5"><?=$date['days'][0]?></div>
									<div class="digit col-lg-5 col-md-5 col-sm-5 col-xs-5"><?=$date['days'][1]?></div>
								</div>
								<p class="dash_title">дней</p>
							</div>
							
							<div class="dash hours_dash col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
								<div class="row">
								
									<div class="digit col-lg-5 col-md-5 col-sm-5 col-xs-5"><?=$date['hours'][0]?></div>
									<div class="digit col-lg-5 col-md-5 col-sm-5 col-xs-5"><?=$date['hours'][1]?></div>
								</div>
								<p class="dash_title">часов</p>
							</div>
							<div class="dash minutes_dash col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
								<div class="row">
							
									<div class="digit col-lg-5 col-md-5 col-sm-5 col-xs-5"><?=$date['mins'][0]?></div>
									<div class="digit col-lg-5 col-md-5 col-sm-5 col-xs-5"><?=$date['mins'][1]?></div>
								</div>
									<p class="dash_title">минут</p>
							</div>
							
							<div class="dash seconds_dash col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
								<div class="row">
								
									<div class="digit col-lg-5 col-md-5 col-sm-5 col-xs-5"><?=$date['secs'][0]?></div>
									<div class="digit col-lg-5 col-md-5 col-sm-5 col-xs-5"><?=$date['secs'][1]?></div>
								</div>
								<p class="dash_title">секунд</p>
							</div>
						</div>
		
		
							<script language="javascript" type="text/javascript">
								jQuery(document).ready(function() {
									$('#countdown_dashboard_2').countDown({
										targetDate: {
											'day': 		<?=$config['targetDate']['day']?>,
											'month': 	<?=$config['targetDate']['month']?>,
											'year': 	<?=$config['targetDate']['year']?>,
											'hour': 	<?=$config['targetDate']['hour']?>,
											'min': 		<?=$config['targetDate']['minute']?>,
											'sec': 		<?=$config['targetDate']['second']?>
										}
									});
									
									// Функции подписки
									/*$('#email_field').focus(email_focus).blur(email_blur);
									$('#subscribe_form').bind('submit', subscribe_submit);*/
								});
							</script>
					</div>
						
					<button type="button"  data-toggle="modal" data-target=".bs-example-modal-sm"  >Заказать</button>
					
				</div>
			
			</div>
		</div>
		
		<div class="container-fluid  text-uppercase" id="our-clients">
			<h2>Наши клиенты</h2>
			<div class="row">
				<div id="ukr-eko-prom-block" class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img id="ukr-eko-prom" style="margin-top: 15px;" src="images/Layer-1.png"/></div>
				<div id="upsales-block" class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img id="upsales" src="images/logo-up-sales.png"/></div>
				<div id="desire-block" class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img id="desire" src="images/logo-(1).png"/></div>
			</div>
	    </div>
	
	
		<section id="section-add-love">
			<div class="container-fluid section-bg bg-add-love parallax-bg text-uppercase" data-parallax='{"y":"40vh"}' id="add-love">
				
			</div>
			<div class="container-fluid " id="add-love-bottom">
					<h2>Добавляем в нашу работу любви и креатива</h2>
				</div>
		</section>
		
	   
		<div class="container-fluid" id="thanks">
			<h2>Благодарности</h2>
				<div class="row">
				
					<div class="col-lg-6   col-md-6 col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-lg-4   col-md-4 col-sm-12 col-xs-12">
								<img class="author-foto" src="images/Ellipse-2.png">
							</div>
							<div class="col-lg-8   col-md-8 col-sm-12 col-xs-12">
								<p class="thanks-author-name">Алексей, 42</p>
								<p class="thanks-author-txt">Компания отлично справилась с работой, на мой сайт удобно теперь заходить с любых устройств, оличная команда профессионалов, всем рекомендую!</p>
							</div>
						</div>
					</div>
					
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="row">
								<div class="col-lg-4   col-md-4 col-sm-12 col-xs-12">
									<img class="author-foto" src="images/Ellipse-2-copy.png">
								</div>
								<div class="col-lg-8   col-md-8 col-sm-12 col-xs-12">
									<p class="thanks-author-name">Алексей, 42</p>
									<p class="thanks-author-txt">Компания отлично справилась с работой, на мой сайт удобно теперь заходить с любых устройств, оличная команда профессионалов, всем рекомендую!</p>
								</div>
						</div>
					</div>
				</div>
		</div>
		<div class="container-fluid" id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1373.9295847978537!2d30.748396208274713!3d46.47129744385495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63182e89f1339%3A0x52a5175530c1ef29!2z0LLRg9C70LjRhtGPINCS0LXQu9C40LrQsCDQkNGA0L3QsNGD0YLRgdGM0LrQsCwg0J7QtNC10YHQsCwg0J7QtNC10YHRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1469645384519" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="container" id="zakazat-block">
						<h2>До конца акции осталось:</h2>
								<div id="countdown_dashboard" class="container-fluid" style=" width: 90%;" >
					<div class="row" style="padding-left: 8.33%;" >
						
						
						<div class="dash days_dash col-lg-2  col-md-2 col-sm-2 col-xs-2">
							<div class="row">
							
								<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['days'][0]?></div>
								<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['days'][1]?></div>
							</div>
							<p class="dash_title">дней</p>
						</div>
						
						<div class="dash hours_dash col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
							<div class="row">
							
								<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['hours'][0]?></div>
								<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['hours'][1]?></div>
							</div>
							<p class="dash_title">часов</p>
						</div>
						<div class="dash minutes_dash col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
							<div class="row">
						
								<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['mins'][0]?></div>
								<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['mins'][1]?></div>
							</div>
								<p class="dash_title">минут</p>
						</div>
						
						<div class="dash seconds_dash col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
							<div class="row">
							
								<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['secs'][0]?></div>
								<div class="digit col-lg-6 col-md-6 col-sm-6 col-xs-6"><?=$date['secs'][1]?></div>
							</div>
							<p class="dash_title">секунд</p>
						</div>
					</div>
					
					
										<script language="javascript" type="text/javascript">
											jQuery(document).ready(function() {
												$('#countdown_dashboard').countDown({
													targetDate: {
														'day': 		<?=$config['targetDate']['day']?>,
														'month': 	<?=$config['targetDate']['month']?>,
														'year': 	<?=$config['targetDate']['year']?>,
														'hour': 	<?=$config['targetDate']['hour']?>,
														'min': 		<?=$config['targetDate']['minute']?>,
														'sec': 		<?=$config['targetDate']['second']?>
													}
												});
												
												// Функции подписки
												/*$('#email_field').focus(email_focus).blur(email_blur);
												$('#subscribe_form').bind('submit', subscribe_submit);*/
											});
										</script>
				</div>
								
								
				<div class="form">
						<div id="messegeResult2" style="height: 30px;">
							<p class="zakazat-result" id="zakazat-result" > Оставьте ваши контакты и наш консультант свяжется с вами </p>
						</div>
						   
						<form method="post" action=""  class="formMain" id="formMain2" name="formMain2">
						<label for="text-inpt2 ">Ваше имя</label>
							<input id="text-inpt2" type="text" name="text-inpt2" placeholder="" maxlength="30" autocomplete="off" required/>
						<label for="text-inpt2 ">Телефон</label>
							<input id="phone-inpt2" type="Tel" name="phone-inpt2" placeholder="" maxlength="30" autocomplete="off" required/>
						<label for="text-inpt2 ">Ваш сайт</label>
							<input id="site-inpt2" type="url" name="site-inpt2" placeholder="" maxlength="30" autocomplete="off" required/>
							<input style="border: 1px solid #fff;"  class="btn-zakazat" id="button2" type="button"  value="Заказать" onclick="AjaxFormRequest('messegeResult2', 'formMain2', 'form2.php')"/>
						</form>
						  <script>
										$(function(){
											$('#button2').click(function(){
												if($('#text-inpt2').val() == "")
												$('#text-inpt2').css({'border' : '1px solid red'});
												
												if($('#phone-inpt2').val() == "")
												$('#phone-inpt2').css({'border' : '1px solid red'});
											
												if($('#site-inpt2').val() == "")
												$('#site-inpt2').css({'border' : '1px solid red'});
											
											if(($('#text-inpt2').val() != "") && ($('#phone-inpt2').val() != "") && ($('#site-inpt2').val() != ""))
											{$('#zakazat-result').hide();
											 $('#zakazat-result').show(1000).text("Сообщение успешно отправлено");
											 $('#text-inpt2').val("") ;
											 $('#phone-inpt2').val("") ;
											 $('#site-inpt2').val("") ;
											}
											else {$('#zakazat-result').hide();
												 $('#zakazat-result').show().text("Заполните все поля");
											}
										
											});
											
											
											
											$( "#text-inpt2" ).change(function() {
												$('#text-inpt2').css({'border' : 'none'});
											});
											$( '#phone-inpt2' ).change(function() {
												$('#phone-inpt2').css({'border' : 'none'});
											});
											$( '#site-inpt2' ).change(function() {
												$('#site-inpt2').css({'border' : 'none'});
											});
											
										});
									  </script>
			    </div>
			</div>
		</div>
		
		<div class="container-fluid" id="popular-services">
			<h4 class="text-uppercase text-center">Популярные услуги<h4>
			<div class="container">
				<div class="row" id="services-names">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="images/Rectangle-17.png" />
						<p><a href="http://up-site.com.ua/posts/partnerskaya-programma" target="_blank">Партнерская программа</a></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="images/Rectangle-17-copy1.png" />
						<p><a href="http://up-site.com.ua/posts/naming" target="_blank">Нейминг</a></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="images/Rectangle-17-copy-2.png" />
						<p><a href="http://up-site.com.ua/posts/SMMSMM" target="_blank">SMM</a></p>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="container-fluid" id="footer">
			<div class="navbar navbar-default" id="footer-nav-bar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu2">
								<span class="">Меню</span>
								
						</button>
					</div>
					<div class="" id="footer-menu">
						<div class="collapse navbar-collapse" id="responsive-menu2">
							<ul class="nav navbar-nav">
								<li><a href="#about-company-in-numbers">О компании</a></li>
								<li><a href="#adaptation">Устройства</a></li>
								<li><a href="#mobile-optimization-profit">Преимущества</a></li>
								<li><a href="#auditory">Целевая аудитория</a></li>
								<li><a href="#our-clients">Клиенты</a></li>
								<li><a href="#thanks">Отзывы</a></li>
								<li><a href="#map">Контакты</a></li>
							</ul>
						</div>
							 <script>
													var $page = $('html, body');
									$('a[href*="#"]').click(function() {
										$page.animate({
											scrollTop: $($.attr(this, 'href')).offset().top
										}, 1000);
										return false;
									});
			                  	</script>
					</div>
				</div>
				
				
				
				<div class="container">
					<div class="" id="footer-img" style="position: relative;">
						<ul class="nav navbar-nav">
				<li><a href="#" target="_blank"><img id="fcb-icon" src="images/facebook-drawn-logo.png"/></a>
				<a href="#" target="_blank"><img src="images/instagram-draw-logo.png"/></a>
				<p class="text-center">Сделано с любовью</p></li>
				<li id="heart-img">
							<button style="position: relative; padding: 0; border: none; background: #fff; outline: none;" type="button" class="" data-container="body" data-toggle="popover" data-placement="top" 	 id="heart-btn"	  
							data-content="Всегда делай добрые дела и начни прямо сейчас!" >
									<img src="images/pink-heart-md.png" style="outline: none;"><p>Нажми<br/> на<br/> меня</p>
				
							</button>
												
				</li>
				<li><a href="#" target="_blank"><img id="vk-icon" src="images/vk-draw-logo.png"/></a>
				<a href="#" target="_blank"><img src="images/youtube-logo.png"/></a>
							<p class="text-center">Up-Site</p></li>
							
						</ul>
						<script>
						$(function(){
							$('#pos-blue-block').hide();
							var pos_blue_block_counter=0;
							var arr = ["А можно еще раз?","Ой спасибо тебе огромное","Вот молодец","Настоящий добродетель","Ты на верном пути ","Еще немного ","Кнопка заказать услугу выше)","О да ","Мне бы твое терпение ","Ты еще тут?",
							"Пусть сбудутся все твои светлые мечты ","Улыбнись ","Не стесняйся улыбнись во все лицо)",
							"Улыбнись тому кто рядом с тобой","Всегда делай добрые дела и начни прямо сейчас!"];

							$('#heart-btn').click(function(){
								
							$('#pos-blue-block').fadeIn(1000);
							$('#pos-blue-block p').text(arr[pos_blue_block_counter]);
							pos_blue_block_counter++;
							});
						});
						</script>
						<div class="container" id="pos-blue-block">
				           <p>Всегда делай добрые дела и начни прямо сейчас!</p>
			            </div>
	
 

						
					</div>
				</div>
		    </div>
			
		</div>
		
		 

		
    <script src="jquery.data-parallax.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
	
  </body>
</html>