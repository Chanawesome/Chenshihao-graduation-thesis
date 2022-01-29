<?php 
require 'header.php';
include("conn.php");

?>
 <!DOCTYPE html>
<html>
	<head>
		<link href="css/main.css" rel="stylesheet">
    <link href="css/Maste.css" rel="stylesheet" type="text/css" />

        <link href="css/jquery.slideBox.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.slideBox.min.js" type="text/javascript"></script>

<script>
    jQuery(function ($) {
        $('#demo1').slideBox();

    });
</script>  
 
	</head>
	
  <body>
    <div class="content" style="margin-left:200px"> 
	 <div class="clear"></div>
	 	 <div class="clear"></div>
	 	 	 <div class="clear"></div>
	 
	 <div class="cptuijantitle">
	 	<h2>在线留言</h2>
	 </div>
	 <div class="tjshangping"> 

	 	 <div class="content-bottom1_1">
    <table  width='100%' border='0' cellspacing='0' cellpadding='0' align="left">
 
 
    <?php
					              $sql="select * from tliuyan  order by id DESC";


			$result=mysql_query($sql,$conn);
			while($data=mysql_fetch_array($result))
{
?>
<tr>
    <td colspan="2" align="left">留言人<?php echo $data[username]?>：留言时间<?php echo $data[lshijian]?><br>
	
	 <?php echo $data[lneirong]?>	
	 
	  <?php 
	  if($data[huifu]=="")
	  {
	  	
	  }
	  else
    {
    	echo "<br>回复内容：".$data[huifu];
    }
    ?>
</td>
</tr> 


                       <?php
                      }
                      ?>
 
  
  
  
  
  <form method="post"   name="spinfo" action="liuyan_post.php?action=liuyan&id=<?php echo $id?>">
  <tr>
    <td colspan="2"  align="left" >
	<textarea name="neirong"  placeholder="请输入留言信息" class="mtext" style="margin: 0px; height: 102px; width: 410px;"></textarea> </td>
  </tr>
  <tr> 
  <td colspan="2" align="left" >
<br>
 <input type="submit" name="Submit" value="提交" onclick="return check();" class="btn"/> </td>
  </tr>  
  </form>
</table>
</table>
 
 </center>
    </div>
	</body>