<?php
error_reporting(E_ALL ^ E_NOTICE);

$conn=@mysql_connect("localhost","root","root") or die("数据库操作失败".mysql_error());
mysql_select_db("yp",$conn) or die("数据库操作失败".mysql_error());
mysql_query('set names utf8');
@extract($_POST);
@extract($_GET);
 
?>
