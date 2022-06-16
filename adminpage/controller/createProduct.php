<?php
$msg = "";
$msg_class = "";
/** bio = product_id
 * profileimage = avatar
 * save_profile = upload
 */
include_once("../utils/connection.php");
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST["create"])) {
  // for the database/*

  $product_name = $_POST["product_name"];
  $price = $_POST["price"];
  $description = $_POST["description"];
 
  $cate_id = $_POST["cate_id"];

  //Validate name*/


  //validate address address

 

    $sql = "INSERT INTO product (product_name , price, description ,  cate_id) VALUES (?,?,?,?,?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt, "sisi",$param_name, $param_price,  $param_description, $param_cate_id);
   
    
      $param_cate_id = $cate_id;
     
  
      $param_description = $description;
      $param_price=$price;
      $param_name = $product_name;

      if (mysqli_stmt_execute($stmt)) {
        header('Location: ../view/product-page.php');
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
