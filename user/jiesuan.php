
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
   
	$uM=$_SESSION['username'];
 
	$xingming=$_POST[xingming]; 
	$address=$_POST[address]; 
	$tel=$_POST[tel]; 
	$code=$_POST[code];
	$zt="待发货";
 
	$danhao = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
	 
	$SQL= "insert into dingdan(danhao,username,xingming,address,tel,code,zt)values('".$danhao."','".$uM."','".$xingming."','".$address."','".$tel."','".$code."','".$zt."')";
	echo $SQL;
	$sql=mysql_query( $SQL,$conn); 
	
	$SQL= "update gouwuche set zt='已支付',danhao='".$danhao."' where username='".$uM."' and zt='未支付' ";
	$sql=mysql_query( $SQL,$conn); 
	
	//	echo $SQL;
echo "<script>alert('操作成功');window.location='BM_List2.php';</script>";
}
?>