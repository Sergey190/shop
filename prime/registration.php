<?php
session_start();
include("include/db_conect.php");
   include("function/function.php");
   include("include/auth_cookie.php");   
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="trackbar/trackbar.css">
	<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script> 
    <script type="text/javascript" src="/js/jcarousellite_1.0.1.js"></script> 
    <script type="text/javascript" src="/js/shop-script.js"></script>
    <script type="text/javascript" src="/js/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="/trackbar/jquery.trackbar.js"></script>
    <script type="text/javascript" src="/js/jquery.validate.js"></script>
    <script type="text/javascript" src="/js/jquery.form.js"></script>
       <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#reg_phone").mask("+38 (999) 999-99-99");
  
      });
    </script>
        <script type="text/javascript">
$(document).ready(function() {	
      $('#form_reg').validate(
				{	
					// правила для проверки
					rules:{
						"reg_login":{
							required:true,
							minlength:5,
                            maxlength:15,
                            remote: {
                            type: "post",    
		                    url: "/reg/check_login.php"
		                            }
						},
						"reg_pass":{
							required:true,
							minlength:7,
                            maxlength:15
						},
						"reg_surname":{
							required:true,
                            minlength:3,
                            maxlength:15
						},
						"reg_name":{
							required:true,
                            minlength:3,
                            maxlength:15
						},
						"reg_patronymic":{
							required:true,
                            minlength:3,
                            maxlength:25
						},
						"reg_email":{
						    required:true,
							email:true
						},
						"reg_phone":{
							required:true
						},
						"reg_address":{
							required:true
						},
						"reg_captcha":{
							required:true,
                            remote: {
                            type: "post",    
		                    url: "/reg/check_captcha.php"
		                    
		                            }
                            
						}
					},

					// выводимые сообщения при нарушении соответствующих правил
					messages:{
						"reg_login":{
							required:"Укажите Логин!",
                            minlength:"От 5 до 15 символов!",
                            maxlength:"От 5 до 15 символов!",
                            remote: "Логин занят!"
						},
						"reg_pass":{
							required:"Укажите Пароль!",
                            minlength:"От 7 до 15 символов!",
                            maxlength:"От 7 до 15 символов!"
						},
						"reg_surname":{
							required:"Укажите вашу Фамилию!",
                            minlength:"От 3 до 20 символов!",
                            maxlength:"От 3 до 20 символов!"                            
						},
						"reg_name":{
							required:"Укажите ваше Имя!",
                            minlength:"От 3 до 15 символов!",
                            maxlength:"От 3 до 15 символов!"                               
						},
						"reg_patronymic":{
							required:"Укажите ваше Отчество!",
                            minlength:"От 3 до 25 символов!",
                            maxlength:"От 3 до 25 символов!"  
						},
						"reg_email":{
						    required:"Укажите свой E-mail",
							email:"Не корректный E-mail"
						},
						"reg_phone":{
							required:"Укажите номер телефона!"
						},
						"reg_address":{
							required:"Необходимо указать адрес доставки!"
						},
						"reg_captcha":{
							required:"Введите код с картинки!",
                            remote: "Не верный код проверки!"
						}
					},
					
	submitHandler: function(form){
	$(form).ajaxSubmit({
	success: function(data) { 
								 
        if (data == 'true')
    {
       $("#block-form-registration").fadeOut(300,function() {
        
        $("#reg_message").addClass("reg_message_good").fadeIn(400).html("Вы успешно зарегистрированы!");
        header( 'Location: /index.php', true, 303 );
        $("#form_submit").hide();
        
       });
         
    }
    else
    {
       $("#reg_message").addClass("reg_message_error").fadeIn(400).html(data); 
    }
		} 
			}); 
			}
			});
    	});
     
</script>

	<title>Регистрация</title>
</head>
<body  >
	<div id="syka">
<div>
<div id="block-body">
<?php
include("include/block-header.php");
?>
<div id="block-right">
	<?php

?>

</div>

<form method="post" id="form_reg" action="/reg/handler_reg.php">
<p id="reg_message"></p>
<div id="block-form-registration">
	
<ul id="form-registration">
 <legend class="m-b-1 ">Регистрация</legend>
<li>
<span class="star" >*</span>
<input type="text" name="reg_login" id="reg_login" placeholder="Логин" />
</li>

<li>
<span class="star" >*</span>
<input type="password" name="reg_pass" id="reg_pass" placeholder="Пароль"/>

</li>

<li>
<span class="star" >*</span>
<input type="text" name="reg_surname" id="reg_surname" placeholder="Фамилия" />
</li>

<li>
<span class="star" >*</span>
<input type="text" name="reg_name" id="reg_name" placeholder="Имя" />
</li>

<li>
<span class="star" >*</span>
<input type="text" name="reg_patronymic" id="reg_patronymic" placeholder="Отчество" />
</li>

<li>
<span class="star" >*</span>
<input type="text" name="reg_email" id="reg_email"  placeholder="E-mail"/>
</li>

<li>
<span class="star" >*</span>
<input type="text" name="reg_phone" id="reg_phone" placeholder="Мобильный телефон" />
</li>

<li>
<span class="star" >*</span> 
<input type="text" name="reg_address" id="reg_address" placeholder="Адрес доставки" />
</li>

<li>

<p align="right"><input type="submit" name="reg_submit" id="form_submit" value="Регистрация" /></p>
</div>
</li>

</ul>

</div>



</form>
</div>
</div>

</div>
</body>
</html>