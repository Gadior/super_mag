<?php 

if(!empty($_POST['name']) && ($_POST['number']) && (empty($_POST['email'])) && (empty($_POST['text'])))
{
$name = $_POST['name'];
$number = $_POST['number'];

$mail = "sword41@mail.ru";
$sub = "Заявка с сайта";
$massage = "Привет! \n <br>
			Тебе пришло уведомление с сайта!\n <br>
			Контакт оставил имя: ". $name . "<br>\n"
			. "Контакт оставил телефон: " . $number . "<br>\n";





mail($mail, $sub, $massage, "Content-type:text/plain; charset = UTF-8\r\nFrom:sword41@mail.ru");
	}

if(!empty($_POST['name']) && ($_POST['number']) && (!empty($_POST['email'])) && (!empty($_POST['text'])) )
{
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$text = $_POST['text'];

$mail = "sword41@mail.ru";
$sub = "Заявка с сайта";
$massage = "Привет! \n <br>
			Тебе пришло уведомление с сайта!\n <br>
			Контакт оставил имя: ". $name . "<br>\n"
			. "Контакт оставил телефон: " . $number . "<br>\n"
			. "Контакт оставил email: " . $email . "<br>\n"
			. "Контакт оставил сообщение: " . $text . "<br>\n";





mail($mail, $sub, $massage, "Content-type:text/plain; charset = UTF-8\r\nFrom:sword41@mail.ru");
	}






 ?>


<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/main.css">
	<!-- Подключение библиотеки jQuery -->
	<script src=”//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js”></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

	<script src="js/jquery.maskedinput.min.js"></script>

	<title>Установка и настройка отопительных систем</title>

	<script type="text/javascript">
	   jQuery(function($){
	   $("#phone").mask("8 (999) 999-99-99");
	   });
	</script>

	<script type="text/javascript">
	   jQuery(function($){
	   $("#phone2").mask("8 (999) 999-99-99");
	   });
	</script>


</head>

<body>
	<div class="page_wrapper">
		<div class="header">
			<div class="realit">
				<img src="img/pic1.jpg" alt="">
				<div class="prime_menu">

					<div style="clear: both;"></div>
					<!-- Область меню  -->
					<div class="second_menu">
						<ul>
							<li><a href="#">О НАС</a></li>
							<li><a href="#">ГАРАНТИИ</a></li>
							<li><a href="#">НАШИ РАБОТЫ</a></li>
							<!--<li><a href="#">ПРАЙС</a></li>-->
							<li><a href="#">КАЛЬКУЛЯТОР РАБОТ</a></li>
						</ul>
					</div>

					<!-- Область контактов в меню -->

					<div class="contact">
						8 921 333 33 33 master@mail.ru 					
					</div>

					<!-- Иконка ВК -->
					<div class="contact1">
						<img src="img/icon_vk.png" alt="">
					</div>

					<!-- Заголовок -->

					<div class="zag">
						<h1>УСТАНОВКА И НАСТРОЙКА <br> ОТОПИТЕЛЬНЫХ СИСТЕМ</h3>
						</div>

						<!-- Текст на плашке -->

						<div class="zag_t">
							<p>Разработка, отладка и ввод в эксплуатацию отопительных систем для частных домов и котеджей. Срочный сервис, ремонт, обслуживание.</p>
						</div>

						<!-- Форма для данных -->

						<div class="forma" align="center">
							<p>ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</p>
							<form action="index.php" method="post" id="form">
								<input type="text" placeholder="ИМЯ" name="name"><br>
								<div class="otst"></div>
								<input type="text" id="phone" name="number" placeholder="НОМЕР ТЕЛЕФОНА"><br>
								<div class="otst"></div>
								<input type="submit" name="submit" id="submit" value="ЗАКАЗАТЬ">
							</form>

						</div>
					</div>



					<!-- Блок со вторым изображением //////////////// -->
					<div class="p2_pic">
						<img src="img/pic2.jpg" alt="">
						<div class="zag_p2">
							<h1>РАБОТА С НАМИ - ЭТО</h1>

							<div class="p2_spis">					
								<ul>
									<li>КОНТРОЛЬ КАЧЕСТВА ИСПОЛНЕНИЯ НА ВСЕХ ЭТАПАХ ПРОИЗВОДСТВА</li>
									<div style="padding-top: 25px;"></div>
									<li>МИРОВЫЕ БРЕНДЫ В МОНТАЖЕ</li>
									<div style="padding-top: 0px;"></div>
									<li>БЕСПЛАТНЫЙ ВЫЕЗД МАСТЕРА НА РЕМОНТ</li>
									<div style="padding-top: 20px;"></div>
									<li>1 И БОЛЕЕ ГОДА ГАРАНТИИ НА ОБОРУДОВАНИЕ</li>
								</ul>
							</div>

							<div class="p2_form">
							<form action="#">
								<input type="submit" value="ЗАДАТЬ ВОПРОС">
							</form>
							</div>

						</div>
					</div>
				</div>	


<!-- Блок со вторым изображением //////////////// -->
					<div class="p3_pic">
						<img src="img/pic3.jpg" alt="">
						<div class="zag_p3">
							<h1>НАШИ РАБОТЫ</h1>

							<div style="position: absolute; left: 85px; top:140px;"><a ><img src="img/nr1.png" alt="" ></a></div>
							
							<div style="position: absolute; left: 435px; top:140px;"> <a><img src="img/nr2.png" alt=""></a></div>

							<div style="position: absolute; left: 800px; top:140px;"> <a><img src="img/nr3.png" alt=""></a></div>

							<div style="position: absolute; left: 85px; top:390px;"> <a><img src="img/nr4.png" alt=""></a></div>

							<div style="position: absolute; left: 435px; top:390px;"> <a><img src="img/nr5.png" alt=""></a></div>

							<div style="position: absolute; left: 800px; top:390px;"> <a><img src="img/nr6.png" alt=""></a></div>						

							</div>

						</div>

						<!-- Блок со 3 изображением //////////////// -->
					<div class="p4_pic">
						<img src="img/pic4.jpg" alt="">
						<div class="zag_p4">
							<h1>НАШИ КОНТАКТЫ</h1>
							</div>

							<div class="zag_t1">
							ЗАЙДАЙТЕ НАМ ВОПРОС - 
							</div>

							<div>							
							<form action="index.php" method="post" id="form" class="p4_form">
								<input type="text" placeholder="ИМЯ" width="100px" name="name"><br>
								<div style="padding-top: 15px;"></div>
								<input type="text" placeholder="ВАШ EMAIL" name="email">
								<input type="text" id="phone2" name="number" placeholder="НОМЕР ТЕЛЕФОНА" style="margin-left: 10px;"><br>
								<div style="padding-top: 15px;"></div>
								<input type="textarea" placeholder="ВАШ ВОПРОС, ОТЗЫВ, ПРЕДЛОЖЕНИЕ" style="width: 450px; height: 150px;" name="text"><br>
								<div style="padding-top: 15px;"></div>
								<input type="submit" value="ЗАДАТЬ ВОПРОС">
							</form>
						</div>

						</div>

						



						</div>

						




					</div>
			</div>

		</div>
		<!--<script>
$(function(){
 ‘use strict’;
$(‘#form’).on(‘submit’, function(e){
 e.preventDefault();
 var fd = new FormData( this );
 $.ajax({
 url: ‘send.php’,
 type: ‘POST’,
 contentType: false, 
 processData: false, 
 data: fd,
 success: function(msg){
if(msg == ‘ok’) {
 $(“.button”).val(“Отправлено”); 
} else {
 $(“.button”).val(“Ошибка”);
 setTimeout(function() {$(“.button”).val(“Отправить”);}, 3000);
}
 }
 });
 });
});
</script>-->
	</body>

	</html>