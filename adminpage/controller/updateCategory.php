<?php
$msg = "";
$msg_class = "";
/** bio = useR_id
 * profileimage = avatar
 * save_profile = upload
 */
include_once("../utils/connection.php");
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST["cate_id"]) && !empty($_POST["cate_id"])) {
  // for the database/*
  $cate_id = $_POST["cate_id"];
 
  $cate_name = $_POST["cate_name"];


  //Validate name*/


  //validate address address

 

    $sql = "UPDATE category set cate_name=?  where cate_id=?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt, "si",$param_name , $param_id);
      $param_id = $cate_id;
      $param_name = $cate_name;

      if (mysqli_stmt_execute($stmt)) {
        header('Location: ../view/category-edit.php?id='.$cate_id);
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
