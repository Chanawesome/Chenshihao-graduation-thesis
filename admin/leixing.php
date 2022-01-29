<?php 
include("../conn.php");
$id=$_GET[id];
$cz=$_GET[action];
 $leixing="";
 $leixing=$_POST[leixing];
if( $cz=="xs")
{
   if( $id=="")
   {
$SQL= "insert into leixing(leixing)values('".$leixing."')";
    }
    else
   {  
$SQL="update leixing set id='".$id."',leixing='".$leixing."' where id='". $id."'"; 
     }
       $sql=mysql_query( $SQL,$conn); 
 	echo "<script>alert('恭喜，操作成功!');window.history.back();</script>"; 
   	exit;
}
  if( $cz=="mod")
 {
  if( $id!="")
 {
  $sql="select * from leixing where id=".$id;
 $sqlex=mysql_query($sql,$conn);
 $info=mysql_fetch_array($sqlex);
 $id=$info[id];
 $leixing=$info[leixing];
 }
}
?><html>
  <head>

   <title>类型信息管理页面</title>
 <script src="css/laydate.js" type="text/javascript"></script>  
 <link href="css/gzf.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
<body >

 <div class="bodydiv">
  <form method="post" name="leixing"   action="leixing.php?action=xs&id=<?php echo $id?>">
  <table class="myTab" cellpadding="4" cellspacing="1">
 <tr class="myTRHead">
   <td class="myTDHead"  colspan="2" >类型信息管理页面</td>
  </tr>
  <tr>
   <td  align="right">类型名称:</td>
    <td align="left" >  <input name='leixing' type='text' id='leixing' value='<?php echo $leixing ?>' class="txtcss" />
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

