<?php
require_once'connect.php'
?>
<?php 
session_start();
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$sql="SELECT * FROM user WHERE email='".$email."' AND pass='".$pass."' LIMIT 1";
	$row=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($row);
	if($count>0){
		$row_data=mysqli_fetch_array($row);
		$_SESSION['login']=$row_data['user_name'];
		$_SESSION['user_id']=$row_data['user_id'];
		header("Location:index.php");
	}else{
		echo '<script language="javascript">alert("Tên đăng nhập hoặc mật khẩu không đúng."); window.location="index.php?manage=login";</script>';
	}
}
 ?>
