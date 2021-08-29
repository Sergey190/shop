<?php 
 include("include/db_conect.php");
   include("function/function.php");
    include("include/addtocart.php");
   include("include/auth_cookie.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="trackbar/trackbar.css">
	<link rel="shortcut icon" href="main.png" type="image/x-icon">

	<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/js/jcarousellite_1.0.1.js"></script>
	<script type="text/javascript" src="/js/shop-script.js"></script>
	<script type="text/javascript" src="/js/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="/trackbar/jquery.trackbar.js"></script>
	<script type="text/javascript" src="/js/TextChange.js"></script>

	<title>О Нас</title>
</head>
<div id="syka">
		
<div id="block-body">
<?php

include("include/block-header.php");

?>
<div id="block-right">
	<?php
include("include/block-category.php");
include("include/block-parameter.php");
?>

</div>

<div id="content">

	<hr style="margin-top: 33px;">
	<p style="margin-top: 60px; font: 16px lucida console" align="center">
	<strong>Prime</strong> — небольшая сеть магазинов в Украине с оригинальной цифровой техники для всех!
	Вся техника, представленная на сайте, доступна и в магазине. Здесь вам помогут подобрать качественій продукт, расскажут о представленных в Prime брендах, посоветуют, с чем лучше сочетать выбранную технику. В магазине к оплате принимаются как наличные, так и пластиковые карты.<br>
	Нас отличает высокий уровень сервиса и дополнительные выгодные предложения:</p><br>
	<p>
	<ul style="font: 16px lucida console; padding: 10px;" align="center">
	   <li style="margin-bottom: 5px;"><u>1. Бесплатная доставка по Украине в течение 3-4 дней без предоплаты товара;</u></li>
	   <li style="margin-bottom: 5px;"><u>2. Предоставление двух пар обуви для примерки (при доставке по Киеву);</u></li>
	   <li style="margin-bottom: 5px;"><u>3. Гарантия на всю технику;</u></li>
	   <li style="margin-bottom: 5px;"><u>4. Лояльная система возврата товара;</u></li>
	   <li style="margin-bottom: 5px;"><u>5. Дисконтная программа для постоянных клиентов;</u></li>
	</ul>
	</p>
	<p style="font: 16px lucida console" align="center">Звоните или пишите нам, опытные консультанты уточнят все детали заказа, ответят на ваши вопросы, а также дадут совет по сочетанию выбранной вами обуви с одеждой и аксессуарами!</p>
	<hr style="margin-top: 40px;">
</div>
<?php 
include("include/block-footer.php"); 
?>
</div>

</body>
</html>