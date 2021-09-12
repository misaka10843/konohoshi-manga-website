	<script>
	window.addEventListener("load", function(event) {
    lazyload();
});</script>
	<header role="banner">
		<div id="cd-logo"><a href=""><img class='lazyload' data-src="/img/nav/icon_login.svg" style="width:35px;height:35px" alt="Logo"><?php echo $name ?></a></div>
		<div class="navigation">
    <nav>  
    <ul>
      <li><a href="/" title="首页">首页</a></li>
    </ul>
</nav>
  </div>
		<nav class="main-nav">
			<ul>
			<?php

            //开启session
            session_start();
            //声明变量
            $username= isset($_SESSION['user'])?$_SESSION['user']:"";
            //判断session是否为空
            if(!empty($username)){
			?>
			<li>
				<a class="username" style="color: #FFF;" href="/user.php">
					<?php echo $username.$user_id ?>
				</a>
			</li>
			<li>
				<a class="cd-signin" style="color: #FFF;" id="logout" href="javascript:;" onclick="logout()">
					登出
				</a>
			</li>
			<script>
				function logout() {
					Notiflix.Notify.Init();
					Notiflix.Report.Init();
					Notiflix.Confirm.Init();
					Notiflix.Loading.Init({
						clickToClose: true
					});
					Notiflix.Report.Success(
						'准备退出啦！', 
						'主人只要同意的话我们就立马退出账号啦！ <br><br>', 
						'OK( •̀ ω •́ )✧',
						function() {
							var xmlhttp;
							if (window.XMLHttpRequest) {
								//  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
								xmlhttp = new XMLHttpRequest();
							} else {
								// IE6, IE5 浏览器执行代码
								xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
							}
							xmlhttp.open("POST", "/logout.php", true);
							xmlhttp.send();
							setTimeout(location.reload(), 300);
						
						}
					);
				}
			</script>
			<?php
			}else{
        	?>
				<!-- inser more links here -->
				<li><a class="cd-signin" style="color: #FFF;" href="/user/login.php">登录</a></li>
				<li><a class="cd-signup" style="color: #FFF;" href="/user/register.php">注册</a></li>
			<?php
			}
			?>
			</ul>
		</nav>
	</header>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
<script src="/js/main.js"></script>
