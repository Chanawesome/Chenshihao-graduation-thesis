
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
    <td width="100%" height="34" class="menu_bar"> 订单详情</td>
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