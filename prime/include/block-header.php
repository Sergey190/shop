
<div id="test">
	<p align="right" id="block-basked"><img src="/images/2.png" /><a href="cart.php?action=oneclick" >Корзина пустая </a></p>

<p ><a href="index.php"><img id="log"  src="/images/1999.png" alt="Главная"></a> </p>

<div id="blok-serch">
	<form method="GET" action="search.php?q=">
		<span></span>
		<input type="text" name="q" id="input-search" placeholder="Поиск товаров"  value="<?php echo $search; ?>" />
		<input type="submit"  id="button-search" value="Найти">
	</form>
<ul id="result-search">


</ul>
	</div>

<?php

if ($_SESSION['auth'] == 'yes_auth')
{
 
 echo '<p id="auth-user-info" align="right"><img src="/images/user.png" />Здравствуйте: '.$_SESSION['auth_name'].'</p>';   
    
}else{
 
  echo '<p id="reg-auth-title" align="right"><a class="top-auth">Вход</a><a href="registration.php">Регистрация</a></p>';   
    
}
	
?>


<div id="block-top-auth">

<div class="corner"></div>

<form method="post">


<ul id="input-email-pass">

<h3>Вход</h3>

<p id="message-auth">Неверный Логин и(или) Пароль</p>

<li><center><input type="text" id="auth_login" placeholder="Логин или E-mail" /></center></li>
<li><center><input type="password" id="auth_pass" placeholder="Пароль" /><span id="button-pass-show-hide" class="pass-show"></span></center></li>

<ul id="list-auth">

<li><a id="remindpass" href="#">Забыли пароль?</a></li>
</ul>


<p align="right" id="button-auth" ><a>Вход</a></p>

<p align="right" class="auth-loading"><img src="/images/loading.gif" /></p>

</ul>
</form>


<div id="block-remind">
<h3>Восстановление<br /> пароля</h3>
<p id="message-remind" class="message-remind-success" ></p>
<center><input type="text" id="remind-email" placeholder="Ваш E-mail" /></center>
<p align="right" id="button-remind" ><a>Готово</a></p>
<p align="right" class="auth-loading" ><img src="/images/loading.gif" /></p>
<p id="prev-auth">Назад</p>
</div>
</div>


<div id="block-user" >
<div class="corner2"></div>
<ul>
<li><img src="/images/user_info.png" /><a href="profile.php">Профиль</a></li>
<li><img src="/images/logout.png" /><a id="logout" >Выход</a></li>
</ul>
</div>

<div class="holder">

	<p><span>(057)</span>   750-50-50</p>
<div class="block">
<h2><span>(099)</span> 777-88-88</h2>
<h2><span>(073)</span> 777-88-88</h2>
<h2><span>(098)</span> 777-88-88</h2>
</div>
</div>
</div>


 <?php
include("/tee.php");

?>
<div id="top-menu">
 <ul>

 	<input type="submit" value="Главная"  title="Главная" onClick='location.href="index.php"'>
 	<input type="submit" value="Новинки" title="Новинки" onClick='location.href="view_aystopper.php?go=news"'>
 	<input type="submit" value="Лидер продаж" title="Лидер продаж" onClick='location.href="view_aystopper.php?go=leaders"'>
 	<input type="submit" value="Распродажа" title="Распродажа" onClick='location.href="view_aystopper.php?go=sale"'>

<hr>
 </ul>

</div>
