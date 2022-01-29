<?php 
include("../conn.php");
$id=$_GET[id];
$cz=$_GET[action];
 $bianhao="";
 $bianhao=$_POST[bianhao];
 $mingcheng="";
 $mingcheng=$_POST[mingcheng];
 $leibie="";
 $leibie=$_POST[leibie];
 $shuliang="";
 $shuliang=$_POST[shuliang];
 $danjia="";
 $danjia=$_POST[danjia];
 $pic="";
 $pic=$_POST[pic];
 $jieshao="";
 $jieshao=$_POST[jieshao];


//图片上传
include("fun.php");

$exname=strtolower(substr($_FILES['file']['name'],(strrpos($_FILES['file']['name'],'.')+1)));

$uploadfile = getname($exname);

move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
if(trim($_FILES['file']['name']!=""))
{
	$uploadfile=$uploadfile;
}
else
{
	$uploadfile="";
}
//图片上传
$pic=str_replace("../","",$uploadfile);
if( $cz=="xs")
{
   if( $id=="")
   {
$SQL= "insert into shangping(bianhao,mingcheng,leibie,shuliang,danjia,pic,jieshao)values('".$bianhao."','".$mingcheng."','".$leibie."','".$shuliang."','".$danjia."','".$pic."','".$jieshao."')";
    }
    else
   {  
$SQL="update shangping set id='".$id."',bianhao='".$bianhao."',mingcheng='".$mingcheng."',leibie='".$leibie."',shuliang='".$shuliang."',danjia='".$danjia."',pic='".$pic."',jieshao='".$jieshao."' where id='". $id."'"; 
     }
       $sql=mysql_query( $SQL,$conn); 
 	echo "<script>alert('恭喜，操作成功!');window.history.back();</script>"; 
   	exit;
}
  if( $cz=="mod")
 {
  if( $id!="")
 {
  $sql="select * from shangping where id=".$id;
 $sqlex=mysql_query($sql,$conn);
 $info=mysql_fetch_array($sqlex);
 $Id=$info[Id];
 $bianhao=$info[bianhao];
 $mingcheng=$info[mingcheng];
 $leibie=$info[leibie];
 $shuliang=$info[shuliang];
 $danjia=$info[danjia];
 $pic=$info[pic];
 $jieshao=$info[jieshao];
 }
}
?><html>
  <head>

   <title>商品信息管理页面</title>
 <script src="css/laydate.js" type="text/javascript"></script>  
 <link href="css/gzf.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <script charset="utf-8" src="./editor/kindeditor-min.js"></script>
<script charset="utf-8" src="./editor/lang/zh_CN.js"></script>
<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="jieshao"]', {
					allowFileManager : true,
						afterBlur: function(){this.sync();}

				});

			});
		</script>
  </head>
<body >

 <div class="bodydiv">
  <form method="post" name="shangping"   enctype="multipart/form-data"  action="shangping.php?action=xs&id=<?php echo $id?>">
  <table class="myTab" cellpadding="4" cellspacing="1">
 <tr class="myTRHead">
   <td class="myTDHead"  colspan="2" >商品信息管理页面</td>
  </tr>
  <tr>
   <td  align="right">编号:</td>
    <td align="left" >  <input name='bianhao' type='text' id='bianhao' value='<?php echo $bianhao ?>' class="txtcss" />
 </td> 
  </tr>
  <tr>
   <td  align="right">名称:</td>
    <td align="left" >  <input name='mingcheng' type='text' id='mingcheng' value='<?php echo $mingcheng ?>' class="txtcss" />
 </td> 
  </tr>
  <tr>
   <td  align="right">类别:</td>
    <td align="left" > 	 <select name="leibie"  class="txtcss"  > 
 <?php
 $sql="select * from leixing order by id DESC";
 $result=mysql_query($sql,$conn);
 while($data=mysql_fetch_array($result))
 {
 ?>
  <option value="<?php echo $data[leixing]?>"  ><?php echo $data[leixing]?></option>
  
  <?php
 }
 ?>
</select>
 </td> 
  </tr>
  <tr>
   <td  align="right">数量:</td>
    <td align="left" >  <input name='shuliang' type='text' id='shuliang' value='<?php echo $shuliang ?>' class="txtcss" />
 </td> 
  </tr>
  <tr>
   <td  align="right">单价:</td>
    <td align="left" >  <input name='danjia' type='text' id='danjia' value='<?php echo $danjia ?>' class="txtcss" />
 </td> 
  </tr>
  <tr>
   <td  align="right">图片:</td>
    <td align="left" >   <input type="file" name="file"  id="file" class="text"  >
 </td> 
  </tr>
  <tr>
   <td  align="right">介绍:</td>
    <td align="left" >  <textarea name="jieshao"    style="margin: 0px; height: 300px; width: 510px;"><?php echo $jieshao?></textarea>
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

