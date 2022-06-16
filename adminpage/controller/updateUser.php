<?php
$msg = "";
$msg_class = "";
/** bio = useR_id
 * profileimage = avatar
 * save_profile = upload
 */
include_once("../utils/connection.php");
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST["user_id"]) && !empty($_POST["user_id"])) {
  // for the database/*
  $user_id = $_POST["user_id"];
  $birth = $_POST["birth"];
  $sex = $_POST["sex"];
  $status = $_POST["status"];
  $user_name=$_POST["user_name"];
  $email = $_POST["email"];
  $address=$_POST["address"];
  //Validate name*/
  $pass=$_POST["pass"];

  //validate address address

 

    $sql = "UPDATE user set birth=?,user_name=? , address= ?, sex = ? , email=?,  status_user=?,pass=? where user_id=?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt, "sssssisi",$param_birth, $param_name,  $param_address,  $param_sex, $param_email,$param_status, $param_pass, $param_id);
      $param_id = $user_id;
      $param_email = $email;
      $param_birth = $birth;
      $param_address = $address;
      $param_sex = $sex;
      $param_status = $status;
      $param_pass=$pass;
      $param_name = $user_name;

      if (mysqli_stmt_execute($stmt)) {
        header('Location: ../view/user-edit.php?id='.$user_id);
      } else {
        $error = "Oop! Somem thing wrong . Please try again later";
        session_start();
        $_SESSION['errormsg']=$error;
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
