<?php

if(isset( $_GET["id"]) && !empty(trim($_GET["id"]))){

    require_once '../utils/connection.php';
$sql="SELECT * FROM user where user_id=?";
if($stmt = mysqli_prepare($conn , $sql)){
    mysqli_stmt_bind_param($stmt,"i",$param_id,);

    $param_id=trim($_GET["id"]);

    if(mysqli_stmt_execute($stmt)){

        $result=mysqli_stmt_get_result($stmt);


        if(mysqli_stmt_execute($stmt)==1){

        $row=mysqli_fetch_array($result  , MYSQLI_ASSOC);
        $user_id =$row["user_id"];
        $user_name =$row["user_name"];
        $birth =$row["birth"];
        $sex =$row["sex"];
        $date_created =$row["date_created"];
        $status =$row["status_user"];
        $avatar =$row["avatar"];


        

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
