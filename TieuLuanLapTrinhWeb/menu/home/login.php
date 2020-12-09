<?php
	session_start();
	$_SESSION['username']="";
	$_SESSION['role']="";
?>

<!DOCTYPE html>
<html>
<head>
<title>Design by DTD</title>
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>
<body>
<?php
	require("ketnoi.php");
	if(isset($_POST["btn_submit"])){
		$username=$_POST['username'];
		$password=$_POST["password"];
		//$username = strip_tags($username);
		//$username = addcslashes($username);
		//$password = strip_tags($password);
		//$password = addcslashes($password);
		if ($username == "" || $_POST['password'] == "") {
			echo "<script>" . "alert('Tài khoản và mật khẩu không được để trống !')" . "</script>";
		} else {
			$sql = "select * from banchaphanh where taikhoan = '$username' and matkhau = '$password' ";
			$query = mysqli_query($conn, $sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows == 0) {
				echo "<script>"  . "alert('Tài khoản hoặc mật khẩu chưa đúng !')" . "</script>";
			} else {
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
				while ($a = mysqli_fetch_array($query)) {
					$_SESSION['role'] = $a[6];
				}
				// Thực thi hành động sau khi lưu thông tin vào session
				// Ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là homepage.php
				header('Location:homepageadmin.php');
			}
		}
	}
?>
	<h1>QUẢN LÝ NGƯỜI DÙNG</h1>
	<div class="w3layoutscontaineragileits">
	<h2>ĐĂNG NHẬP TÀI KHOẢN</h2>
		<form action="#" method="post">
			<input type="text" name="username" placeholder="USERNAME" required="">
			<input type="password" name="password" placeholder="PASSWORD" required="">
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Nhớ tài khoản</label>
					<a href="#">Quên mật khẩu</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input name="btn_submit" type="submit"  value="ĐĂNG NHẬP">
				<p> Không có account <span>→</span> <a href="homepageuser.php" class="w3_play_icon1"> Click vào</a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<h3>Register Form</h3>
				<form action="#" method="post">
						<div class="form-sub-w3ls">
							<input placeholder="User Name"  type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Email" class="mail" type="email" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Password"  type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Confirm Password"  type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">I Accept Terms & Conditions</label>
					</div>
					<div class="submit-w3l">
						<input type="submit" value="Register">
					</div>
				</form>
			</div>
		</div>	
	</div>
	
	<div class="w3footeragile">
		<p> &copy; Design by DTD <a href="http://w3layouts.com" target="_blank"></a></p>
	</div>
</body>


</html>