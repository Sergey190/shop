<?php 
define('sneaker-shelter', true);
include("include/db_connect.php");
include("functions/functions.php");
session_start();
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

	<title>Условия возврата</title>
</head>

<body>

<div id="block-body">
<?php 
include("include/block-header.php") 
?>
<div id="block-right">
<?php 
	include("include/block-news.php");
?>
</div>

<div id="block-content">

<p style="margin-top: 10px; font: bold 17px sans-serif;" align="center">Правила возврата</p>
<br>
<p style="font: 16px lucida console;">Интернет магазин <strong>Sneaker Shelter</strong> работает в соответствии с украинским законодательством о защите прав потребителей. Срок возврата составляет 14 календарных дней с момента доставки.
Ваши действия в случае возврата товара:</p><br>

<ul style="font: 16px lucida console;">
<li>1.	Подготовить купленную вещь к возврату, а именно, упаковать товар в фирменную коробку или пакет Sneaker Shelter, полученный вами в момент поставки;</li>
<li>2.	Вложить бланк заказа, который был сформирован в момент оформления заказа и отправлен вам на электронную почту;</li>
<li>3.	Вложить заполненный бланк возврата;</li>
<li>4.	Обратиться в наш колл-центр по телефону (044) 500 60 00 и проинформировать менеджера о фактическом возврате товара и причинах такого возврата.</li>
</ul>
<br>
<p style="font: 16px lucida console;">
Товар может быть возвращен в том случае, если у товара сохранены товарный вид, упаковка, пломбы, ярлыки, а так же он не ношенный.
</p>
<br>
<p style="font: bold 15px lucida console;" align="center">СПОСОБЫ ВОЗВРАТА ТОВАРА</p>

<p style="font: 16px lucida console;">С учетом общих правил возврата товара, изложенных на сайте:</p><br>
<ul style="font: 16px lucida console;">
<li>-  Возвращаемый товар можно вернуть курьеру в случае если вы ожидаете следующую доставку и такой возврат будет осуществлен не позже 14 дней с момента предыдущей доставки. Курьером выдается товарно-транспортная накладная. Обязательно сохраните её.</li>
<li>-  Возвращаемый товар можно отправить любой удобной для вас курьерской службой на адрес склада: 04201,  г. Киев, ул. Полярная, 12.</li>
</ul>
<p style="font: 16px lucida console;"><u>Возврат товара оплачивается покупателем самостоятельно.</u></p><br>
<p style="font: 16px lucida console;">
<strong>Возврат денежных средств покупателю за возвращённый товар</strong> осуществляется в течение 14 банковских дней со дня получения товара работниками нашего склада, путем перечисления денежных средств на банковский счет, который указывается вами в бланке возврата. Мы не несем ответственности за неполучение вами денег, по причине ошибки при указании банковских реквизитов в бланке возврата.
В случае отсутствия предусмотренных на этом сайте документов, а так же если у товара не сохранен товарный вид, упаковка, пломбы, ярлыки, либо он ношенный, мы оставляем за собой право не принимать товар и не возвращать оплаченные денежные средства.
</p><br>
</div>

<?php 
include("include/block-footer.php"); 
?>
</div>

</body>
</html>