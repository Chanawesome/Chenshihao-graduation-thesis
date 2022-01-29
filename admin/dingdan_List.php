<?php  
include("../conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<html>
  <head>
    <base href="<%=basePath%>">
   <title>订单信息管理</title>
              <link href="css/gzf.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
<body >

 <div class="bodydiv">
 <table class="myTab" cellpadding="4" cellspacing="1">
<tr class="myTRHead">
 <td class="myTDHead"  >
订单信息管理 </td>
 </tr>
            <tr class="myTRHead">
            <td   align="left">
 <tr>
    <td align="left">
           <table cellspacing="0" cellpadding="4" border="0"  style="color:#333333;width:830px;border-collapse:collapse;text-align: left">
		<tr>
  <th align="left" scope="col">订单号</th>
       <th align="left" scope="col">用户名</th>
       <th align="left" scope="col">收货人姓名</th>
       <th align="left" scope="col">地址</th>
       <th align="left" scope="col">联系人电话</th>
       <th align="left" scope="col">邮编</th>
       <th align="left" scope="col">状态</th>
		
	       <th align="left" scope="col">快递</th>
       <th align="left" scope="col">单号</th>
	 
        <th scope="col">操作</th>

		</tr>
 <?php
 $sql="select * from dingdan order by id DESC";
$result=mysql_query($sql,$conn);
while($data=mysql_fetch_array($result))
{
?>
		<tr>
<td><?php echo $data[danhao]?></td>
<td><?php echo $data[username]?></td>
<td><?php echo $data[xingming]?></td>
<td><?php echo $data[address]?></td>
<td><?php echo $data[tel]?></td>
<td><?php echo $data[code]?></td>
<td><?php echo $data[zt]?></td>

<td><?php echo $data[kuaidi]?></td>
<td><?php echo $data[kdanhao]?></td>
<td><a href=ddxq_List.php?action=mod&id=<?php echo $data[danhao]?>&tn=shangping">详情</a>  

<a href="dingdan.php?id=<?php echo $data[id]?>&tn=shangping" onClick="return confirm('真的要发货？')">发货</a></td>
		  </tr>
		   <?php 
		    }
		      ?>
		      </table>
     </div>
</body>
</html>

