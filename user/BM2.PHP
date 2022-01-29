
<?php
session_start();
include("conn.php");//引用数据库链接文件
header('content-type:text/html;charset=utf-8');  

date_default_timezone_set("PRC");
if($_SESSION[username]=="")
{
echo "<script>alert('登录后操作');window.history.back();</script>";
}
else
{ 
$id=$_GET[id]; 
 
 
	$shuliang=$_POST[num];
	$memo=$_POST[memo];
	$lshijian=date("Y/m/d");
 $sql="";  
	$uM=$_SESSION['username'];
	
	$zt="未支付";
	$SQL= "insert into gouwuche(bid,username,shuliang,memo,shijian,zt)values('".$id."','".$uM."','".$shuliang."','".$memo."','".$lshijian."','".$zt."')";
mysql_query( $SQL,$conn);//执行SQL语句
$_SESSION[uM]=$uM;
$_SESSION[username]=$uM;
	//	echo $SQL;
	echo "<script>alert('操作成功');window.location='gouwuche.php';</script>";
}
?>