<?php

/** bio = news_id
 * profileimage = avatar
 * save_profile = upload
 */

header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST["id"])&& !empty($_POST["id"]))  {
  // for the database/*


  include_once("../utils/connection.php");
  //validate address address

 // $avatar =$row["avatar"];

    $sql = "DELETE FROM news   where news_id= ? ";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt,"s",$param_id );
      $param_id = trim($_POST["id"]);
      $avatar=($_POST["news_img"]) ; 

      if (mysqli_stmt_execute($stmt)) {
      $file_pointer ="../news-img/".$avatar;
        if (!unlink("$file_pointer")) { 
            echo ("$file_pointer cannot be deleted due to an error"); 
            header('Location: ../view/error.php');
        } 
        else { 
            echo ("$file_pointer has been deleted"); 
        } 
        header('Location: ../view/news-page');
      } else {
        $error = "Oop! Somem thing wrong . Please try again later";
        session_start();
        $_SESSION['errormsg']=$error;
        header('Location: ../view/error.php');
        exit();
      }
    }
   
  

} /*else {
  $error = "Oop! Somem thing wrong . Please try again later";
  session_start();
  $_SESSION['errormsg'];
  header('Location: ../view/error');
  exit();
}*/
?>  