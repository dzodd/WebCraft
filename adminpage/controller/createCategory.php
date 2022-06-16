<?php
$msg = "";
$msg_class = "";
/** bio = news_id
 * profileimage = avatar
 * save_profile = upload
 */
include_once("../utils/connection.php");
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST["createCate"])) {
  // for the database/*

  $cate_name = $_POST["cate_name"];
 

  //Validate name*/


  //validate address address

 

    $sql = "INSERT INTO category (cate_name ) VALUES (?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt, "s",$param_name);
    
      $param_name = $cate_name;
  

      if (mysqli_stmt_execute($stmt)) {
        header('Location: ../view/category-page.php');
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
