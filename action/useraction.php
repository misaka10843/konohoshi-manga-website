<?php
if(!defined('misaka')) {

    exit("access denied");
    }

$user_name = "null";
$id = "null";
$plane = "null";
$sex = "null";
$date = "null";
$occupation = "null";
$ismy = 0;
if ($userid == null){
    //开启session
    session_start();
    //声明变量
    $username= isset($_SESSION['user'])?$_SESSION['user']:"";
    //判断session是否为空
    if(!empty($username)){
		$conn = mysqli_connect('localhost','test123','test123','test123');
		//准备SQL语句,查询用户名
		$sql_select="SELECT * FROM user WHERE username = '$username'";
		//执行SQL语句
		$ret = mysqli_query($conn,$sql_select);
		$row = mysqli_fetch_array($ret);
		$conn->close();
		$user_name = $row['username'];
		$id = $row['id'];
		$plane = $row['plane'];
		$sex = $row['sex'];
		$date = $row['date'];
		$occupation = $row['occupation'];
        $ismy= 1;
	}else{
		$islogin = 0;
	}
	}else{
		$conn = mysqli_connect('localhost','test123','test123','test123');
		//准备SQL语句,查询用户名
		$sql_select="SELECT * FROM user WHERE id = '$userid'";
		//执行SQL语句
		$ret = mysqli_query($conn,$sql_select);
		$row = mysqli_fetch_array($ret);
		$conn->close();
		$user_name = $row['username'];
		$id = $row['id'];
		$plane = $row['plane'];
		$sex = $row['sex'];
		$date = $row['date'];
		$occupation = $row['occupation'];
	}
?>