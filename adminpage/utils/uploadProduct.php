<?php
session_start();
 $error="";
if (isset($_POST['upload'])){


    
    $newFileName= $_GET["id"];
    if(empty($newFileName)){
        echo"Không lấy được product_id";
    }
    
}else{
    $newFileName=strtolower(str_replace(" ", "-",$newFileName));

}



$file=$_FILES['file'];

$fileName=$file["name"];
$filetype=$file["type"];
$fileTempName=$file["tmp_name"];
$fileError=$file["error"];
$fileSize=$file["size"];
$product_id=$_GET['id'];
$fileExt=explode(".",$fileName);
$fileActuaExt=strtolower(end($fileExt));

$allowed=array("jpg");
if(in_array($fileActuaExt , $allowed)){
    if($fileError === 0){
        if($fileSize<5000000){
               $imageFullName=$newFileName ."." . $fileActuaExt;
               $fileDestination = "../product_image/".$imageFullName;
               echo $fileDestination;

        include_once"../utils/connection.php";
       // if(empty($imageFile)|| empty($imageDesc)){
            //header("location: ../view/product-edit.php?upload=empty");
           // exit();

      //  }else{
            $sql="SELECT * FROM product";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo"SQL statement failed!";
                $error="SQL statement failed!";
                $_SESSION['errormsg']= $error;
                header('Location: ../view/error.php');
                

            }else{
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $rowCount=mysqli_num_rows($result);
                $SetImageOrder = $rowCount +1;//  này là ví dụ ghiệp vụ đém ảnh ,Cái này là test tự tăng thứ tư ảnh thôi
     
                $sql="UPDATE  product SET product_image = ? WHERE (product_id = ?)";
                if(!mysqli_stmt_prepare($stmt , $sql)){
                    $error="SQL statement failed";
                    $_SESSION['errormsg']= $error;
                      header('Location: ../view/error.php');

                }else{
                    mysqli_stmt_bind_param($stmt , "si",$imageFullName ,$product_id);
                    mysqli_stmt_execute($stmt);
                    $file_pointer ="../product_image/".$imageFullName;
                    if (!unlink("$file_pointer")) { 
                        echo ("$file_pointer cannot be deleted due to an error"); 
                        header('Location: ../view/error.php');
                    } 
                    else { 
                        echo ("$file_pointer has been deleted"); 
                    } 
                       

                    move_uploaded_file($fileTempName,$fileDestination);
                    $succes="upload success";
                    header('Location: ../view/product-edit.php?id='.$product_id);
                 
                }
            }
        }
    }
}
else{

    echo date('Y-m-d H:i:s');
    $error="You uploaded the wrong type of image";
    $_SESSION['errormsg']= $error;
    header('Location: ../view/error.php');
    
    
}
echo"khong lam gif ca";

