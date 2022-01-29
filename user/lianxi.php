<?php 
require 'header.php';
include("conn.php");
$sql="select * from lianxi";
$sqlex=mysql_query($sql,$conn);
$info=mysql_fetch_array($sqlex);
$id=$info[id];
$jieshao=$info[jieshao];
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
	 	<h2>联系我们</h2>
	 </div>
	 <div class="tjshangping"> 

	 	 <div class="content-bottom1_1">
    <table style="width: 100%;text-align: left">
       
        <tr>
            <td style="width:  100%">
            
           <asp:DataList ID="dlTopic" runat="server" Width=" 100%">
                    <ItemTemplate>
                         
                                    
                                   
                                    <ul class="a_content">
                            
                               <?php echo  $jieshao?>
                                    </ul>
                                 
                        </table>
                    </ItemTemplate>
                </asp:DataList>
                    </ul>
                </td>
        </tr> <tr>
            <td>
              </td>
        </tr>
        <tr>
            <td style="text-align: left">
           
                &nbsp;</td>
        </tr>
        <tr>
            <td>
                &nbsp;</td>
        </tr>
    </table>
        
   
  </div>
</div>
  </div>
	</body>