
<?php  
include("../conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<html>
  <head>
    <base href="<%=basePath%>">
   <title>订单详情</title>
              <link href="css/gzf.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
<body >

 <div class="bodydiv">
 <table class="myTab" cellpadding="4" cellspacing="1">
<tr class="myTRHead">
 <td class="myTDHead"  >
订单详情 </td>
 </tr>
            <tr class="myTRHead">
            <td   align="left">
 <tr>
    <td align="left">
           <table cellspacing="0" cellpadding="4" border="0"  style="color:#333333;width:830px;border-collapse:collapse;text-align: left">
		<tr>
<td>商品名称</td>
	<td>用户名</td>
	<td>数量</td>
	<td>单价</td>
      <td>时间</td>
      <td>备注</td>
	   <td>小计</td>

		</tr>
  <?php
								
								  $id=$_GET[id];
								  $sql="select * from  v_dd where danhao='".$id."'";

								  $xiaoji=0;
								  $heji=0;
			$result=mysql_query($sql,$conn);
			while($data=mysql_fetch_array($result))
{
	

								  	$xiaoji=$data[danjia]*$data[shuliang];
									
								  	$heji=$heji+$xiaoji;
								  ?>
	
								<td><?php echo $data[mingcheng]?></td>
								
								<td><?php echo $data[username]?></td>
								
								<td><?php echo $data[shuliang]?></td>
								
								<td><?php echo $data[danjia]?></td>
								<td><?php echo $data[shijian]?></td>
								<td><?php echo $data[memo]?></td>
								<td><?php echo $xiaoji?></td>
								
								
								
								</tr>
								<?php
							}
							?>
		      </table>
     </div>
</body>
</html>

