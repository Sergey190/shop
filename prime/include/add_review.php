<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{

include("db_conect.php");
include("../function/function.php");

 $id = clear_string($_POST['id']);
 $name = iconv("UTF-8", "UTF-8",clear_string($_POST['name']));
 $good = iconv("UTF-8", "UTF-8",clear_string($_POST['good']));
 $bad =  iconv("UTF-8", "UTF-8",clear_string($_POST['bad']));
 $comment =  iconv("UTF-8", "UTF-8",clear_string($_POST['comment']));

    		mysql_query("INSERT INTO table_reviews(products_id,name,good_reviews,bad_reviews,comment,date)
						VALUES(						
                            '".$id."',
                            '".$name."',
                            '".$good."',
                            '".$bad."',
                            '".$comment."',
                             NOW()							
						)",$link);	

echo 'yes';
}
?>