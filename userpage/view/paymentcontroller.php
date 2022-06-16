<?php
require_once'connect.php'
?>
<?php
session_start();
if (isset($_POST['payment'])&&(isset($_SESSION['cart']))){
$user_id = $_SESSION['user_id'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$total_amount=0;
foreach($_SESSION['cart'] as $cart_item){
$total= $cart_item['quantity']*$cart_item['price'];
$total_amount+=$total;
foreach($_SESSION['cart'] as $key => $value){
$product_id=$value['id'];
$quantity=$value['quantity'];
$sql_order = "INSERT INTO order_user(user_id,fullname,email_order,phone,address_order,product_id,quantity,status_order,total)VALUES('".$user_id."',N'$fullname',N'$email',N'$phone',N'$address',$product_id,$quantity,1,$total_amount)";
$order_query=mysqli_query($conn,$sql_order);
if ($order_query) {
unset($_SESSION['cart']);
echo '<script language="javascript">alert("Thanh toán thành công. Chuyển tới trang chủ..."); window.location="index.php";</script>';
}else{ echo '<script language="javascript">alert("Thanh toán không thanh công vui lòng nhập lại."); window.location="index.php?manage=cart";</script>';}
}
}
}
?>