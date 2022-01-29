<?php
include("../conn.php");
header('content-type:text/html;charset=utf-8');  
$tn=$_GET[tn];
$id=$_GET[id];
$sql="update dingdan set zt='已发货' where id=".$id.""; 

 mysql_query( $sql,$conn);
 echo "<script>alert('操作成功');window.history.back();</script>";
echo $sql;
//echo "<script>window.history.back();</script>";
?>