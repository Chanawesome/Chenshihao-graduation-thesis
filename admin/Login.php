<?php  
session_start();
include("../conn.php");
header('content-type:text/html;charset=utf-8');  
if ($_GET['action'] == 'login')
{
 
 $qx=$_POST[qx];
 $username=$_POST[name];
$pwd=$_POST[pwd];
echo  $username;
echo  $pwd;
$SQl="";

if( $qx=="管理员")
{ $_SESSION[qx]="1"; 
$SQl="select * from admin where username='".$username."' and pwd='".$pwd."'";
}
 
$sql=mysql_query($SQl,$conn);
$info=mysql_fetch_array($sql);

if($info==true)
 {
$_SESSION[ss]=$info[sushe];
$_SESSION[username]=$username; 
  $_SESSION[pwd]=$pwd; 
   echo "<script>alert('恭喜，登录成功!');window.location='Index.html';</script>";
    exit;
 }
 else
 { 
  echo "<script>alert('用户名或者密码错误!');window.location='login.php';</script>";
 }

}

echo $qx;
?>
<!DOCTYPE html>
<html>
<head>
<head runat="server">
    <title></title>  <link href="Css/box.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="CSS/rjp.css" />
    <link href="Css/Login.css" rel="stylesheet" type="text/css" />
</head>
</head>
<body class="D_login_bg">
<script type="text/javascript">    var b = 0;
    var btnExport = 0;
    var inputs;
    function check() {
        if (btnExport == 1) {
            return true;
        }
        if (typeof (ValidatorOnSubmit) == 'function' && ValidatorOnSubmit() == false) {
            return false;
        }
        try {
            if (typeof ($.formValidator) == 'object') {
                if ($.formValidator.pageIsValid('1') == false) {
                    return false;
                }
            }
        } catch (err) {

        }
        if (b == 0) {
            b++;
            return true;
        }
        else {
            return false;
        }
    }
    if (document.forms.length > 0) {
        document.forms[0].onsubmit = check;

    }</script> 
<form method="post" name="login" action="login.php?action=login">
<div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <div class="D_login_box">
                <span class="D_dyy"></span>
                <div class="D_login">
                    <span class="D_title">用户登录</span>
                    <span class="D_span_1">
                        <dl>
                            <dd class="bt">用户名</dd>
                            <dd>
						 
                                <input name="name" type="text" id="name" name="name" tabindex="2" placeholder="请输入用户名"  />
                            </dd>
                        </dl>
                    </span>
                    <div class="D_ico_jp">
                    </div>
                    <span class="D_span_1">
                        <dl>
                            <dd class="bt">密&nbsp;码</dd>
                            <dd>
                              
                                <input type="password" name="pwd" placeholder="请输入密码" tabindex="3"/>
                            </dd>
                        </dl>
                    </span>
                    <span class="D_span_1">
                        <dl>
                            <dd class="bt">权&nbsp;限</dd>
                            <dd>

							 <select name="qx" class="xiala"  s style="border: 1px solid #c1c1c1; height: 30px;width: 220px; padding-left: 10px;margin-left: 6px;">
  <option value="管理员">管理员</option>
 
</select>


 
                              
                            </dd>
                        </dl>
                    </span>
                    <span class="D_tj">
  <input type="submit" value="立即登陆" class="D_submit"/>
                      
                     
                    </span>
                </div>
            </div>

        </div>


 
</form>
</body>
</html>
<script src="Js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="Js/loginBubbleUp.js" type="text/javascript"></script>
<script type="text/javascript" src="Js/md5.js"></script>
<script type="text/javascript" src="Js/setKeyboardDiv.js" charset="GB2312"></script>