<?php
$msg = "";
$msg_class = "";
/** bio = useR_id
 * profileimage = avatar
 * save_profile = upload
 */
include_once("../utils/connection.php");
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST["caten_id"]) && !empty($_POST["caten_id"])) {
  // for the database/*
  $caten_id = $_POST["caten_id"];
 
  $caten_name = $_POST["caten_name"];


  //Validate name*/


  //validate address address

 

    $sql = "UPDATE categoryn set caten_name=?  where caten_id=?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt, "si",$param_name , $param_id);
      $param_id = $caten_id;
      $param_name = $caten_name;

      if (mysqli_stmt_execute($stmt)) {
        header('Location: ../view/caten-edit.php?id='.$caten_id);
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
