
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
		
		  <style type="text/css">
        .style2
    {
        font-size: 18pt;
    }
        .style4
        {
            width: 69px;
        }
    </style>
        <style type="text/css"> 
       .table 
       {
           width: 1000px;;
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .table thead tr th,
        .table tbody tr td {
            padding: 8px 12px;
          
            color: #333;
            border: 1px solid #ddd;
            border-collapse: collapse;
            background-color: #fff;
        }
            .style5
            {
                font-size: 14pt;
            }
            .style6
            {
                width: 100%;
            }
			
 
 


    </style> 
	</head>
	
 
   <div class="cls">	 </div>
 <body>
<div id="login">

  <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">




 <tr>
    <td width="100%" height="34" class="menu_bar"> 购物车信息</td>
  </tr>
 
</table>
    <table class=table  border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
<td>商品名称</td>
	<td>用户名</td>
	<td>数量</td>
	<td>单价</td>
      <td>时间</td>
      <td>备注</td>
	   <td>小计</td>
    <td>状态</td>
					                  <td align=left>操作</td>
					              </tr>
								  <?php
								  $sql="select * from  v_dd where zt='未支付' and username='$_SESSION[username]'";

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
								<td><?php echo $data[zt]?></td>
								
								<td align=left><a href="del.php?id=<?php echo $data[id]?>&tn=gouwuche">删除</a> </td>
								  </tr>
<?php
}
	?>
		        			</table>
							
							      <center>
    <table class=table cellpadding="4" cellspacing="1">
      
		 <tr>
            <td colspan="2">
			
		合计：<front color=Red><?php echo$heji?>元</front>
          </td>
             
        </tr>
		<form method="post" name="login" action="jiesuan.php">
	    <tr>
                 <td class="style5">
 收货人姓名： <input type="text" name="xingming" autocomplete="off" placeholder="收货人姓名"   style="border:0.5px solid #46B448;width: 150px;height: 25px;"  >
                 </td>
				 <td class="style5">
 地址： <input type="text" name="address" autocomplete="off" placeholder="地址"   style="border:0.5px solid #46B448;width: 150px;height: 25px;"  >
                 </td>
             </tr>
		    <tr>
                 <td class="style5">
联系人电话： <input type="text" name="tel" autocomplete="off" placeholder="联系人电话"   style="border:0.5px solid #46B448;width: 150px;height: 25px;"  >
                 </td>
				 <td class="style5">
邮编： <input type="text" name="code" autocomplete="off" placeholder="邮编"   style="border:0.5px solid #46B448;width: 150px;height: 25px;"  >
                 </td>
             </tr>
	 <tr>
            <td colspan="2">
			
			
			
		 <dl>
			<dd> <input type="submit" value="支付并清空购物车" class="button" />   </dd>
	 </dl>
	</form>
          </td>
             
        </tr>
		
		
		 <tr>
            <td>
                <img src="images/WX.png" style="width: 349px; height: 428px" /></td>
            <td>
                <img src="images/ZFB.png" style="width: 352px; height: 423px" /></td>
        </tr>
       
        <tr>
            <td>
           </td>
            <td align=left>
                 &nbsp;</td>
        </tr>
    </table>
    </center>
</div>
 
</body>