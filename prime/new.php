<?php	
   include("include/db_conect.php");
  	$sorting=$_GET["sort"];
  	switch ($sorting) {
  		case 'price-asc':
  			$sorting='price ASC';
  			$sort_name='От дешовых к дорогим';
  			break;
  		case 'price-desc':
  			$sorting='price DESC';
  			$sort_name='От дорогих к дешовым';
  			break;
  			case 'pupylar':
  			$sorting='count DESC';
  			$sort_name='Популярные';
  			break;
  			case 'new':
  			$sorting='datatime DESC';
  			$sort_name='Новинки';
  			break;

  			case 'alphavit':
  			$sorting='brand';
  			$sort_name='От А до Я';
  			break;
  			default:
  			$sorting='products_id DESC';
  			$sort_name='Нет сортировки';
  			break;
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
	<div id="block-sorting">
<p id="nav-breadcrumbs"><a href="index.php">Главня страница</a> \ <span>Все товары</span></p>
<ul id="option">
	<li>Вид</li>
	<li><img id="style-grid" src="/images/icon-grid.png"></li>
	<li><img id="style-list" src="/images/icon-list.png"></li>
	<li>Сортировать -</li>
	<li ><a id="select-sort"> <?php echo $sort_name; ?></a>
		<ul id="sorting-list">
			<li><a href="index.php?sort=price-asc">От дешовых к дорогим</a></li>
			<li><a href="index.php?sort=price-desc">От дорогих к дешовым</a></li>
			<li><a href="index.php?sort=pupylar">Популярные</a></li>
			<li><a href="index.php?sort=new">Новинки</a></li>
			<li><a href="index.php?sort=alphavit">От А до Я</a></li>
			</ul>
	</li>
</ul>
</div>
<ul id="block-tovar">
<?php
$result = mysql_query("SELECT * FROM table_products WhERE new='1' ORDER BY $sorting ", $link);

if (mysql_num_rows($result) > 0) {
	$row = mysql_fetch_array($result);
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
		<p class="style-title"><a href="">'.$row["title"].'</a></p>
		<ul class="reviews-counts">
		<li><img src="/images/eye-icon.png" /><p>0</p></li>
		<li><img src="/images/comment-icon.png"><p>0</p></li>
		</ul>
		<a class="add-cart"></a>
		<p class="style-price"><strong>'.$row["price"].' грн.</strong></p>
		<div class="mini-features">'.$row["mini_fetures"].'</div>
		</li>';
	}
	while ($row = mysql_fetch_array($result));
}
?>
</ul>
<ul id="block-tovar-list">
<?php
$result = mysql_query("SELECT * FROM table_products WhERE new='1' ORDER BY $sorting ", $link);

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
		<li><img src="/images/eye-icon.png" /><p>0</p></li>
		<li><img src="/images/comment-icon.png"><p>0</p></li>
		</ul>
		<p class="style-title-list"><a href="">'.$row["title"].'</a></p>
		<a class="add-cart-list"></a>
		<p class="style-price-list"><strong>'.$row["price"].' грн.</strong></p>
		<div class="style-text-list">'.$row["mini_description"].'</div>
		</li>';
	}
	while ($row = mysql_fetch_array($result));
}
?>
</ul>
</div>
<?php
include("include/block-footer.php");
?>
</div>
</body>
</html>