
<?php
session_start();
require 'header.php';   
include("conn.php");
?>
<!DOCTYPE html>
<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		   <link href="CSS/login.css" rel="stylesheet" type="text/css" />
		  <link href="images/css.css" rel="stylesheet" type="text/css">
	</head>
	
 
   <div class="cls">	 </div>
 <body>
<div id="login">

  <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="100%" height="34" class="menu_bar"> 订单信息管理</td>
  </tr></table>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
 <th align="left" scope="col">订单号</th>
       <th align="left" scope="col">用户名</th>
       <th align="left" scope="col">收货人姓名</th>
       <th align="left" scope="col">地址</th>
       <th align="left" scope="col">联系人电话</th>
       <th align="left" scope="col">邮编</th>
       <th align="left" scope="col">状态</th>
	
	       <th align="left" scope="col">快递</th>
       <th align="left" scope="col">单号</th>
	
					                  <td align=left>操作</td>
					              </tr>
								  <?php
								  $sql="select * from dingdan where   username='$_SESSION[username]'";


			$result=mysql_query($sql,$conn);
			while($data=mysql_fetch_array($result))
{
								  ?>
	
<td><?php echo $data[danhao]?></td>
<td><?php echo $data[username]?></td>
<td><?php echo $data[xingming]?></td>
<td><?php echo $data[address]?></td>
<td><?php echo $data[tel]?></td>
<td><?php echo $data[code]?></td>
<td><?php echo $data[zt]?></td>

<td><?php echo $data[kuaidi]?></td>
<td><?php echo $data[kdanhao]?></td>



<td align=left><a href="ddxq.php?id=<?php echo $data[danhao]?>">查看详情</a> </td>
								  </tr>
<?php
}
	?>
		        			</table>
</div>
 
</body>