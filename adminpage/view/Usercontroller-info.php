<?php
function showUserDetail($userDetail){
    echo'<div class="table-stats order-table ov-h">';
    echo'<caption><h1>Danh sách Chi tiết người dùng</h1> </caption>';
    echo'<table border="1" class="table ">';
    echo'<thead>';
    echo'<tr>';
    echo'<th class="serial">#</th>';
    echo'<th class="avatar">Avatar</th>';
    echo'<th>ID</th>';
    echo'<th>UserName</th>';
    echo'<th>Email</th>';
    echo'<th>Status</th>';

    echo'</tr>';
    echo'</thead>';
    echo'<tbody>';


echo'<tr>';     
echo'<td class="serial">#</td>';
echo'<td class="avatar">';
echo'<div class="round-img">';
echo' <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>';
echo' </div>';
echo'</td>';
echo'<td> #5469 </td>';
echo'<td>  <span class="name">'.$userDetail["username"].'</span> </td>';                         
echo'<td> <span class="product">'.$userDetail["email"].'</span> </td>';
echo'<td>';
echo'<span class="badge badge-complete">Active</span>';
echo'</td>';
echo'</tr>';



echo'  </tbody>';
echo'  </table>';
echo'</div>';
}
  
  $txt_username = $_POST["txt_username"];
  $txt_email = $_POST["txt_email"];
  $txt_password = $_POST["txt_password"];
  $Role = $_POST["Role"];
  $chk_football = isset($_POST["chk_football"]) ? $_POST["chk_football"] : "";
  $chk_game = isset($_POST["chk_game"]) ? $_POST["chk_game"] : "";
  $chk_code =  isset($_POST["chk_code"]) ? $_POST["chk_code"] : "";
  $sex = $_POST["sex"];
  $file_avatar = $_FILES["file_avatar"]["name"];

  $user_01 = array("username"=>"dzod", "email"=>"haiduong6109@gmail.com" , "password" => "123" , "role"=>"2","sex"=> "male","prefer"=> "football,game","file_avatar"=>"images/admin.jpg");
  $arrUser=array();
  array_push ($arrUser,$user_01);
  showUser($arrUser);       


        $strSoThich = $chk_football.",".$chk_code.",".$chk_game;
        $user_02 = array("username"=>" $txt_username", "email"=>"$txt_email" , "password" => "$txt_password" , "role"=>"$Role","sex"=> " $sex","prefer"=> "$strSoThich","file_avatar"=>"$file_avatar");
        $arrUser=array();
        array_push ($arrUser,$user_02);
        showUser($arrUser);
    
    
  
              
  
 
?>
