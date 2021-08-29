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

    <title>Условия возврата</title>
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

	<table id="shops" style="border: 3px solid brown; margin-top: 60px; border-collapse: collapse; margin-right: 20px;">
    <tr>
    <td style="padding: 20px; background-color: lightgrey; color: black; text-align: center; width: 33%;"><strong>Киев, ТРК Караван, ул. Луговая, 12</strong></td>
    <td style="padding: 20px; background-color: lightgrey; color: black; text-align: center; width: 33%;">с 10:00 до 22:00, без выходных</td>
    <td style="padding: 20px; background-color: lightgrey; color: black; width: 33%; text-align: center;">(057) 750-50-50</th>
    </td>
    <tr>
    <td style="padding: 20px; background-color: white; color: black; text-align: center; width: 33%;"><strong>Львов, ТРЦ Lavina Mall, ул. Берковецкая, 6Д</strong></td>
    <td style="padding: 20px; background-color: white; color: black; text-align: center; width: 33%;">с 10:00 до 22:00, без выходных</td>
    <td style="padding: 20px; background-color: white; color: black; text-align: center; width: 33%;">(073) 777-88-88</td>
    </tr>
    <tr>
    <td style="padding: 20px; background-color: lightgrey; color: black; text-align: center; width: 33%;"><strong>Полтава, ТРЦ Ocean Plaza, ул. Антоновича, 176</strong></td>
    <td style="padding: 20px; background-color: lightgrey; color: black; text-align: center; width: 33%;">с 10:00 до 22:00, без выходных</td>
    <td style="padding: 20px; background-color: lightgrey; color: black; text-align: center; width: 33%;">(099) 777-88-88</td>
    </tr>
    <tr>
    <td style="padding: 20px; background-color: white; color: black; text-align: center; width: 33%;"><strong>Харьков, ТРЦ Дафи, улица Героев Труда, 9</strong></td>
    <td style="padding: 20px; background-color: white; color: black; text-align: center; width: 33%;">с 10:00 до 22:00, без выходных</td>
    <td style="padding: 20px; background-color: white; color: black; text-align: center; width: 33%;">(099) 777-88-88</td>
    </tr>
    </table>
</div>

<?php 
include("include/block-footer.php"); 
?>
</div>

</body>
</html>