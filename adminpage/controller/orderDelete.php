<?php

/** bio = order_id
 * profileimage = avatar
 * save_profile = upload
 */

header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST["id"])&& !empty($_POST["id"]))  {
  // for the database/*


  include_once("../utils/connection.php");
  //validate address address

 // $avatar =$row["avatar"];

    $sql = "DELETE FROM user_order   where order_id= ? ";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt,"s",$param_id );
      $param_id = trim($_POST["id"]);
    

      if (mysqli_stmt_execute($stmt)) {
        header('Location: ../view/order-page.php');
      } else {
        $error = "Oop! Somem thing wrong . Please try again later";
        session_start();
        $_SESSION['errormsg']=$error;
        header('Location: ../view/error.php');
        exit();
      }
    }}
   
  

 /*else {
  $error = "Oop! Somem thing wrong . Please try again later";
  session_start();
  $_SESSION['errormsg'];
  header('Location: ../view/error');
  exit();
}*/
?>  