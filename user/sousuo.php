<?php 
require 'header.php';
include("conn.php");
$lx=$_POST[skey];
$bt="查询结果";


$sql="select * from  shangping  where mingcheng like'%".$lx."%' order by id desc";

$result=mysql_query($sql,$conn);
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
	 <!-- 推荐商品信息 -->
	 <div class="cptuijantitle">
	 	<h2>查询结果</h2>
	 </div>
	 <div class="tjshangping"> 

	 	 <div class="content-bottom1_1">

  <?php
 
$result=mysql_query($sql,$conn);
while($data=mysql_fetch_array($result))
{
    ?>  
									               
								 
                            
		<div class="content-bottom1_a">
			   <a href='spInfo.php?id=<?php echo $data[Id]?>' style="color:#46b448;">
			    <img class="bottomImg" src=<?php echo $data[pic]?>    > 
			    <h3 class="bottomTitle"><?php echo $data[mingcheng]?></h3> 
			    <p class="bottomPrice">
			        <span style="color:#ff6709">价格：<?php echo $data[danjia]?></span>
			    </p>
			    </a>
			</div>
                     
			   <?php 
			  }
			  ?>
  
   
	 </div>
         </div>                        
	  

 
		<div class="clear"></div>
<div class="foot">
 Copyright © 2021 all rights reserved 版权所有
</div>
</div>
  
   
  
  
  </body>
</html>
