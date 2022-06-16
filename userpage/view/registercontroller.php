
<?php 
require_once'connect.php'
?>
<?php 
if (isset($_POST['register'])) {
    $user_name = $_POST['user_name'];
    $birth = $_POST['birth'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $reenterpass = $_POST['reenterpass'];
    
    $address = $_POST['address'];

    if ($reenterpass == $pass) {
        $sql="SELECT * FROM user WHERE email ='$email'";
        $result=mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)  > 0)
        {
            echo '<script language="javascript">alert("Email đã đươc sử dụng. Vui lòng chọn email khác."); window.location="index.php?manage=register";</script>';
        }
        else
        {
            $sql = "INSERT INTO user(user_name,birth,sex,email,pass,address)VALUES(N'$user_name',N'$birth',N'$sex',N'$email',N'$pass',N'$address')";
            mysqli_query($conn,$sql);
            echo '<script language="javascript">alert("Đăng ký thành công. Chuyển tới trang đăng nhập..."); window.location="index.php?manage=login";</script>';
        }
    }else
    {
        echo '<script language="javascript">alert("Mật khẩu không trùng khớp vui lòng nhập lại."); window.location="index.php?manage=register";</script>';
    }
}
?>