

<?php

session_start();
	//Gọi file connection.php ở bài trước
	include_once("../utils/connection.php");
	header('Content-Type: text/html; charset=UTF-8');
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$email = $_POST["email"];
		$password = $_POST["pass"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		
		$email = addslashes($email);
		
		$password = addslashes($password);
		


		

		$query = "SELECT email, pass FROM admin WHERE email='$email'";
		$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
		if (!$result) {
		
			$error = "tên đăng nhập hoặc mật khẩu không đúng!";
			session_start();
			$_SESSION['errormsg']=$error;
			header('Location: ../view/error.php');
			exit();
			}else {
				echo "Đăng nhập thành công!";
				}

		//Lấy mật khẩu trong database ra
		$row = mysqli_fetch_array($result);

    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['pass']) {
		$logined=0;
		$error = "tên đăng nhập hoặc mật khẩu không đúng!";
			session_start();
			$_SESSION['errormsg']=$error;
			header('Location: ../view/error.php');
			exit();
    }
	else{$_SESSION['email'] = $email;
		$logined=1;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
     header('Location: ../view/user-page.php');
}	}
