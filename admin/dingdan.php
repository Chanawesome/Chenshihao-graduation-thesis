<?php 
include("../conn.php");
$id=$_GET[id];
$cz=$_GET[action];
 $zt="已发货";
 
 $kuaidi=$_POST[kuaidi];
 $kdanhao="";
 $kdanhao=$_POST[kdanhao];
if( $cz=="xs")
{
   if( $id=="")
   {
 
    }
    else
   {  
$SQL="update dingdan set zt='".$zt."',kuaidi='".$kuaidi."',kdanhao='".$kdanhao."' where id='". $id."'"; 
     }
       $sql=mysql_query( $SQL,$conn); 
	
	//	echo $SQL; 
echo "<script>alert('恭喜，操作成功!');window.history.back();</script>"; 
   	exit;
}
  if( $cz=="mod")
 {
  if( $id!="")
 {
  $sql="select * from dingdan where id=".$id;
 $sqlex=mysql_query($sql,$conn);
 $info=mysql_fetch_array($sqlex);
 
 $zt=$info[zt];
 $kuaidi=$info[kuaidi];
 $kdanhao=$info[kdanhao];
 }
}
?><html>
  <head>

   <title>订单信息管理页面</title>
 <script src="css/laydate.js" type="text/javascript"></script>  
 <link href="css/gzf.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
<body >

 <div class="bodydiv">
  <form method="post" name="dingdan"   action="dingdan.php?action=xs&id=<?php echo $id?>">
  <table class="myTab" cellpadding="4" cellspacing="1">
 <tr class="myTRHead">
   <td class="myTDHead"  colspan="2" >订单信息管理页面</td>
  </tr>
 
  <tr>
   <td  align="right">快递:</td>
    <td align="left" >  <input name='kuaidi' type='text' id='kuaidi' value='<?php echo $kuaidi ?>' class="txtcss" />
 </td> 
  </tr>
  <tr>
   <td  align="right">快递单号:</td>
    <td align="left" >  <input name='kdanhao' type='text' id='kdanhao' value='<?php echo $kdanhao ?>' class="txtcss" />
 </td> 
  </tr>
<tr  >
    <td   align="right"></td>
    <td align="left">
                    <input type="submit" name="Submit" value="提交" onclick="return check();" class="btn"/>
 </td>
     </tr>

    </table>
</div>
     </form>
</body>
</html>

