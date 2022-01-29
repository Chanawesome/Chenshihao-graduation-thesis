<?php  
@session_start();
error_reporting(0); 
include("conn.php");
?>
<!DOCTYPE html>
<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
	     <link  href ="StyleSheet.css"  rel ="Stylesheet"  type ="text/css" />      
       <link href="Images/StyleSheet.css" rel="stylesheet" type="text/css" />
        <link href="css/dhang.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
<header>
 <div id="top">
      <ul class="inTop clearfix">
         <li class="fr">
 
<?php

if($_SESSION[username]=="")

{
?> <div id=NoLogin >
	你好， <a href="UserLogin.php">请登录</a>　<a href="UserReg.php">免费注册</a>
		</div>   <?php
		
	}
	else
	{?>
	

			<div id=YesLogin  >  欢迎回来<?php echo $_SESSION[username]?> 
			
			<a href="gouwuche.php">购物车</a>　
			<a href="BM_List2.php">我的订单</a>　
			<a href="Userinfo.php">个人信息</a>　
			
			<a href="logout.php">退出</a>
			
			<?php
			}?>

 
   
    

</li>
    </ul>
    </div>



<div class="header">
      <div class="inHeader clearfix">
        <div class="midHeader clearfix">
          <div class="logo fl">
             <img src="Images/newlogo.png" title=" "> 
            </div>
            <div class="searchArea fl">
              <form method="post" action="sousuo.php" target="_blank">
                  <input type="text" name="skey" class="keyword fl" placeholder="小伙伴，你想找什么？">
                    <input type="submit" class="seaBtn fr" value="搜索">
                </form>
                <ul class="clearfix">
                
              
          <div style="display: inline-block; width: 380px; height: 22px; overflow: hidden; margin-top: 1px;">
         </div>
          </div>
                </ul>
            </div>
      
        </div>
    </div>
    </div>
   <div class="header-wrap">
  <div class="navwrap">
    <div id="nav">
       <div class="navbar clearfix">
         
         <li><a href="index.php">网站首页</a></li>
         
        <li><a href="zuixin.php">最新上市</a></li>
	   <li><a href="remen.php">热门推荐</a></li>
	   <li><a href="lianxi.php">联系我们</a></li>
	 
      <li><a href="liuyan.php">在线留言</a></li>
	   
	 
 
      <li><a href="admin/Login.PHp">后台登录</a></li>

 
     
      </div>
       
    </div>
  </div>
</div>
    </div>
    
    
    
    
    
    
  
  </body>
</html>
