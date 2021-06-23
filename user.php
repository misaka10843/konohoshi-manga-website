<?php
define('misaka', TRUE);
?>
<?php
$islogin = 1;
$userid = $_GET['id'];

?>
<?php include ( "action/useraction.php");?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<?php include ( "header.php");?>
			<link rel="stylesheet" href="./css/page/user-php.css">
			<link rel="stylesheet" href="./css/main.css">
			<title>
				<?php echo $user_name. "-".$title ?>
			</title>
			<style>
				.userbg{ background-image:url(./img/login/loginimg.svg); }
			</style>
	</head>
	<body>
		<div id="mainpage">
			<?php include ( "body.php");?>
				<?php if ($islogin==0 ){ echo "<script>Notiflix.Report.Failure(
				'错误',
				'主人还没有登录呢，还请您登录一下qwq',
				'好的',
				function(){
				window.location.href='login.php'
				}
				);</script>"; } ?>
					<div class="userbg">
					</div>
					<div class="userabout">
						<div class="userimg">
							<img src="./img/logo.svg" />
						</div>
						<div class="username-user">
							<h3>
								<?php echo $user_name ?>
							</h3>
						</div>
						<?php if ($ismy==1 ){ ?>
							<div class="edit">
								<a class="edit-button">
									编辑个人资料
								</a>
							</div>
							<?php } ?>
								<div class="uid-plane">
									<div class="uid-box">
										<div class="uid">
											<ul>
												<li>
													<div>
														UID:
														<?php echo $id ?>
													</div>
												</li>
											</ul>
										</div>
										<div class="plane-box uid">
											<ul>
												<li>
													<div class="plane-text1">
														<svg viewBox="0 0 10 12" class="plane-img">
															<path d="M5,12 C1.66666667,9.1742825 0,6.84094917 0,5 C0,2.23857625 2.23857625,0 5,0
															C7.76142375,0 10,2.23857625 10,5 C10,6.84094917 8.33333333,9.1742825 5,12 Z M5,7
															C6.1045695,7 7,6.1045695 7,5 C7,3.8954305 6.1045695,3 5,3 C3.8954305,3 3,3.8954305 3,5
															C3,6.1045695 3.8954305,7 5,7 Z">
															</path>
														</svg>
														<div class="plane-text2">
															<?php echo $plane ?>
																|
														</div>
														<div class="plane-text2">
															性别:
															<?php echo $sex ?>
																|
														</div>
														<div class="plane-text2">
															生日:
															<?php echo $date ?>
																|
														</div>
														<div class="plane-text2">
															职业:
															<?php echo $occupation ?>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="manga-follow">
								</div>
					</div>
		</div>
		<div id="followpage">
			<div class="nav-box">
				<div class="nav">
					<nav>
						<a class="manga">
							关注
						</a>
					</nav>
				</div>
			</div>
			<div>
				<div>
					<div class="manga-box">
							<section class="manga-inbox">
								<div class="manga-box-title-box">
									<div class="manga-box-title-inbox">
										<div class="manga-box-title">
											<h2>
												漫画
											</h2>
											<div class="follow-numbox">	
												<?php
											$conn = mysqli_connect('localhost','test123','test123','test123');
											//准备SQL语句,查询用户关注
											$sql_select="SELECT follow_id FROM user WHERE id = '$id'";
											//执行SQL语句
											$ret = mysqli_query($conn,$sql_select);
											$row = mysqli_fetch_array($ret);
											$conn->close();
											
											$row = explode(",",$row['follow_id']);

											$a = sizeof($row);
												?>
												<div class="follow-num">
													<span><?php echo $a?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="mangalit-box">
										<ul>
											<?php 
												for ($i = 0; $i < $a ; $i++){
													$b = $i;
													$b = $row[$b];
													$conn = mysqli_connect('localhost','test123','test123','test123');
													//准备SQL语句,查询用户关注
													$sql_select="SELECT * FROM manga WHERE id = '$b'";
													//执行SQL语句
													$ret = mysqli_query($conn,$sql_select);
													$row1 = mysqli_fetch_array($ret);
													$conn->close();
											?>
											<li>
											<div class="manga-imgbox">
												<div class="manga-imginbox">
													<div class="manga-onimgbox">
														<a href="">
															<div class="manga-img">
														<img src="/manga/<?php echo $row1['id']?>/top.jpg" alt="">
													</div>
												</a>
													</div>
												</div>
												<div class="manga-title">
													<a style="color: rgba(0, 0, 0, 0.88);" href="">
														<?php echo $row1['title']?>
													</a>
												</div>
												<div class="author-box">
													<div class="author-inbox">
														<div class="author-imgbox">
															<a href="">
																<div class="author-img">
																	<img src="./img/logo.svg" alt="">
																</div>
															</a>
														</div>
														<a class="author-text" href="">
														<?php echo $row1['author']?>
														</a>
													</div>
												</div>
											</div>
										</li>
										<?php } ?>
									</ul>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>