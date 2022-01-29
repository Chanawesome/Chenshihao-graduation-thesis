<?php
session_start();
if($_SESSION['qx']=="1")
{   
}
else
{ 
header("Location: Xleft.php"); 
} 
 
?>
<link rel="stylesheet" href="css/leftMenu.css" type="text/css"></link>
  
    <script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-common.js"></script>
	
    <script type="text/javascript">
        var state = 0;
        $(document).ready(function () {
            /********* 菜单收缩效果***********/
            $(".navcontent").hide();
            $(".navhead").click(function () {
                $(".navcontent").not($(this).next()).hide();
                $(this).next().slideToggle(200);
                $("a[type='Module']").not($(this)).attr("class", "navhead");
                if ($(this).attr("class") == "navhead") {
                    $(this).attr("class", "navheadOpen");
                }
                else {
                    $(this).attr("class", "navhead");
                }
            });
            $(".navhead").first().click();
        });
    </script>
    
    <style type="text/css">
        html
        {
            _overflow-x: hidden;
            height: 100%;
        }
        body
        {
            background-color: #D9F3FF;
            padding: 0px;
            margin: 0px;
            height: 100%;
        }
        ul
        {
            margin: 0px;
            padding: 0px;
        }
        li
        {
            list-style: none;
            margin: 0px;
            padding: 0px;
        }
    </style>
<body style="margin: 0px;">
        <div id="Menu" style="width: 190px; float: left; margin: 2px 0px 0px 2px; _margin-left: 2.5px;overflow: hidden;">
            <div style="margin-left: 2px; width: 180px; height: 25px; vertical-align: middle;line-height: 25px; font-size: 16px; font-weight: bold; color: White;font-family: 微软雅黑; background-image: url('images/menutop.png')"> <!-- 管理菜单 -->
            </div>
            <ul id="identifier">
 

<li><a class="navhead" type='Module' style="font-family: 微软雅黑;"><img style='vertical-align:middle' src="images/group.png" />&nbsp  注册用户管理</a>
<ul class="navcontent">
 
<li><img  style='vertical-align:middle' src="images/vcard_add.png" />&nbsp<a target="main" href="userlist.php" style="font-family: 微软雅黑;">注册用户管理</a></li>

</ul>
</li> 


<li><a class="navhead" type='Module' style="font-family: 微软雅黑;"><img style='vertical-align:middle' src="images/group.png" />&nbsp类型信息管理</a>
<ul class="navcontent">
<li><img  style='vertical-align:middle' src="images/vcard_add.png" />&nbsp<a target="main" href="leixing.php" style="font-family: 微软雅黑;">添加类型信息</a></li>
<li><img  style='vertical-align:middle' src="images/vcard_add.png" />&nbsp<a target="main" href="leixing_List.php" style="font-family: 微软雅黑;">类型信息管理</a></li>

</ul>
</li>


<li><a class="navhead" type='Module' style="font-family: 微软雅黑;"><img style='vertical-align:middle' src="images/group.png" />&nbsp商品信息管理</a>
<ul class="navcontent">
<li><img  style='vertical-align:middle' src="images/vcard_add.png" />&nbsp<a target="main" href="shangping.php" style="font-family: 微软雅黑;">添加商品信息</a></li>
<li><img  style='vertical-align:middle' src="images/vcard_add.png" />&nbsp<a target="main" href="shangping_List.php" style="font-family: 微软雅黑;">商品信息管理</a></li>

</ul>
</li>

<li><a class="navhead" type='Module' style="font-family: 微软雅黑;"><img style='vertical-align:middle' src="images/group.png" />&nbsp  订单信息管理</a>
<ul class="navcontent">
 
<li><img  style='vertical-align:middle' src="images/vcard_add.png" />&nbsp<a target="main" href="dingdan_List.php" style="font-family: 微软雅黑;">订单信息管理</a></li>
</ul>
</li>
			 
 <li><a class="navhead" type='Module' style="font-family: 微软雅黑;"><img style='vertical-align:middle' src="images/group.png" />&nbsp  留言信息管理</a>
<ul class="navcontent">
 
<li><img  style='vertical-align:middle' src="images/vcard_add.png" />&nbsp<a target="main" href="tliuyan_List.php" style="font-family: 微软雅黑;">留言信息管理</a></li>
</ul>
</li>

 


<li><a class="navhead" type='Module' style="font-family: 微软雅黑;"><img style='vertical-align:middle' src="images/group.png" />&nbsp 联系我们</a>
<ul class="navcontent">
<li><img  style='vertical-align:middle' src="images/vcard_add.png" />&nbsp<a target="main" href="lianxi.php?cx=mod" style="font-family: 微软雅黑;">联系我们</a></li>
</ul>
</li>

<li><a class="navhead" type='Module' style="font-family: 微软雅黑;"><img style='vertical-align:middle' src="images/group.png" />&nbsp修改口令</a>
<ul class="navcontent">
<li><img  style='vertical-align:middle' src="images/vcard_add.png" />&nbsp<a target="main" href="PWD.php" style="font-family: 微软雅黑;">修改口令</a></li>
</ul>
</li>
            </ul>
            <div style="margin-left: 2px; width: 180px; height: 28px; background-image: url('images/foot.png')"></div>
        </div>
</body>
</html>

