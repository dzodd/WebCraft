<?php
$msg = "";
$msg_class = "";
/** bio = useR_id
 * profileimage = avatar
 * save_profile = upload
 */
include_once("../utils/connection.php");

header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST["news_id"]) && !empty($_POST["news_id"])) {
  // for the database/*
  $news_id = $_POST["news_id"];
  $news_title = $_POST["news_title"];
  $news_name = $_POST["news_name"];

  $news_content=$_POST["news_content"];
  //Validate name*/


  //validate address address

 

    $sql = "UPDATE news set news_title=?,news_name=?  ,news_content=? where news_id=?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt, "sssi",$param_title, $param_name,  $param_content, $param_id);
      $param_id = $news_id;
      $param_title = $news_title;
      $param_content = $news_content;
      $param_name = $news_name;

      if (mysqli_stmt_execute($stmt)) {
        header('Location: ../view/news-edit.php?id='.$news_id);
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
