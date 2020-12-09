<?php
    session_start();
    if($_SESSION['username'] == ''){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="homepage.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Round&display=swap">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

    <div class="wrap">

        <header>
            <input type="checkbox" id="active">
            <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
            <div class="wrapper">
                <ul>
                    <li><a href="../home/homepage.html">Trang chủ</a></li>
                    <li><a href="http://fit.vlute.edu.vn/docgia/home/index">FIT VLUTE</a></li>
                    <li><a href="./index/html/gioithieu.php">Giới thiệu</a></li>
                    <li><a href="#">Thông báo</a></li>
                    <li><a href="quanly.php">QL Đoàn Viên</a></li>
                    <li><a href="logout.php">Đăng xuất</a></li>
                    <?php 
                        if($_SESSION['username'] != '')
                         {
                             echo "<li>" . "<a>" . "Xin chào : " . $_SESSION['username'] . "</a>" . "</li>";
                            };
                    ?>
                </ul>
            </div>
        </header>


        <div class="content">
            <h1>Chào mừng đến với  <br><br>Website Đoàn Khoa CNTT</h1>
            <h3>Mọi vấn đề sẻ được giải quyết trong vòng một nốt nhạc, trừ khi đó là học lại môn :)</h3>
            <div class="btn-group">
                <a href="login.php" class="color1">Bản tin</a>
            </div>
        </div>

        

    </div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Tuổi Trẻ Khoa CNTT</h4>
				<p>
					Với phương châm xây dựng, đẩy mạnh phong trào thanh niên trong khoa trong lĩnh vực học tập và rèn luyện kỹ năng, nhằm góp phần đạt mục tiêu “Tuổi trẻ Khoa CNTT không ngừng Học tập - rèn luyện – quyết tâm – phấn đấu xây dựng tương lai”
				</p>
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> Văn phòng Đoàn khoa CNTT (A203)
				</p>
				<p>
					<span>Phone:</span> (+20) o000006845
				</p>
				<p>
					<span>Email:</span> doankhoacntta@vlute.edu.vn
				</p>
				<p>
					<span>Fanpage:</span> DoanKhoaCNTT
				</p>
			</div>
			<div class="section">
                <a href="http://fit.vlute.edu.vn/" class="subscribe">Đến với Page của chúng tôi </a>
                <a href="#">Chèn VD</a>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
            <div class="our-partners">
        <div class="our-partners-inner">
            <a href="#"><img src="./image/vlute.png" alt=""></a>
            <a href="#"><img src="./image/facebook.png" alt=""></a>
            <a href="#"><img src="./image/instagram.png" alt=""></a>
        </div>
    </div>
				<p>
				Design By DTD
               </p>
			</div>
		</div>
	</div>



 
</body>
</html>