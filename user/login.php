<?php define( 'misaka', TRUE); ?>
	<!DOCTYPE html>
	<html lang="zh">
		<head>
			<?php include ( "../header.php");?>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
				rel="stylesheet">
				<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet">
				<link rel="stylesheet" href="/css/login/main.css">
				<title>
					Login-<?php echo $title?>
				</title>
		</head>
		<body>
			<div class="container">
				<div class="img">
					<img src="../img/login/loginimg.svg" alt="" style="transform:rotateY(180deg);">
				</div>
				<div class="login-box">
					<form id="loginform" action="../action/loginaction.php" method="post">
						<img src="../img/login/logo.svg" alt="" class="avatar">
						<h2>
							login
						</h2>
						<div class="input-group fas fa-eye-slash">
							<div class="icon">
								<i class="fa fa-user">
								</i>
							</div>
							<div>
								<h5>
									主人的用户名是？
								</h5>
								<input type="text" id="name" name="username" required="required" value="<?php echo isset($_COOKIE["manga"])?$_COOKIE["manga"]:"";?>" class="input">
							</div>
						</div>
						<div class="input-group">
							<div class="icon">
								<i class="fa fa-lock">
								</i>
							</div>
							<div>
								<h5>
									密码不要忘记了哦qwq
								</h5>
								<input type="password" id="password" name="password" class="input">
							</div>
						</div>
						<input type="checkbox" name="remember">
						<small>
							记住我
							<input type="submit" class="btn" value="Login">
							<tr>
								<td colspan="2" align="center" style="color:red;font-size:10px;">
									<!--提示信息-->
									<?php $err=isset($_GET[ "err"])?$_GET[ "err"]: "";
									switch($err) {
										case 1: 
											echo "<script>Notiflix.Report.Failure('主人的名字或者密码错误啦！','主人，您的用户名或者是面貌错误啦(>_<)，回想一下吧','好的`(*>﹏<*)′');</script>";
										break;
										case 2: 
											echo "<script>Notiflix.Report.Warning('还有框框没有填写呢！','主人要认真填写呀(>﹏<)','那我好好填吧~(￣▽￣)~');</script>";
										break;
										}
									?>
								</td>
							</tr>
							<a href="./register.php">
								注册
							</a>
							&nbsp&nbsp|&nbsp&nbsp
							<a href="/index.php">
								主页
							</a>
							<br>
							<br>
							<a href="JavaScript:;" Onclick="findpassword()">
								找回密码
							</a>
							&nbsp&nbsp|&nbsp&nbsp
							<a href="JavaScript:;" Onclick="deleteuser()">
								删除账户
							</a>
					</form>
				</div>
			</div>
			<script src="../js/login/main.js" type="text/javascript">
			</script>
			<!--找回密码及删除账户提示部分-->
			<script>
			function findpassword(){
				Notiflix.Report.Info('安全提示','为了保护主人的信息，您无法在网站提交找密的请求，请您联系管理员进行修改/找回密码（￣︶￣）↗　','好吧...');
			}
			function deleteuser(){
				Notiflix.Report.Info('安全提示','为了保护主人的信息，您无法在网站提交删户的请求，请您联系管理员进行删除处理（￣︶￣）↗　','好吧...');
			}
			</script>
		</body>
	
	</html>