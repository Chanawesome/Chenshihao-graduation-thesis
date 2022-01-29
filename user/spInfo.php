<?php 
require 'header.php';
include("conn.php");
if( $id!="")
{
	$sql="select * from shangping where id=".$id;
	$sqlex=mysql_query($sql,$conn);
	$info=mysql_fetch_array($sqlex);
	$id=$info[Id];
	
	$bianhao=$info[bianhao];
	$mingcheng=$info[mingcheng];
	$leibie=$info[leibie];
	$shuliang=$info[shuliang];
	$danjia=$info[danjia];
	$pic=$info[pic];
	$jieshao=$info[jieshao];
}
?>
 <!DOCTYPE html>
<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		  <link href="css/main.css" rel="stylesheet">
    <link href="css/Maste.css" rel="stylesheet" type="text/css" />
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
			
 .shuliang{
 	width: 100%;  
	float: left;
	padding-left: 100px;
	padding-top: 30px;
 
  }
 .shuliang span
 {
 	display: block;
 	margin-bottom: 10px;
  	font-size: 24px;
  	color: red;
  	float: left;
 }
 /*数字加减的css*/
 #demo-add{width:100px; 	float: left;} 
.gw_num{border: 1px solid #dbdbdb;width: 110px;line-height: 26px;overflow: hidden;margin-bottom:8px;}
.gw_num em{display: block;height: 26px;width: 26px;float: left;color: #7A7979;border-right: 1px solid #dbdbdb;text-align: center;cursor: pointer;font-style:normal;}
.gw_num .num{display: block;float: left;text-align: center;width: 52px;font-style: normal;font-size: 14px;line-height: 24px;border: 0;}
.gw_num em.add{float: right;border-right: 0;border-left: 1px solid #dbdbdb;}
/*数字加减的css*/


    </style> 
	 <script src="images/jquery.min.js" type="text/javascript"></script>
	</head>
	
  <body>
   <div class="cls">	 </div>

  <div class="newcontain">
        
 <center>

<div class="list-header clearfix">
 
</div>
    
     <div class="tit1">  <center>
      <table class="table" cellspacing="0" cellpadding="0" align="left"> 
             <tr>
                 <td rowspan="8" class="style4">
				
				 <img Height="308px" Width="387px" src="<?php echo $pic?>">
                   
                 </td>
                 <td class="style5">
                     名称：<?php echo $mingcheng ?>
                 </td>
             </tr>
            <tr>
                 <td class="style5">
类型：<?php echo $leibie ?>
                 </td>
             </tr>
             <tr>
                 <td class="style5">
数量：<?php echo $shuliang ?>
                 </td>
             </tr>
	 
			 <tr>
                 <td class="style5">
     单价：<?php echo $danjia ?>
                 </td>
             </tr>
  
 
				<form method="post" name="login" action="BM2.php?action=BM&id=<?php echo $id?>"> 
 

 

		 
 	<tr>
                 <td class="style5">
             <div id="demo-add">
  
        <div class="gw_num">
            <em class="jian">-</em>
           
           
            <input type="text" value=1 class="num" name="num" id="num"   />
            <em class="add">+</em>
        </div>


    
    </div>
                 </td>
             </tr>
			<tr>
                 <td class="style5">
备注：<input type="text" name="memo" autocomplete="off" placeholder="请输入备注"   style="border:0.5px solid #46B448;width: 150px;height: 25px;"  >
                 </td>
              </tr>	<tr>
                 <td class="style5">
           <input type="submit" name="Submit" value="加入购物车" onclick="return check();" class="btn"/>
                 </td>
             </tr>
			</form>
            </table>
			
			 <table class="table" cellspacing="0" cellpadding="0" align="left"> 
			  <tr>
                 <td class="style5">
                      介绍：
                 </td>
             </tr>
			  
			  <tr>
                 <td class="style5">
               <?php echo $jieshao?>
                 </td>
             </tr> 
             </table>
          </center>
 </div>
 
 

    </div>
    
          
                  <script type="text/javascript">
                      $(document).ready(function () {
                          //加的效果
                          $(".add").click(function () {
                              var n = $(this).prev().val();
                              var num = parseInt(n) + 1;
                              if (num == 0) { return; }
                              $(this).prev().val(num);
                              $("#num").val(num);
                          });
                          //减的效果
                          $(".jian").click(function () {
                              var n = $(this).next().val();
                              var num = parseInt(n) - 1;
                              if (num == 0) { return }
                              $(this).next().val(num);
                              $("#num").val(num);
                          });

                      })
    </script>   
	</body>