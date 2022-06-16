<?php
$msg = "";
$msg_class = "";
/** bio = useR_id
 * profileimage = avatar
 * save_profile = upload
 */
include_once("../utils/connection.php");

header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST["order_id"]) && !empty($_POST["order_id"])) {
  // for the database/*
  $order_id = $_POST["order_id"];
  
  $fullname = $_POST["fullname"];
  $order_address = $_POST["order_address"];
  $order_email = $_POST["order_email"];
  $order_status = $_POST["status_order"];
  $phone=$_POST["phone"];

  
  //Validate name*/


  //validate address address

 

    $sql = "UPDATE `myproject`.`order_user` SET `status_order` = ?, `email_order` = ?, `fullname` = ?, `phone` = ?, `address_order` = ? WHERE (`order_id` = ?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt, "ssiisi",$param_status,$param_email,$param_name,    $param_phone,$param_address,$param_id);
      $param_id = $order_id;
      $param_status = $status_order;
      $param_email = $order_email;
      $param_name = $fullname;
      $param_address=$order_address;
      $param_phone=$phone;

      if (mysqli_stmt_execute($stmt)) {
        header('Location: ../view/order-edit.php?id='.$order_id);
      } else {
        $error = "sorry ! The category ID you just selected does not exist, please check again";
     
        $_SESSION['errormsg']=$error;
        session_start();
        header('Location: ../view/error.php');
        exit();
      }
    }
    mysqli_stmt_close($stmt);

    mysqli_close($connn);
  

} /*else {
  $error = "Oop! Somem thing wrong . Please try again later";
  session_start();
  $_SESSION['errormsg'];
  header('Location: ../view/error');
  exit();
}*/
?>  
