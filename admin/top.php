<HEAD>
		 
		<style type="text/css">
	        .Header {background: url(images/topleft.jpg) #d10e00 repeat-x left top; height: 118px;}
	        .HeaderTop {margin: 0px auto;}
        </style>
        
        <script type="text/javascript">
		    function logout()
			{
			   if(confirm("确定要退出本系统吗??"))
			   {
				   window.parent.location="../logout.php";
			   }
			}
	    </script>
	</HEAD>

	<BODY text=#000000 bgColor=#ffffff leftMargin=0 rightmargin="0" topMargin=0 marginheight="0" marginwidth="0">
		<div class="Header HeaderTop">
            <div class="list_bar">
				 <span style="float:left;font-size: 33px;color: white;font-weight: bolder;display: block;text-align: left;margin-top: 38px;margin-left: 30px;">
			后台管理
				 </span>
				 <span style="float:right;font-size: 20px;color: white;font-weight: bolder;display: block;text-align: left;margin-top: 50px;margin-right: 10px;">			    
				     <SCRIPT>setInterval("clock.innerHTML=new Date().toLocaleString()+'&nbsp;&nbsp;'+''.charAt(new Date().getDay());",1000)</SCRIPT><SPAN id=clock></SPAN>
                     &nbsp;&nbsp;&nbsp;
                     <a href="#" onclick="logout()" style="color: white;font-size: 14px;font-family: 微软雅黑">退出系统</a>
                 </span>
			</div>
		</div>