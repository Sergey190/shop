<?php	
  session_start();
   include("include/db_conect.php");
   include("function/function.php");
include("include/auth_cookie.php");
   $cat = clear_string($_GET["cat"]);
   $type = clear_string($_GET["type"]);
   
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
<script type="text/javascript">
$(document).ready(function(){
 
$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});
 
$('.scrollup').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
});
 
});
</script>
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

if ($_GET["brand"])
  {
      $check_brand = implode(',',$_GET["brand"]);
  } 
  
  $start_price = (int)$_GET["start_price"];
  $end_price = (int)$_GET["end_price"];


  if (!empty($check_brand) OR !empty($end_price))
  {
    
    if (!empty($check_brand)) $query_brand = " AND brand_id IN ($check_brand)";
    if (!empty($end_price)) $query_price = " AND price BETWEEN $start_price AND $end_price";
    if(isset($_POST["brand"])){
    	$brand_filter= implode("','", $_POST["brand"]);
    	
    }
    
    
  }
  



$result = mysql_query("SELECT * FROM table_products WhERE visible='1' $query_brand $query_price ORDER BY products_id DESC ", $link);

if (mysql_num_rows($result) > 0) {
	$row = mysql_fetch_array($result);
	echo '<div id="block-sorting">
<p id="nav-breadcrumbs"><a href="index.php">Главня страница</a> \ <span>Все товары</span></p>
<ul id="option">
	<li>Вид</li>
	<li><img id="style-grid" src="/images/icon-grid.png"></li>
	<li><img id="style-list" src="/images/icon-list.png"></li>
	<li>Сортировать -</li>
	<li ><a id="select-sort">'.$sort_name.'</a>
		<ul id="sorting-list">
			<li><a href="view_cat.php?'.$catlink.'type='.$type.'&sort=price-asc">От дешовых к дорогим</a></li>
			<li><a href="view_cat.php?'.$catlink.'type='.$type.'&sort=price-desc">От дорогих к дешовым</a></li>
			<li><a href="view_cat.php'.$catlink.'type='.$type.'&?sort=pupylar">Популярные</a></li>
			<li><a href="view_cat.php?'.$catlink.'type='.$type.'&sort=new">Новинки</a></li>
			<li><a href="view_cat.php?'.$catlink.'type='.$type.'&sort=alphavit">От А до Я</a></li>
			</ul>
	</li>
</ul>
</div>
<ul id="block-tovar">
';
	do
	{
if  ($row["image"] != "" && file_exists("./uploads_images/".$row["image"]))
{
	$img_path = './uploads_images/'.$row["image"];
$max_width = 150; 
$max_height = 160; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
$width = intval($ratio*$width); 
$height = intval($ratio*$height);    
}else
{
$img_path = "/images/no-image.png";
$width = 110;
$height = 200;
} 


		echo '<li>
		<div class="block-images-grid">
		<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
		</div>
		<p class="style-title"><a href="view_content.php?id='.$row["products_id"].'" >'.$row["title"].'</a></p>
		<ul class="reviews-counts">
		<li><img src="/images/eye-icon.png" /><p>'.$row["count"].'</p></li>
  
		</ul>
		<a class="add-cart-style-grid" tid="'.$row["products_id"].'"></a>
		<p class="style-price"><strong>'.group_numerals($row["price"]).' грн.</strong></p>
		<div class="mini-features">'.$row["mini_features"].'</div>
		<div class="nal">'.$row["nalichie"].'</div>
		</li>';
	}
	while ($row = mysql_fetch_array($result));

?>
</ul>
<ul id="block-tovar-list">
<?php
$result = mysql_query("SELECT * FROM table_products WhERE visible='1' $query_brand $query_price ORDER BY products_id DESC ", $link);

if (mysql_num_rows($result) > 0) {
	$row = mysql_fetch_array($result);
	do
	{
if  ($row["image"] != "" && file_exists("./uploads_images/".$row["image"]))
{
	$img_path = './uploads_images/'.$row["image"];
$max_width = 120; 
$max_height = 130; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
$width = intval($ratio*$width); 
$height = intval($ratio*$height);    
}else
{
$img_path = "/images/noimages80x70.png";
$width = 140;
$height = 180;
} 


		echo '<li>
		<div class="block-images-list">
		<img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
		</div>
		<ul class="reviews-counts-list">
		<li><img src="/images/eye-icon.png" /><p>'.$row["count"].'</p></li>

		</ul>
		<p class="style-title-list"><a href="view_content.php?id='.$row["products_id"].'" >'.$row["title"].'</a></p>
		<a class="add-cart-style-list" tid="'.$row["products_id"].'"></a>
		<p class="style-price-list"><strong>'.group_numerals($row["price"]).' грн.</strong></p>
		<div class="style-text-list">'.$row["mini_description"].'</div>
		</li>';
	}
	while ($row = mysql_fetch_array($result));
}
}else
{
    echo '<h3>Категория не доступна или не создана!</3>';
} 
?>

</ul>
</div>
</div>
<?php
include("include/block-footer.php");
?>
</div>
</body>
<a href="#" class="scrollup">Наверх</a>
</html>