<?php 
 session_start();
   include("include/db_conect.php");
   include("function/function.php");
    include("include/addtocart.php");
   include("include/auth_cookie.php");

if ($_POST["send_message"])
{
    $error = array();
    
  if (!$_POST["feed_name"]) $error[] = "Укажите своё имя";  
  
  if(!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i",trim($_POST["feed_email"])))
  {
    $error[] = "Укажите корректный E-mail"; 
  }
   
  if (!$_POST["feed_subject"]) $error[] = "Укажите тему письма!";  
  if (!$_POST["feed_text"]) $error[] = "Укажите текст сообщения!";  
  
  if (strtolower($_POST["reg_captcha"]) != $_SESSION['img_captcha'])
  {
    $error[] = "Неверный код с картинки!";
  }  
   if (count($error))
   {
     $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";    
   }else
   {  
    $headers[] = 'From: {$_POST["feed_name"]} <{$_POST["feed_email"]}>';
    mail('crng2121@gmail.com', $_POST["feed_subject"], 'От: '.$_POST["feed_name"].'  Сообщение: '.$_POST["feed_text"]);

     $_SESSION['message'] = "<p id='form-success'>Ваше сообщение успешно отправлено!</p>";   
   }
} 
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
    <script type="text/javascript" src="/js/TextChange.js"></script>
  <title>Prim.ua</title>
</head>

<body  >
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

<div id="block-content">
<?php
   if(isset($_SESSION['message']))
	{
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	}
?>
<form method="post">
<div id="block-feedback">
<ul id="feedback">

<li><label>Ваше Имя</label><input type="text" name="feed_name"  /></li>
<li><label>Ваш E-mail</label><input type="text" name="feed_email"  /></li>
<li><label>Тема</label><input type="text" name="feed_subject"  /></li>
<li><label>Текст сообщения</label><textarea name="feed_text" ></textarea></li>

<li>

</div>
</li>

</ul>
</div>
<p align="right"><input type="submit" name="send_message" id="form_submit" /></p>
</form>

</div>

<?php 

include("include/block-footer.php"); 
?>
</div>

</body>
</html>