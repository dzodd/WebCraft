<?php

if(isset( $_GET["id"]) && !empty(trim($_GET["id"]))){

    require_once '../utils/connection.php';
$sql="SELECT * FROM category where cate_id=?";
if($stmt = mysqli_prepare($conn , $sql)){
    mysqli_stmt_bind_param($stmt,"i",$param_id,);

    $param_id=trim($_GET["id"]);

    if(mysqli_stmt_execute($stmt)){

        $result=mysqli_stmt_get_result($stmt);


        if(mysqli_stmt_execute($stmt)==1){

        $row=mysqli_fetch_array($result  , MYSQLI_ASSOC);
        $cate_id =$row["cate_id"];
        $cate_name =$row["cate_name"];
    


        

    }   
    else{
        header('Location: ../view/error-page.php');
        exit();
        }


    }else{
        header('Location: ../view/error-page.php');
        exit();
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{

    header('Location: ../view/error-page.php');
    exit();
}
}
