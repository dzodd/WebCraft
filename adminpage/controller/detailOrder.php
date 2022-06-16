<?php

if(isset( $_GET["id"]) && !empty(trim($_GET["id"]))){

    require_once '../utils/connection.php';
   
    $sql="SELECT * FROM order_user,user where user.user_id=order_user.user_id AND order_id=? ";
if($stmt = mysqli_prepare($conn , $sql)){
    mysqli_stmt_bind_param($stmt,"i",$param_id,);

    $param_id=trim($_GET["id"]);

    if(mysqli_stmt_execute($stmt)){

        $result=mysqli_stmt_get_result($stmt);


        if(mysqli_stmt_execute($stmt)==1){

        $row=mysqli_fetch_array($result  , MYSQLI_ASSOC);
        $order_id =$row["order_id"];
        $fullname =$row["fullname"];
        $email_order =$row["email_order"];
        $phone =$row["phone"];
        $address_order =$row["address_order"];
        $status_order =$row["status_order"];
      


        

    }
    else{
        header('Location: ../view/error-page.php');
        exit();
        }


    }else{
        echo"Oop Something went wrong . Please try again later";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{

    header('Location: ../view/error-page.php');
    exit();
}
}
