<?php
define('misaka', TRUE);
?>
<!DOCTYPE html>
<html lang="zh">
 <head> 
 <?php include ("header.php");?>
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;display=swap" rel="stylesheet" /> 
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> 
  <link rel="stylesheet" href="/css/login/main.css" /> 
  <title>Register-<?php echo $title?></title> 
 </head> 
 <body> 
  <div class="container"> 
   <div class="img"> 
    <img src="<?php echo $registerimg?>" alt="" style="transform:rotateY(180deg);"/> 
   </div> 
   <div class="login-box"> 
    <form id="loginform" action="./action/registeraction.php" method="post"> 
     <img src="<?php echo $icon?>" alt="" class="avatar" /> 
     <h2>register</h2> 
     <div class="input-group"> 
      <div class="icon"> 
       <i class="fa fa-user"></i> 
      </div> 
      <div> 
       <h5>您的用户名是？</h5> 
       <input type="text" id="name" name="username" required="required" value="<?php echo isset($_COOKIE["manga"])?$_COOKIE["manga"]:"";?>" class="input"/>
      </div> 
     </div> 
     <div class="input-group"> 
      <div class="icon"> 
       <i class="fa fa-lock"></i> 
      </div> 
      <div> 
       <h5>输入您的密码吧！</h5> 
       <input type="password" id="password" name="password" required="required" "="" class="input" /> 
      </div> 
     </div> 
     <div class="input-group"> 
      <div class="icon"> 
       <i class="fa fa-lock"></i> 
      </div> 
      <div> 
       <h5>重新确认一下密码吧！</h5> 
       <input type="password" id="re_password" name="re_password" required="required" class="input" /> 
      </div> 
     </div> 
     <div class="input-group"> 
      <div class="icon"> 
       <i class="fa fa-envelope-o"></i> 
      </div> 
      <div> 
       <h5>邮箱是？</h5> 
       <input type="email" id="email" name="email" required="required" class="input" /> 
      </div> 
     </div> 
     <input type="submit" class="btn" value="register" />   
     <!--提示信息-->   
     <?php
        $err=isset($_GET["err"])?$_GET["err"]:"";
        switch($err) {
            case 1:
            echo "<script>Notiflix.Report.Failure('主人的名字冲突啦！','这个名称已经有主人注册啦(>_<)，建议换一个独特的ID吧！','好的(≧∀≦)ゞ');</script>";
            break;
            case 2:
            echo "<script>Notiflix.Report.Warning('记住密码呀！','两次输入的密码不一样呀（＞人＜；）','那我好好检查一下吧~(￣▽￣)~');</script>";
            break;
            case 3:
            echo "<script>Notiflix.Report.Success('欢迎主人加入我们！','注册成功啦q(≧▽≦q)','好（*＾-＾*）');</script>";
            break;
        }
     ?>
     <a href="login.php">登录</a> 
     &nbsp&nbsp|&nbsp&nbsp
     <a href="index.php">主页</a>
     <br>
     <br>
     <a href="JavaScript:;" Onclick="findpassword()">找回密码</a>
	 &nbsp&nbsp|&nbsp&nbsp
	 <a href="JavaScript:;" Onclick="deleteuser()">删除账户</a>
    </form> 
   </div> 
  </div> 
  <script src="js/login/main.js" type="text/javascript"></script>   
<!--找回密码及删除账户提示部分-->
  <script>
function findpassword(){
	Notiflix.Report.Info('安全提示','为了保护主人的信息，您无法在网站提交找回密码的请求，请您联系管理员进行修改/找回密码（￣︶￣）↗　','好吧...');
}
function deleteuser(){
	Notiflix.Report.Info('安全提示','为了保护主人的信息，您无法在网站提交删除账户的请求，请您联系管理员进行删除处理（￣︶￣）↗　','好吧...');
}
</script>
 </body>
</html>