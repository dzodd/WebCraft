<?php
$msg = "";
$msg_class = "";
/** bio = news_id
 * profileimage = avatar
 * save_profile = upload
 */
include_once("../utils/connection.php");
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST["create"])) {
  // for the database/*

  $news_title = $_POST["news_title"];
  $news_content = $_POST["news_content"];
  $news_name = $_POST["news_name"];
 $caten_id=$_POST["caten_id"];
  //Validate name*/


  //validate address address

 

    $sql = "INSERT INTO news (news_name , news_title,news_content , caten_id) VALUES (?,?,?,?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt, "sssi",$param_name, $param_title,  $param_content,$param_caten_id);
    
      $param_content = $news_content;
      $param_name = $news_name;
      $param_title = $news_title;
      $param_caten_id = $caten_id;

      if (mysqli_stmt_execute($stmt)) {
        header('Location: ../view/news-page.php');
      } else {
        $error = "sorry ! The category ID you just selected does not exist, please check again";
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
